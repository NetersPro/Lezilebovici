<?php
session_start();
include 'connectDB.php'; // Povezivanje sa bazom podataka

// Proveriti da li je korisnik logovan
if (!isset($_SESSION['id'])) {
    // Ako nije logovan, preusmeriti na prijava.php
    header("Location: prijava.php");
    exit();
}

// Postavljanje sadržaja u UTF-8 formatu
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
            <h2>Projekti</h2>
           <table>
                <tr>
                    <td colspan="4"><p>
                        Uređenje enterijera nije samo stvar estetike – to je proces stvaranja prostora koji odražava vašu ličnost, potrebe i način života. Pravilno osmišljen enterijer kombinuje funkcionalnost, harmoniju i stil, pružajući vam ne samo vizuelno zadovoljstvo već i udobnost u svakodnevnom životu.
Naš cilj je da zajedno sa vama osmislimo prostore u kojima ćete se osećati prijatno, inspirisano i motivisano. Bez obzira na to da li uređujemo vaš dom, kancelariju ili komercijalni prostor, trudimo se da svaki detalj bude pažljivo osmišljen kako bi doprineo celokupnoj atmosferi.

U našem procesu rada, polazimo od vaših želja i ideja, kombinujući ih sa savremenim trendovima i praktičnim rešenjima. Kroz pažljiv odabir boja, materijala, nameštaja i dekorativnih elemenata, kreiramo jedinstvene prostore koji inspirišu i zadovoljavaju sve vaše potrebe.
                    </p>
                    </td>
                </tr>
                <tr>
                    <td><img src="slike/kupatilo.jpg" 
                        alt="Kliknite na mene" id="image1"></td>                                 
                    <td><img src="slike/restoran.jpg"
                        alt="Kliknite na mene" id="image2"></td>
                    <td><img src="slike/terasa.jpg"
                        alt="Kliknite na mene" id="image3"></td>
                    <td><img src="slike/kuhinja.jpg"
                        alt="Kliknite na mene" id="image4"></td>
                </tr>
           </table>
           <div class="overlay" id="overlay1"></div>
            <div class="popup" id="popup1">
                <span class="close-btn" id="close-btn1">&times;</span>
                <p><h3>Kupatilo</h3><br>
                    Kupatilo u potkrovlju porodične kuće koje je u potpunosti adaptirano (nove instalacije sa
                    pomeranjem sanitarnih elemenata i postavljanje pratećih baterija za umivaonik i kadu).
                    Kako bi se vizuelno otvorilo i proširilo rađena je kao osnova bela keramika visoki sjaj. Pod je
                    urađen u granitnoj keramici sive boje koja se pokazala izuzetno dobro u smislu održavanja.
                    Dekor koji je razigrao kupatilo je keramički mozaik na mrežici koji jepostavljen na front kade i
                    leđa niše koje se nalaze uz kadu za odlaganje kozmetike.
                    Ogledalo iznad umivaonika se prostire čitavom širinom zida. Ispod ogledala nema keramike
                    već je lepljeno direktno na zid. Sama dimenzija ogledala daje kupatilu vizuelnu širinu i
                    dubinu.</p>
            </div>
            <div class="overlay" id="overlay2"></div>
            <div class="popup" id="popup2">
                <span class="close-btn" id="close-btn2">&times;</span>
                <p><h3>Restoran</h3><br>
                    Restoran koji je u prizemlju Spensa u Novom Sadu je dobio svoj nov oblik na zahtev
                    investitora koji je tražio moderan i ‘’živ’’ prostor.
                    Radovi koji su rađeni u restoranu su od mašinskih i elktro instalacija, keramičarskih radova,
                    preko rasvete i krajnjeg dekora u smislu odabira nameštaja i dodavanje boja.
                    Osnovna inspiracija za konačan izgled lokala je skandinavski minimalizam, ali da dodatnom
                    toplinom koja je postignuta elementima u veoma jarkim i smelim bojama i upotrebom natur
                    drveta kroz nameštaj kako lokal ne bi delovao potpuno hladno.</p>
            </div>
            <div class="overlay" id="overlay3"></div>
            <div class="popup" id="popup3">
                <span class="close-btn" id="close-btn3">&times;</span>
                <p><h3>Terasa</h3><br>
                    Zamenom postojeće podne keramike i delimičnim bojenjem fasade terasa je dobila potpuno
                    nov izgled.
                    Na pod je postavljena granitna keramika koja je po deklaraciji za spoljnu upotrebu sa
                    protivkliznim faktorom koji trpi kišu. Razlog za ovakvu keramiku bez obzira na to što je
                    terasa natkrivena jeste bezbednost korisnika.
                    Dodavanjem garniture za sedenje ova terasa je dobila svoj potpuni smisao.</p>
            </div>
            <div class="overlay" id="overlay4"></div>
            <div class="popup" id="popup4">
                <span class="close-btn" id="close-btn4">&times;</span>
                <p><h3>Kuhinja</h3><br>
                    Projektovanje kuhinje je rađeno u skladu sa čitavim enterijerom stana.
                    Čista I ravna linija je čine veoma modernom, ali I veoma funkcionalnom.
                    
                    Rađena je od pločastog materijala odnosno kombinacija korpusnog univera na svim
                    delovima koji se ne vide (korpusi) dok je na frontovima rađena od univera u beloj i crnoj boji
                    sa 100% lakom odnosno visoki sjaj.
                    Radna ploča je klasična lamelirana ploča koja je presvučena slojem u beloj boji.
                    Svi elementi u kuhinji su ugradni, osim frižidera koji je yumbo obostrano otvaranje.</p>
        </section>

    </main>

    <footer>
        <p>&copy; 2024 Lezilebovići. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
