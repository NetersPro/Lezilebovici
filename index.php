<?php
session_start(); // Pokrećemo sesiju
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lezilebovići</title>
    <link rel="stylesheet" href="styles.css">
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
        <section class="welcome">
            <h2>Dobro došli!</h2>
            <p>Dizajn enterijera je više od dekoracije i ulepšavanja prostora. 
                Kroz enterijer se prenose emocije i karakter pojedinca i porodice.
                Na ovom sajtu zavirite u svet trendova i mogućnosti u dizajnu enterijera,
                naučite neke osnovne postulate u smislu funkcionalnosti prostora i mogućnosti
                koje su na raspolaganju.
                Iskoristite konstruktivne savete i napravite od svog doma oazu za svakodnevno uživanje,
                a ako imate neka pitanja slobodno me kontaktirajte.
                Ne zaboravite da je lepota u jednostavnosti.</p>

        </section>

    </main>
    <footer>
        <p>&copy; 2024 Lezilebovići. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>