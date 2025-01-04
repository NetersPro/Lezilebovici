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
    <main>
        <section>
			<h2>Produkti</h2>
            <table>
                <tr>
                    <td colspan="3">
                        <h3>Lace komoda</h3>
                        <p>
                        Lace komoda
                        Inspirisana istokom, povezana sa severom. 
                        Svedeni dizajn koji pleni svojim izgledom. 
                        Uklapa se u gotovo sve stilove enterijera. 
                        Izrađena od drveta kruške sa vratima i detaljima od
                         inoxa. Dimenzije komode su 95x45x90 cm 
                         ( širina, dubina, visina ).
                    </p>
                    </td>
                </tr>
                <tr>
                    <td><img src="slike/KOMODA 1.jpg" 
                        alt="Kliknite na mene" id="image1"></td>                                 
                    <td><img src="slike/KOMODA 2.jpg"
                        alt="Kliknite na mene" id="image2"></td>
                    <td><img src="slike/KOMODA 3.jpg"
                        alt="Kliknite na mene" id="image3"></td>
                </tr>
           </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Lezilebovići. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
