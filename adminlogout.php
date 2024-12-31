<?php
session_start();
session_unset(); // Uklanja sve sesijske promenljive
session_destroy(); // Uništava sesiju
header("Location: administrator.php"); // Preusmerava korisnika na login stranicu
exit();
?>