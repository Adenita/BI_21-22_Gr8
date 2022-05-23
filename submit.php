<?php 
// Konfigurimi i emailit
$toEmail = '';
$fromName = '';
$fromEmail = '';

$postData = $statusMsg = $valErr = '';
$status = 'error';

//Nese forma eshte dorezuar
if (isset($_POST['submit'])) {
  // $postData = $_POST;
  $name = trim($_POST['fname']);
  $lastname = trim($_POST['lname']);
  $email = trim($_POST['email']);
  $phone = trim($_POST['phone']);
  $message = trim($_POST['message']);

  if(empty($name)) {
    $valErr .= 'Please enter your name. <br/>';
  }
  if(empty($lastname)) {
    $valErr .= 'Please enter your lastname. <br/>';
  }
  if(empty($phone)) {
    $valErr .= 'Please enter your phone number. <br/>';
  }
  if(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    $valErr .= 'Please enter a valid email. <br/>';
  }

  if(empty($message)) {
    $valErr .= 'Please enter your message. <br/>';
  }

  if(empty($valErr)) {
    // Dergo nje njoftim me email ne faqen e admin-it
    $subject = 'Mesazhi juaj eshte derguar';
    $htmlContent = "Ju keni pranuar nje email nga: " .$emri. ".\n\n " .$message;
    $headers .= 'Nga: '. $fromName. ' <'. $fromEmail . ">". "\r\n";
      
      //Dergo emailin
      mail($toEmail, $subject, $htmlContent, $headers);

      header("Location: contact_us.php?mailsend");
      // $status = 'success';
      // $statusMsg = "Faleminderit! Kerkesa juaj e kontaktit eshte derguar ne menyre te suksessme, do te ju kthejme pergjigje se shpejti.";
      // $postData = '';
  } else {
    $statusMsg = ' <p> Ju lutem plotesoni te gjitha rubrikt e kerkuara </p>' .trim($valErr, '<br/>');
  }

}
 ?>