<?php
include 'connectDB.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $stara_lozinka = $_POST['stara_lozinka'];
    $nova_lozinka = $_POST['nova_lozinka'];

    // Pronađi korisnika u bazi
    $query = "SELECT * FROM regkorisnici WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $regkorisnik = $result->fetch_assoc();
        $hash = $regkorisnik['lozinka'];

        // Proveri da li je stara lozinka tačna
        if (password_verify($stara_lozinka, $hash)) {
            // Ažuriraj lozinku u bazi
            $nova_lozinka_hash = password_hash($nova_lozinka, PASSWORD_DEFAULT);
            $update_query = "UPDATE regkorisnici SET lozinka = ? WHERE email = ?";
            $update_stmt = $conn->prepare($update_query);
            $update_stmt->bind_param("ss", $nova_lozinka_hash, $email);

            if ($update_stmt->execute()) {
                echo "Lozinka je uspešno promenjena!";
            } else {
                echo "Greška pri promeni lozinke!";
            }

            $update_stmt->close();
        } else {
            echo "Pogrešna stara lozinka!";
        }
    } else {
        echo "Korisnik sa tim email-om ne postoji!";
    }

    $stmt->close();
}

$conn->close();
?>
