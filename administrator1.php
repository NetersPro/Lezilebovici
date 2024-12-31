<?php
session_start(); // Pokrećemo sesiju
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lezilebovići</title>
    <!-- Link to your CSS stylesheets, if any -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
		<h3>Adminstrator sajta</h3>
		<form id="hesiranje" method="" action="hesiranjelozinki.php">
			<button type="submit" name="adminlogin">Prijavi se</button>
		</form>
	</header>		
    <main>
        <form method="POST" action="adminlogin.php">
			<h2>Login</h2>
			<label for="admin_ime">Korisničko ime:</label>
			<input type="text" id="admin_ime" name="admin_ime" required>
			
			<label for="admin_lozinka">Lozinka:</label>
			<input type="password" id="admin_lozinka" name="admin_lozinka" required>
			
			<button type="submit">Prijavi se</button>
		</form>
    </footer>
    <script src="script.js"></script>
</body>
</html>
