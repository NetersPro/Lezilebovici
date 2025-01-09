<?php
include 'connectDB.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Preuzimanje podataka sa forme
    $ime = $_POST['ime'];
    $email = $_POST['email'];
	$poruka = $_POST['poruka'];
	$datum = date("Y-m-d H:i:s"); 
	echo $datum;
    // Upit za dodavanje reda u tabelu zaobuku
    $query = "INSERT INTO poruke (ime, email, poruka, datum) 
                VALUES ('$ime', '$email', '$poruka','$datum');";
    $result = mysqli_query($conn, $query);
		echo $result;
    if (!$result) {
            echo "Neuspešno slanje poruke! Pokušajte ponovo!";
        }
    else {
        die("Uspešno ste poslali poruku! Odgovaramo u roku od 24 sata! Hvala!") ; 
		header("Location: unoszaobuku.php"); 
        exit();
    }
}
?>
