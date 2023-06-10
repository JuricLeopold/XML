<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/e3fe3350f1.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav id="navigation">
            <div id="logo">
                <span><a href="index.php">Royal</a></span>
            </div>

            <ul>
                <li><a href="index.php">Naslovnica</a></li>
                <li><a href="about.html">O&nbsp;nama</a></li>
                <li><a href="menu.php">Meni</a></li>
                <li><a href="login.php">Prijava</a></li>
            </ul>

            <div class="iconice">
                <i class="fa-sharp fa-solid fa-bars fa-2xl" id="fa-bars" onclick="show1()"></i>
            </div>

            <div id="nav-mini">
                <ul>
                    <img src="images/close.png" alt="" onclick="show2()" id="fa-x">
                    <li><a href="index.php" onclick="hide()">Naslovnica</a></li>
                    <li><a href="about.html" onclick="hide()">O&nbsp;nama</a></li>
                    <li><a href="menu.php" onclick="hide()">Meni</a></li>
                    <li><a href="login.php" onclick="hide()">Prijava</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section id="hero">
        <div class="container1">
            <div class="text">
                <p>Prati novi okus</p>
                <img src="images/spoon.svg" alt="">
            </div>
            <h1>Ključ do vrhunske hrane</h1>
            <p>Okusi koji oduzimaju dah. Iskusite najfiniju gastronomsku umjetnost u našem restoranu. Savršena sinergija okusa, tekstura i prezentacije.</p>
            <button class="button"><a href="#menu">Istraži meni</a></button>
        </div>
        <div id="hero-img">
            <img src="images/welcome.jpg" alt="">
        </div>
    </section>

    <section id="about">
        <div id="R">
            <img src="images/R.png" alt="">
        </div>

        <div class="container2">
            <div id="o-nama">
                <h1>O nama</h1>
                <img src="images/spoon.svg" alt="" class="spoon">
                <p>Mi smo restoran koji se ponosi svojom bogatom tradicijom, izvanrednom kuhinjom i vrhunskom uslugom. Smješteni u srcu grada, stvaramo jedinstveno iskustvo koje će oduševiti vaša osjetila. Restoran Royal pruža iznajmljivanje prostora.</p>
                <button class="button"><a href="about.html">Saznaj više</a></button>
            </div>

            <div id="knife">
                <img src="images/knife.png" alt="">
            </div>

            <div id="nasa-povijest">
                <h1>Naša povijest</h1>
                <img src="images/spoon.svg" alt="" class="spoon">
                <p>Restoran Royal ima dugu i bogatu povijest koja seže unazad više od pola stoljeća. Otvaranje restorana Royal seže u davnu 1960. godinu kada je osnovan kao obiteljski restoran s ciljem pružanja vrhunske gastronomske usluge.</p>
                <button class="button"><a href="about.html">Saznaj više</a></button>
            </div>
        </div>
    </section>

    <section id="menu">
        <div id="menu-top">
            <h2>Jelovnik prilagođen vašem nepcu</h2>
            <img src="images/spoon.svg" alt="" class="spoon">
            <h1>Pića</h1>
        </div>

        <div id="vina-kokteli">
            <div id="vina">
                <p>Vina i Piva</p>
                <div class="div1">
                    <div class="div2">
                        <?php
                        
                            $xml = simplexml_load_file('pica.xml');

                        ?>
                        <?php foreach ($xml->vina->vino as $vino) : ?>

                            <div class="div3">
                                <div class="naziv"><?php echo $vino->naziv; ?></div>
                                <div class="pregrada"></div>
                                <div class="cijena"><?php echo $vino->cijena; ?></div>
                            </div>
                            <div class="tag"><?php echo $vino->opis; ?></div>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div id="menu-img"></div>

            <div id="kokteli">
                <p>Kokteli</p>
                <div class="div1">
                    <div class="div2">
                        <?php
                        
                            $xml = simplexml_load_file('pica.xml');

                        ?>
                        <?php foreach ($xml->kokteli->koktel as $koktel) : ?>
                            <div class="div3">
                                <div class="naziv"><?php echo $koktel->naziv; ?></div>
                                <div class="pregrada"></div>
                                <div class="cijena"><?php echo $koktel->cijena; ?></div>
                            </div>
                            <div class="tag"><?php echo $koktel->opis; ?></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <div id="prikazi">
            <button class="button"><a href="menu.php">Prikaži još</a></button>
        </div>
    </section>

    <footer>Leopold Jurić</footer>

    <script src="script.js"></script>
</body>
</html>