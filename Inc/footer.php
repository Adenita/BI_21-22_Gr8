<?php

class FooterExp {
  function checkNameEmail() {
    if(isset($_POST['submit'])){
      $name = htmlspecialchars($_POST["Name"]);
      try {
        if (preg_match('~[0-9]+~', $name) or preg_match('/[\'^£$%&*()}{@#~?><>,.|=_+¬-]/', $name)) {
          throw new Exception("String numbers");
        }
      }
      catch (Exception $e) {
        echo '<script type"text/JavaScript">alert("Your name should not contain any number or special character!");</script>';
      }

      $email = htmlspecialchars($_POST["Email"]);
      try {
        if (!preg_match('/@/', $email) or strlen($email)==0) {
          throw new Exception();
        }
      }
      catch (Exception $e) {
        echo '<script type"text/JavaScript">alert("Please check your email again!");</script>';
      }
   }
  }

  function uploadFiles() {
    if(isset($_POST['submit1'])) {
      if(!empty($_FILES['upload']['name'])) {
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "assets/Uploads/${file_name}";
  
        if($file_size <= 1000000){
          move_uploaded_file($file_tmp, $target_dir);
        } else {
          echo '<script type"text/JavaScript">alert("File is too large!");</script>';
        }
      }
    }
  }

  
}
  
$re = new FooterExp();
$re -> checkNameEmail();
$re -> uploadFiles();
 
?>

<footer>
      <br>
      <table class="footer1" style="width: 90%">
        <col width="25%">
        <col width="25%"> 
        <col width="25%"> 
        <col width="25%"> 
        <thead>
          <tr><th>CONTACT DETAILS</th><th>QUICK LINKS</th><th>SHARE YOUR EXPERIENCES</th><th>GRAB OUR NEWSLETTER</th></tr>
        </thead>
        <tr height="200">
          <td class="footer2"><p>Convallisijusto vestas mus pellentum aenean sapibulum in aliquam volut pat integest nulla</p><br>

            <address>
              <p>Tel: 049 111 222<br>
              Fax:<br>
              Email: contact@mydomain.com</p>
            </address>
          </td>

          <td class="footer2">
            <p><a href="https://www.instagram.com/imageofkosovo/?hl=en">Image of Kosovo </a>
            ______________________________</p>
            <p><a href="https://www.instagram.com/secret.kosova/?hl=en">My Secret Kosova</a><br>
            ______________________________</p>
            <p><a href="https://www.facebook.com/kosovohiking/">Kosovo Hiking Club</a><br>
            ______________________________</p>
            <p><a href="https://www.beinkosovo.com/quick-facts-about-kosovo/">QUICK FACTS ABOUT KOSOVO</a><br>
            ______________________________</p>
          </td>

          <td class="footer2">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
              <p>Upload your favorite travel photo</p>
              <input type="file" name="upload">
              <div style="margin-top:20px;"><input class="submitButton" type="submit" value="Submit" name="submit1"></div>
          </form>
          </td>

          <td class="footer2">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <input class="grabournewsletter" type="text" name="Name" value="Name" placeholder="Name"><br>
              <br>
              <input class="grabournewsletter" type="text" name="Email" value="@Email" placeholder="Email"><br>
              <br>
              <input class="submitButton" type="submit" name="submit" value="SUBMIT">
            </form>
          </td>
        </tr>
      </table>

      <div class="divFooter">
         <p>
            Copyright &copy; 2021 - All Rights Reserved - Domain Name
         </p>
          <p>Template by OS Templates</p>
        
      </div>
  
    </footer>