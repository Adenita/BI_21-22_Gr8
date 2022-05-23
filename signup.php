<?php
include 'Inc/header.php';
?>

<section class="section-login">
        <div class="container">
          <div class="row">
            <div class="login">
              <div class="login__form">
                <form action="Inc/signup.inc.php" class="form" method="post">
                  <div class="u-margin-bottom-small">
                    <h2 class="heading-secondary"> Sign Up</h2>
                  </div>
                  <div class="form__group"> 
                    <input
                      type="text"
                      class="form__input"
                      placeholder="Full name..."
                      name = "name"
                    />
                  </div>
                  <div class="form__group">
                    <input
                      type="email"
                      class="form__input"
                      placeholder="Email address..."
                      name="email"
                    />
                  </div>
                  <div class="form__group">
                    <input
                      type="text"
                      class="form__input"
                      placeholder="Username..."
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
                  <div class="form__group">
                    <input
                      type="password"
                      class="form__input"
                      pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}" 
                      placeholder="Repeat password ..."
                      name="pwdrepeat"
                    />
                  </div>
                  <button type="submit" name="submit" class="btn btn--green btn--animated btn--text"> Sign Up</button>
                </form>
              </div>
              <?php
                    if (isset($_GET["error"])) {
                        if($_GET["error"] == ""){
                            echo "<h2>Fill in all fields!</h2>";
                        }
                        elseif ($_GET["error"] == "invaliduid") {
                        echo "<h2>Choose a proper username!</h2>";  
                        }
                        elseif ($_GET["error"] == "invalidemail") {
                        echo "<h2>Choose a proper email!</h2>";  
                        }
                        elseif ($_GET["error"] == "passwordsdontmatch") {
                        echo "<h2>Passwords doesn't match!</h2>";  
                        }
                        elseif ($_GET["error"] == "stmtfailed") {
                        echo "<h2>Something went wrong, try again!</p>";  
                        }
                        elseif ($_GET["error"] == "usernametaken") {
                        echo "<h2>User namealready taken !</h2>";  
                        }
                        elseif ($_GET["error"] == "none") {
                        echo "<h2>You have signup!</h2>";  
                        }
                    }
                ?> 
            </div>
          </div>
        </div>

      </section>
      
      