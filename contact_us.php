<?php include 'Inc/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWWW21-22_Gr5</title>
    <link rel="stylesheet" href="./styles/contact_us.css">
    <script type="text/javascript" src="./scripts/contact.js"></script>
    <style>

      /* .move {
        width: 45px;
        height: 45px;
        position: relative;
        left : 300px;
        animation: movingObject linear 15s infinite normal;
        -webkit-animation: movingObject linear 15s infinite normal;
        visibility: visible;
        animation-delay: 1s;
        animation-direction: alternate-reverse;
      } */

      /* @keyframes movingObject {
        0%   {left: 530px; top: 190px;}
        25%  {left: 1530px; top: 190px;}
        50%  {left: 1530px; top: 755px;}
        75%  {left: 530px; top: 755px;}
        100% {left: 530px; top: 190px;}
      } */
      
      /* @-webkit-keyframes movingObject {
        0%   {left: 279px; top: 187px;}
        25%  {left: 1207px; top: 187px;}
        50%  {left: 1207px; top: 697px;}
        75%  {left: 279px; top: 697px;}
        100% {left: 279px; top: 187px;}
      } */

    </style>

</head>
<body>
    <div class="move" style="left: 279px; top: 187px;"></div>
    <main>
      <div class = "gradient">
        <div class="container">
          <p class="text">Contact us</p>
        
          <form id = "form" method="post" action=" https://rogova.info/test/feedback.php">   
             <div class="row">
                <div class="inputs">
                  <input type="text" id="name" name="name" required>
                  <label style = "right: 40%;" for="name">First Name</label>
                  <div class="underline"></div>
                </div>
                <div class="inputs">
                  <input type="text" id="lastname" name="lastname"  required>
                  <label style = "right: 40%;" for="lastname">Last Name</label>
                  <div class="underline"></div>
                </div>
             </div>

            <div class="row">
              <div class="inputs">
                <input type="email" id="email" name="email"  required>
                <label style = "right: 35%; "for="email">Email Address</label>
                <div class="underline"></div>
              </div>
              <div class="inputs">
                <input type="tel" id="phone" name="phone" required>
                <label for="phone">Phone Number</label>
                <div class="underline"></div>
              </div>
            </div>

            <div class = "row">
             <div class="inputs textarea" >
               <textarea name="message" id="message" cols="30" rows="10"></textarea>
               <label style = "right: 40%;">Write your message</label>
               <div class="underline"></div>
             </div>
           </div>

           <div class="row  ">
             <div class="inputs">
               <div class = "inner">
                 <input type="submit" value="Submit" onclick = "sendContact()">
               </div>
             </div>
            </div>

          </form>
        </div>
      </div>
    </main>
    <?php include 'Inc/footer.php'; ?>
</body>
</html>
