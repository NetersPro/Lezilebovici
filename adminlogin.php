<?php
session_start(); // Pokreće sesiju
include 'connectDB.php'; // Uključite fajl za povezivanje sa bazom

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Preuzimanje i sanitizacija podataka iz forme
    $admin_ime = mysqli_real_escape_string($conn, $_POST['admin_ime']);
    $admin_lozinka = $_POST['admin_lozinka']; // Lozinka nije hashovana u unosu

    // SQL upit za pretragu korisnika prema korisničkom imenu
    $query = "SELECT * FROM administratori WHERE admin_ime = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $admin_ime);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Korisnik postoji
        $admin = $result->fetch_assoc();
        $hashed_lozinka = $admin['admin_lozinka'];

        // Provera šifrovane lozinke
        if (password_verify($admin_lozinka, $hashed_lozinka)) {
            // Lozinka je tačna - postavljanje sesije
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['admin_ime'] = $admin['admin_ime'];
            header("Location: dashboard.php"); // Preusmeravanje na dashboard
            exit();
        } else {
            // Pogrešna lozinka
            echo "Pogrešna lozinka!";
        }
    } else {
        // Korisničko ime nije pronađeno
        echo "Korisnik ne postoji!";
    }

    $stmt->close();
    $conn->close();
}
?>
