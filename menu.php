<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Royal</title>
    <link rel="stylesheet" href="menu.css">
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

    <section>
        <div id="cijeli-meni">
            <div id="predjela" class="jela">
                <p>Predjela</p>
                <div class="div1">
                    <div class="div2">
                        <?php
                        
                            $xml = simplexml_load_file('jela.xml');

                        ?>
                        <?php foreach ($xml->predjela->predjelo as $predjelo) : ?>

                            <div class="div3">
                                <div class="naziv"><?php echo $predjelo->naziv; ?></div>
                                <div class="pregrada"></div>
                                <div class="cijena"><?php echo $predjelo->cijena; ?></div>
                            </div>
                            <div class="tag"><?php echo $predjelo->opis; ?></div>

                        <?php endforeach; ?>

                    </div>
                    <img src="images/gallery01.jpg" alt="">
                </div>
            </div>

            <div id="glavnajela" class="jela">
                <p>Glavna jela</p>
                <div class="div1">
                    <img src="images/gallery03.jpg" alt="">
                    <div class="div2">
                        <?php
                        
                            $xml = simplexml_load_file('jela.xml');

                        ?>
                        <?php foreach ($xml->glavnaJela->glavnoJelo as $glavnoJelo) : ?>
                            <div class="div3">
                                <div class="naziv"><?php echo $glavnoJelo->naziv; ?></div>
                                <div class="pregrada"></div>
                                <div class="cijena"><?php echo $glavnoJelo->cijena; ?></div>
                            </div>
                            <div class="tag"><?php echo $glavnoJelo->opis; ?></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div id="deserti" class="jela">
                <p>Deserti</p>
                <div class="div1">
                    <div class="div2">
                        <?php
                        
                            $xml = simplexml_load_file('jela.xml');

                        ?>
                        <?php foreach ($xml->predjela->predjelo as $predjelo) : ?>

                            <div class="div3">
                                <div class="naziv"><?php echo $predjelo->naziv; ?></div>
                                <div class="pregrada"></div>
                                <div class="cijena"><?php echo $predjelo->cijena; ?></div>
                            </div>
                            <div class="tag"><?php echo $predjelo->opis; ?></div>

                        <?php endforeach; ?>

                    </div>
                    <img src="images/gallery02.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <footer>Leopold Jurić</footer>

    <script src="script.js"></script>
</body>
</html>