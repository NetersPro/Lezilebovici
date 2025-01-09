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
            <h2>O nama</h2>
            <p> Ko smo mi?
                Tim školovanih zaljubljenika u dizajn i estetiku.
                Naš tim diše kao jedan organizam. Pokušavamo da se edukujemo i nadopunjujemo svoje
                znanje svakodnevno. To znanje pokušavamo i vama da prenesemo kako bismo vam olakšali
                ne tako lak zadatak kao što je uređenje životnog prostora.
                Pored uređenja prostora radimo i izradu komadnog nameštaja koja je nadahnuta i
                inspirisana trenutnim trendovima u kombinaciji sa duhom starog vremena.
                Ako vam je potrebna dodatna stručna pomoć mi vam stojimo na raspolaganju. Samo
                popunite kontakt formu, iznesite svoj problem i mi ćemo pokušati da vam u što kraćem roku
                ponudimo i predložimo rešenje.
            </p>

        </section>

    </main>
    <footer>
        <p>&copy; 2024 Lezilebovići. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
