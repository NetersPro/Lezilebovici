<?php
session_start();
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lezilebovići</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="form-style.css">
</head>
<body>
    <header class="banner">
        <img src="slike/banner.jpg" alt="Banner Image">
   </header>
       <div class="menu">
           <ul>
               <li><a href="index.php">Početna</a></li>
               <li><a href="products.php">Produkti</a></li>
               <li><a href="projects.php">Projekti</a></li>
               <li><a href="galerija.php">Galerija</a></li>
               <li><a href="aboutus.php">O nama</a></li>
               <li><a href="contact.php">Kontakt</a></li>
               <li><a href="prijava.php">Prijava</a></li>
			   <?php if (isset($_SESSION['id'])): ?>
					<li><a href="logout.php">Odjava</a></li>
			   <?php endif; ?>
           </ul>
       </div>

    <main>
        <section>
           
            <div class="container">
                <form id="login-form" method="POST" action="login.php">
                    <h2>Prijava</h2>
                    <label for="login-email">Email</label>
                    <input type="email" id="login-email" name="email" required>
                    <label for="login-password">Lozinka</label>
                    <input type="password" id="login-password" name="lozinka" required>
                    <br>
                    <div class="checkbox-container">
                        <input type="checkbox" id="show-password" onclick="togglePassword()">
                        <label for="show-password">Vidi lozinku</label>
                    </div>
                    <br><br>
                    <button type="submit" name="login">Prijavi se</button>
                    <div class="toggle-link">
                        <a href="change-password.php">Promeni lozinku!</a>
                    </div>
                </form>
        
                <form id="register-form" method="POST" action="regist.php" style="display: none;">
                    <h2>Registracija</h2>
                    <label for="register-name">Ime</label>
                    <input type="text" id="register-name" name="ime" required>
                    <label for="register-email">Email</label>
                    <input type="email" id="register-email" name="email" required>
                    <label for="register-password">Lozinka</label>
                    <input type="password" id="register-password" name="lozinka" required>  
                    <button type="submit" name="register">Registruj se</button>
                </form>
        
                <div class="toggle-link">
                    <span id="toggle-text">Nemate nalog? <a href="#" onclick="toggleForms()">Registrujte se</a></span>
                </div>
            </div>
        
            <script>
                const loginForm = document.getElementById('login-form');
                const registerForm = document.getElementById('register-form');
                const toggleText = document.getElementById('toggle-text');
        
                function toggleForms() {
                    if (loginForm.style.display === 'none') {
                        loginForm.style.display = 'block';
                        registerForm.style.display = 'none';
                        toggleText.innerHTML = 'Nemate nalog? <a href="#" onclick="toggleForms()">Registrujte se</a>';
                    } else {
                        loginForm.style.display = 'none';
                        registerForm.style.display = 'block';
                        toggleText.innerHTML = 'Već imate nalog? <a href="#" onclick="toggleForms()">Prijavite se</a>';
                    }
                }      

                function togglePassword() {
                const passwordField = document.getElementById("login-password");
                passwordField.type = passwordField.type === "password" ? "text" : "password";
                }
         
            </script>

	<footer>
        <p>&copy; 2024 Lezilebovići. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
