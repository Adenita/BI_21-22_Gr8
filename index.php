<!DOCTYPE html>
<html manifest="web.appcache" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <script type="text/javascript" src="scripts/index.js"></script>
    <title>PWWW21-22_Gr5</title>
</head>
<body>
    <main>
    <?php include 'Inc/header.php'; ?>

      <section id = "slider">
        <div class = "slideContainer">
          <div class = "myslide fade">
            <img src="..\PWWW21-22_Gr5\assets\images\FantasySunset.jpg" alt = "Sunset" class = "imageSlider"/>
          </div>
          <div class = "myslide fade" hidden>
            <img src="../PWWW21-22_Gr5/assets/images/EnchantedAutumn.jpg" alt = "Autumn" class = "imageSlider"/>
          </div>
        </div> 
        <br>
        <div style="text-align:center">
          <a class="prev" onclick="plusSlides(-1)"><img src="../PWWW21-22_Gr5/assets/images/left-arrow.png" style = "width: 10px; height: 10px;" alt="" /></a>
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <a class="next" onclick="plusSlides(1)"> <img src="../PWWW21-22_Gr5/assets/images/right-arrow.png" style = "width: 10px; height: 10px;" alt="" /></a>
        </div>
      </section>

      <section id = "cs">
        <div class = "columnContainer">
            <div class = "column">
                <img src="../PWWW21-22_Gr5/assets/icons/icon-group.png" width="70x"; height="64px"; />
                <h3> Shpella e Mirushes </h3> 
                <p>
                    <?php
                        include("Inc/help.php");
                        $file = 'assets/Files/KosovaInfo.txt';
                        readMyFile($file);
                    ?>
                </p>
            </div>
            <div class = "column">
                <img src="../PWWW21-22_Gr5/assets/icons/icon-globe.png" width="70x"; height="64px";/>
                <h3> Shpella e Gadimes </h3>
                <p>
                <?php
                        $file = 'assets/Files/K.txt';
                        readMyFile($file);
                    ?>
                </p>
            </div>
            <div class = "column">
                <img src="../PWWW21-22_Gr5/assets/icons/icon-cogs.png" width="70x"; height="64px"; />
                <h3> Malet e Sharrit </h3>
                <p>
                <?php
                         $file = 'assets/Files/O.txt';
                         readMyFile($file);
                    ?>
                </p>
            </div>
            <div class = "column">
                <img src="../PWWW21-22_Gr5/assets/icons/icon-leaf.png" width="70x"; height="64px";/>
                <h3> Lumi Drin </h3>
                <p>
                <?php
                        $file = 'assets/Files/L.txt';
                        readMyFile($file);
                    ?>
                </p>
            </div>
          </div>
          <hr>
          <div class = "columnContainer1">
            <div class = "column1">
                <img style = "width: 200px; height: 180px" src="../PWWW21-22_Gr5/assets/images/mirusha.jpg"/>
                <h4> Mirusha </h4>
                <p>
                Ujëvarat e Mirushës janë një zinxhir ujëvarash që gjenden në lumin Mirusha, e vendosur në jug të maleve 
                    të Gremnikut, rrugës për në Gjakovë, në lartësinë 572m</br>
                
                </p>
                <a id = "a1" href = "destinations.php">View Details<a>
            </div>
            <div class = "column1">
                <img style = "width: 200px; height: 180px" src="../PWWW21-22_Gr5/assets/images/rugova.jpg"/>
                <h4> Rugova </h4>
                <p>
                Lugina e Rugovës gjendet në zemër të Dukagjinit, në veri-perëndim të Kosovës. Ajo mbulon një sipërfaqe 32 mije hektarësh. Maja më e lartë e tij është Mali i Kursit
                </p>
                <a id = "a1" href = "destinations.php">View Details<a>
            </div>
            <div class = "column1">
                <img style = "width: 200px; height: 180px" src="../PWWW21-22_Gr5/assets/images/brezovica.jpg"/>
                <h4> Brezovica </h4>
                <p>
                Brezovica është një vendpushim unik skijimi i vendosur në pjesën veriperëndimore të malit Sharr në 
                    lartësinë 900 - 2520 metra.
                </p>
                <a id = "a1" href = "destinations.php">View Details<a>
            </div>
            <div class = "column1">
              <img style = "width: 200px; height: 180px" src="../PWWW21-22_Gr5/assets/images/drini.jpg"/>
              <h4> Drini </h4>
              <p>
              Drini i Bardhë është një lumë që ndodhet në anën perëndimore të Kosovës. Përshkon 122 kilometra 
                    të territorit të Kosovës, duke lëvizur në drejtim nga veriu.
              </p>
              <a id = "a1" href = "destinations.php">View Details<a>
          </div>
        </section>
   
    </main>
    <?php include 'Inc/footer.php'; ?>

</body>
<script src="scripts/auth_guard.js"></script>
</html>
