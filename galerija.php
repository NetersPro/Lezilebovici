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
            <h2>Galerija</h2>
            <table>
                <tr>
                    <td><img src="slike/kupatilo.jpg" 
                        alt="kupatilo"></td>                                 
                    <td><img src="slike/restoran.jpg"
                        alt="restoran"></td>
                    <td><img src="slike/terasa.jpg"
                        alt="terasa"></td>
                </tr>
                
                <tr>
                    <td><img src="slike/salon.jpg" 
                        alt="salon"></td>                                 
                    <td><img src="slike/stan.jpg"
                        alt="stan"></td>
                    <td><img src="slike/lavabo.jpg"
                        alt="lavabo"></td>
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
