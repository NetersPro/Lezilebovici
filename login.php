<?php
include 'connectDB.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $lozinka = $_POST['lozinka'];

 
    $query = "SELECT * FROM regkorisnici WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
   
        $regkorisnik = $result->fetch_assoc();
        $hash = $regkorisnik['lozinka'];

        if (password_verify($lozinka, $hash)) {
         
            $_SESSION['id'] = $regkorisnik['id'];
            header("Location: index.php");
            exit();
        } else {
            echo "Pogrešan pasvord!";
        }
    } else {
    
        echo "Korisnik ne postoji!";
    }

  
    $stmt->close();
}

$conn->close();
?>