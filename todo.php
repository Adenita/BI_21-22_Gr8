<?php
include 'Inc/header.php';
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./styles/index.css">
     <title>Document</title>
     <style>
       .kerkesat{
         margin: 10px;
       }
     </style>
 </head>
  <body>
    <div class="kerkesat">    
      <h1 style="text-align: center;">Kerkesat e mbetura </h1>
      <?php
        
         //explode
          $str = "Ky është një string që ndahet në array";
          print_r (explode(" ",$str));
          echo "<br> <br>";

          //implode
          $arr = array('Ky','është','një','varg','i','bashkuar');
          echo implode(" ",$arr);

          echo "<br> <br>";

          //trim
          $str = "Trim Stringu!";
          echo $str . "<br>";
          echo trim($str,"Tru!");

          echo "<br> <br>";

          //printf
          $numri = 2;
          $str = "Fakultet";
          printf("Ekzistojnë %u salla kompjuterash në %s.",$numri,$str);

          echo "<br> <br>";

          //substr
          echo substr("Biznesi dhe Interneti",12);

          echo "<br> <br>";

          //streln
          echo strlen("Biznesi dhe Interneti");

          echo "<br> <br>";

          //str_replace
          echo str_replace("dhe","&","Biznesi dhe Interneti");

          echo "<br> <br>";

          //preg_replace
          $str = 'Biznesi dhe Interneti!';
          $pattern = '/interneti/i';
          echo preg_replace($pattern, 'WWW', $str);

          echo "<br> <br>";

          //preg_split
          $data = "24.05.2022 12:00:00";
          $paterni = "/[-\s:]/";
          $komponentet = preg_split($paterni, $data);
          print_r($komponentet);

          echo "<br> <br>";
  
          //Sortimi i arrays
          $cars = array("Volvo", "BMW", "Toyota");
          sort($cars);
          $clength = count($cars);
          for($x = 0; $x < $clength; $x++) {
            echo $cars[$x];
            echo "<br>";
           }
          
           echo "<br> <br>";

           if (isset($_POST['submitted'])){
            $gender =$_POST['gjinia'];
            setcookie("gjinia", $gender, time()+3600);
            }

            if (!isset($_COOKIE['gjinia'])){
            $gjinia = "Asnjenes";
            }
            else {
            $gjinia = $_COOKIE['gjinia'];
            }

            echo "Gjinia e zgjedhur:" . $gjinia;
      ?>

        <form action= "<?php echo $_SERVER['PHP_SELF']; ?>" method ="POST">
            <p>Gjinia:</p>
            <select name=gjinia>
            <option value ="Femer">Femer</option>
            <option value ="Mashkull">Mashkull</option>
            <option value ="Asnjenes">Asnjenes</option>
            </select>
            <input type="submit" name="submitted" value="Mbaj mend">
          </form>

    </div>

  </body>
 </html>
 
 