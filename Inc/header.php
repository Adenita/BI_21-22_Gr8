<?php
session_start();
?>
  <link rel="stylesheet" href="styles/signup.css">
  <link rel="stylesheet" href="styles/header_footer.css">
<header>
      <div class="icons">
        <a
          href="https://www.linkedin.com/"
          target="”_blank”"
          class="icon icon--linkedin"
        >
      </a>
        <a
          href="https://www.twitter.com/"
          target="”_blank”"
          class="icon icon--twitter"
        ></a>
        <a
          href="https://www.pinterest.com/"
          target="”_blank”"
          class="icon icon--pinterest"
        ></a>
        <a
          href="mailto:arlinda.sylaj@studentet.uni-pr.edu?subject = Feedback&body = Message"
          target="”_blank”"
          class="icon icon--google-plus"
        ></a>
        <a href="https://rss.app/" target="”_blank”" class="icon icon--rss"></a>
      </div>
      <div class="title">
        <h1 class="title title--text">
          Kosova Travel
        </h1>

        <ul class="menuItem">
          <li class="menuItem menuItem--item">
            Udhetoni me ne
          </li>

          <li class="menuItem menuItem--item">
      
          <?php
          if (isset($_SESSION["useruid"])) {
            echo "<div class = 'dropdown'>
                <span>Hi,  ". $_SESSION['useruid'] . " ▼   </span>
                <div class = 'dropdown-content'>
                  <a  style='color: #1f1f1f;' href='Inc/logout.inc.php'>Log Out</a>
                </div>
            </div>";
          }else{
            echo "<a  href='signup.php'>Sign Up</a>";
            echo "<a  href='login.php'>Log in</a>";
          }
          ?>
          </li>
        </ul>
      </div>
      
      <!-- Navigation bar -->
      <div class="nav-bar">
        <nav class="navigation">
            <ul class="nav_links">
              <li><a href="index.php" >HomePage</a></li>
              <li><a href="cultural.php">Culture</a></li>
              <li><a href="destinations.php">Destination</a></li>
              <li><a href="about_us.php" >About Us</a></li>
              <li><a href="contact_us.php">Contact Us</a ></li>
            </ul>
          </nav>  
            <div class="div-search">
                <input  class="search"
                    type = "search"
                    placeholder="Search our website..."/>
            <a href="#"><button>Search</button></a>
            </ndiv>
       
       </div>
      <!-- Navigation Bar-->
    </header>