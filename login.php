<?php
include 'Inc/header.php';
?>

<section class="section-login">
        <div class="container">
          <div class="row">
            <div class="login">
              <div class="login__form">
                <form action="Inc/login.inc.php" class="form" method="post">
                  <div class="u-margin-bottom-small">
                    <h2 class="heading-secondary"> Log In</h2>
                  </div>
                  <div class="form__group">
                    <input
                      type="text"
                      class="form__input"
                      placeholder="Username/Email..."
                      name = "uid"
                    />
                  </div>
                  <div class="form__group">
                    <input
                      type="password"
                      class="form__input"
                      pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}"
                      placeholder="Password ..."
                      name="pwd"
                    />
                  </div>
                  <button type="submit" name="submit" class="btn btn--green btn--animated btn--text">Log In</button>
                </form>
              </div>
              <?php
                    if (isset($_GET["error"])) {
                        if($_GET["error"] == "emptyinput"){
                            echo "<p>Fill in all fields!</p>";
                        }
                        elseif ($_GET["error"] == "wronglogin") {
                        echo "<p>Inccorect login information!</p>";  
                        }
                    }
                ?> 
            </div>
          </div>
        </div>
      </section>