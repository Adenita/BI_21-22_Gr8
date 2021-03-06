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
                    Uj??varat e Mirush??s jan?? nj?? zinxhir uj??varash q?? gjenden n?? lumin Mirusha, e vendosur n?? jug t?? maleve 
                    t?? Gremnikut, rrug??s p??r n?? Gjakov??, n?? lart??sin?? 572 metra.</br>
                    
                    Ato uj??vara mes liqeneve, s?? bashku me peizazhin mahnit??s, shk??mbinjt?? dhe shpellat 
                    p??rreth uj??varave, formojn?? nj?? pamje mahnit??se dhe paraqesin nj?? atraksion t?? ve??ant?? 
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
                    Liqeni i Ujmanit ??sht?? nj?? liqen artificial q?? ndodhet n?? pjes??n veriper??ndimore t?? Kosov??s, 
                    n?? kufirin nd??rmjet Kosov??s dhe Serbis??. </br>
                    9.10 km2 t?? territorit t?? tij i takojn?? Kosov??s, gj?? q?? e b??n at?? liqenin m?? t?? madh n?? Kosov??.</br>
                    Liqeni ??sht?? formuar nga mbledhja e lumit Ib??r dhe ka nj?? thell??si mesatare prej 105 metrash.
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
                    Brezovica ??sht?? nj?? vendpushim unik skijimi i vendosur n?? pjes??n veriper??ndimore t?? malit Sharr n?? 
                    lart??sin?? <mark>900 - 2520 metra</mark>. Kushtet e favorshme klimatike e b??jn?? k??t?? rajon t?? p??rshtatsh??m p??r 
                    turiz??m, sport dhe rekreacion gjat?? gjith?? vitit.</br>
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
                    Drini i Bardh?? ??sht?? nj?? lum?? q?? ndodhet n?? an??n per??ndimore t?? Kosov??s. P??rshkon 122 kilometra 
                    t?? territorit t?? Kosov??s, duke l??vizur n?? drejtim nga veriu. Burimi i tij ??sht?? n?? malin 
                    Rusolia n?? nj?? lart??si prej 586 metrash. </br>
                    Nga burimi uji rrjedh me shpejt??si 30 metra n?? sekond??, 
                    ku krijon nj?? uj??var?? t?? bukur me lart??si 30 metra. Uj??vara e krijuar n?? 
                    burimin e lumit ??sht?? nj?? fenomen i rrall?? dhe mahnit??s, i cili t??rheq nj?? num??r t?? madh vizitor??sh.
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
                    Lugina e Rugov??s gjendet n?? zem??r t?? Dukagjinit, n?? veri-per??ndim t?? Kosov??s. Ajo mbulon nj?? sip??rfaqe 
                    prej 32.000 hektar??sh. Maja m?? e lart?? e tij ??sht?? Mali i Kursit, me nj?? lart??si prej 2560 metrash.</br>
                    Lugina e Rugov??s konsiderohet si nj?? vend ideal p??r t?? kaluar disa dit??, kur ju duhet t?? 
                    relaksoheni dhe t?? largoheni nga rutina e p??rditshme dhe jeta dinamike n?? qytet. ??sht?? nj?? rajon i qet?? i 
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
