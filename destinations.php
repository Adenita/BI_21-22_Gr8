<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/destinations.css">
    
    
    <title>PWWW21-22_Gr5</title>
    <style>
        #div1, #div2 {
            float: left;
            width: 100px;
            height: 35px;
            margin: 10px;
            padding: 10px;
            border: 1px solid black;
        }
        
        #div2 {
            resize: both;
            overflow:auto;
        }
    </style>
    <script>
        function allowDrop(ev){
            ev.preventDefault();
        }

        function drag(ev){
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev){
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
        }
    </script>
</head>
<body>
<?php include 'Inc/header.php'; ?>

    <main>
    <div class="videoThisIsKosovo" style="background-image: url(..assets/images/greenbackground.JPG), url(../assets/images/greenbackground1.JPG);
                                background-position: right top, left bottom;
                                background-repeat: no-repeat, repeat;
                                outline: 4px solid rgb(127, 233, 127);
                                outline-offset: 5px;">
          <video width="800" autoplay muted style="display: block; margin: auto; margin-top: 20px; margin-bottom: 100px; border-radius: 10px;">
              <source src="..\PWWW21-22_Gr5\assets\videos\This is Kosovo! vol 01.mp4" type="video/mp4">
              Your browser does not support the video tag.
          </video>
        </div>

        <div class="natyra">
            <div class="divFotoMirusha">
                <a href="../PWWW21-22_Gr5/assets/images/mirusha.jpg">
                    <figure>
                    <img id="fotoMirusha" src="../PWWW21-22_Gr5/assets/images/mirusha.jpg" width="600px" alt="mirusha">
                        <figcaption>Ujevara e Mirushes</figcaption>
                    </figure>
                </a>
            </div>
            <div class="textNatyra">
                <h2 style="font-size: 36px; font-family:'Trebuchet MS', Arial, sans-serif;">Mirusha</h2>
                <a href="https://goo.gl/maps/i3NiLQ6ynY8Xg6ueA" target="_blank"><img src="../PWWW21-22_Gr5/assets/images/locationicon.jpg" width = "30px"> </a>
                <p style="font-size: 18px; font-family:Verdana, Geneva, Tahoma, sans-serif;"> 
                    Ujëvarat e Mirushës janë një zinxhir ujëvarash që gjenden në lumin Mirusha, e vendosur në jug të maleve 
                    të Gremnikut, rrugës për në Gjakovë, në lartësinë 572 metra.</br>
                    
                    Ato ujëvara mes liqeneve, së bashku me peizazhin mahnitës, shkëmbinjtë dhe shpellat 
                    përreth ujëvarave, formojnë një pamje mahnitëse dhe paraqesin një atraksion të veçantë 
                    turistik.
                </p>
            </div>
        </div>
        <hr>

        <div class="natyra">
            <div class="textNatyra">
                <h2 style="font-size: 36px; font-family:'Trebuchet MS', Arial, sans-serif;">Liqeni i Ujmanit</h2>
                <a href="https://goo.gl/maps/HN4bTfAX3zKZqckG9" target="_blank"><img src="../PWWW21-22_Gr5/assets/images/locationicon.jpg" width = "30px"> </a>
                <p style="font-size: 18px; font-family:Verdana, Geneva, Tahoma, sans-serif;"> 
                    Liqeni i Ujmanit është një liqen artificial që ndodhet në pjesën veriperëndimore të Kosovës, 
                    në kufirin ndërmjet Kosovës dhe Serbisë. </br>
                    9.10 km2 të territorit të tij i takojnë Kosovës, gjë që e bën atë liqenin më të madh në Kosovë.</br>
                    Liqeni është formuar nga mbledhja e lumit Ibër dhe ka një thellësi mesatare prej 105 metrash.
                </p>
            </div>
            <div class="divFotoUjmani">
                <figure>
                <img id="fotoUjmani" src="../PWWW21-22_Gr5/assets/images/ujmani.jpg" width="500px" alt="ujmani">
                    <figcaption>Liqeni i Ujmanit</figcaption>
                </figure>
            </div>
        </div>
        <hr>

        <div class="natyra">
            <div class="divFotoBrezovica">
                <figure>
                <img id="fotoBrezovica" src="../PWWW21-22_Gr5/assets/images/brezovica.JPG" width="500px" alt="brezovica">
                    <figcaption>Brezovica</figcaption>
                </figure>
            </div>
            <div class="textNatyra">
                <h2 style="font-size: 36px; font-family:'Trebuchet MS', Arial, sans-serif;">Brezovica Nature & Ski</h2>
                <a href="https://goo.gl/maps/5haJiR8CwQRHdCtVA" target="_blank"><img src="../PWWW21-22_Gr5/assets/images/locationicon.jpg" width = "30px"> </a>
                <p style="font-size: 18px; font-family:Verdana, Geneva, Tahoma, sans-serif;"> 
                    Brezovica është një vendpushim unik skijimi i vendosur në pjesën veriperëndimore të malit Sharr në 
                    lartësinë <mark>900 - 2520 metra</mark>. Kushtet e favorshme klimatike e bëjnë këtë rajon të përshtatshëm për 
                    turizëm, sport dhe rekreacion gjatë gjithë vitit.</br>
                </p>
                <div style="font-size: 18px; font-family:Verdana, Geneva, Tahoma, sans-serif;">
                    <dl>
                        <dt>Things to see and do in Brezovica</dt>
                        <dd>Pine Restaurant</dd>
                        <dd>Che Fox</dd>
                        <dd>Woodland Hotel</dd>
                    </dl>
                </div>
            </div>
        </div>
        <hr>

        <div class="natyra">
            <div class="textNatyra">
                <h2 style="font-size: 36px; font-family:'Trebuchet MS', Arial, sans-serif;">Drini i Bardhe</h2>
                <a href="https://goo.gl/maps/nC6iRYXGgQJAiBKP7" target="_blank"><img src="../PWWW21-22_Gr5/assets/images/locationicon.jpg" width = "30px"> </a>
                <p style="font-size: 18px; font-family:Verdana, Geneva, Tahoma, sans-serif;"> 
                    Drini i Bardhë është një lumë që ndodhet në anën perëndimore të Kosovës. Përshkon 122 kilometra 
                    të territorit të Kosovës, duke lëvizur në drejtim nga veriu. Burimi i tij është në malin 
                    Rusolia në një lartësi prej 586 metrash. </br>
                    Nga burimi uji rrjedh me shpejtësi 30 metra në sekondë, 
                    ku krijon një ujëvarë të bukur me lartësi 30 metra. Ujëvara e krijuar në 
                    burimin e lumit është një fenomen i rrallë dhe mahnitës, i cili tërheq një numër të madh vizitorësh.
                </p>
            </div>
            <div class="divFotoDrini">
                <figure>
                <img id="fotoDrini" src="../PWWW21-22_Gr5/assets/images/drini.JPG" width="500px" alt="drini">
                    <figcaption>Drini i Bardhe</figcaption>
                </figure>
            </div>
        </div>
        <hr>

        <div class="natyra">
            <div class="divFotoRugova">
                <figure>
                <img id="fotoRugova" src="../PWWW21-22_Gr5/assets/images/rugova.JPG" width="500px" alt="rugova">
                <figcaption>Rugova</figcaption>
                </figure>
            </div>
            <div class="textNatyra">
                <h2 style="font-size: 36px; font-family:'Trebuchet MS', Arial, sans-serif;">Rugova Valley</h2>
                <a href="https://goo.gl/maps/AE9jS1omgVwqup858" target="_blank"><img src="../PWWW21-22_Gr5/assets/images/locationicon.jpg" width = "30px"> </a>
                <p style="font-size: 18px; font-family:Verdana, Geneva, Tahoma, sans-serif;"> 
                    Lugina e Rugovës gjendet në zemër të Dukagjinit, në veri-perëndim të Kosovës. Ajo mbulon një sipërfaqe 
                    prej 32.000 hektarësh. Maja më e lartë e tij është Mali i Kursit, me një lartësi prej 2560 metrash.</br>
                    Lugina e Rugovës konsiderohet si një vend ideal për të kaluar disa ditë, kur ju duhet të 
                    relaksoheni dhe të largoheni nga rutina e përditshme dhe jeta dinamike në qytet. Është një rajon i qetë i 
                    ruajtur dhe i paeksploruar.
                </p>
            </div> 
            
        </div>
        <div style="display: flex; margin-bottom: 20px; justify-content: center; flex: center; background: white!important; overflow: auto;">
            <a href="#top"><img src="../PWWW21-22_Gr5/assets/images/up.jpg" width="40px"></a>
            <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                <img src="../PWWW21-22_Gr5/assets/images/rugova4.JPG" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
              </div>
              
              <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div></div>


    </main>
    <?php include 'Inc/footer.php'; ?>

    <?php
           if (isset($_POST['nightmode'])) {
               $theme = $_POST['dark_theme'];
           } else {
               $theme = $_POST['root'];
           }

           setcookie("theme", $theme, time() + 86400);

           $theme1 = $_COOKIE['theme'];
         ?>
         
</body>
</html>
