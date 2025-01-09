<?php
include 'connectDB.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $ime = mysqli_real_escape_string($conn, $_POST['ime']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $lozinka = $_POST['lozinka'];

    if (empty($ime) || empty($email) || empty($lozinka)) {
        echo "Sva polja moraju biti popunjena!";
        exit();
    }

    $query = "SELECT * FROM regkorisnici WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email već postoji!";
        exit();
    }

    $hashedPassword = password_hash($lozinka, PASSWORD_DEFAULT);

    $insertQuery = "INSERT INTO regkorisnici (ime, email, lozinka) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("sss", $ime, $email, $hashedPassword);
    
    if ($stmt->execute()) {
        echo "Registracija uspešna!";
        header("Location: prijava.php");
        exit();
    } else {
        echo "Došlo je do greške. Pokušajte ponovo.";
    }

    $stmt->close();
}

$conn->close();
?>