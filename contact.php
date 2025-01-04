<?php
session_start();
include 'connectDB.php'; 

if (!isset($_SESSION['id'])) {
    header("Location: prijava.php");
    exit();
}

header('Content-Type: text/html; charset=utf-8');
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
     <br>
     <br>
    <main>
        <h2>Konaktirajte nas!</h2>
        <div class="kontakt">
            <div class="levo">
                <form action="slanjeporuke.php" method="POST">
                    <div class="polja">
                        <label for="ime"></label><br>
                        <input type="text" id="ime" name="ime" placeholder="IME" required>
                        <label for="email"></label>
                        <input type="email" id="email" name="email" placeholder="EMAIL" required>
                    </div> 
                    <br>
                    <label for="poruka"></label>
                    <textarea id="poruka" name="poruka"  placeholder="TEKST PORUKE" required ></textarea><br><br>
                    <input class ="button" type="submit" value="Pošalji">
                </form>
            </div>
            <div class="desno">
                <p> Adresa: Školska 1, Novi Sad</p>
                <p> Kontakt telefon: 065/341/43/33</p>
                <div class="mapa">
                    <p><img src="slike/skola.jpg"></p>
                </div>
            </div>
        </div>  
    </main>
</div>
    <footer>
        <p>&copy; 2024 Lezilebovići. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>