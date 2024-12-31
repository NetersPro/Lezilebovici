<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php"); // Ako nije prijavljen, preusmerava na login
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dobrodošli, <?php echo htmlspecialchars($_SESSION['admin_ime']); ?>!</h1>
    <a href="administrator.php">Odjava</a>
	
	<title>Poruke</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>Poruke</h1>
    <?php include 'prikazi_poruke.php'; ?>
</body>
</html>
</body>
</html>