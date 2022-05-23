<?php

include("functions.inc.php");

class InsertData extends Functions {
    
   private $functions;

   public function setFunction() {
       $this -> functions = new Functions();
   }
 
   public function getFunction() {
       return $this -> functions;
   }
   
    public function __construct() {
        if(isset($_POST["submit"])) {
            $name = $_POST["name"]; //superglobal variable
            $email = $_POST["email"];
            $username = $_POST["uid"];
            $pwd = $_POST["pwd"];
            $pwdRepeat = $_POST["pwdrepeat"]; 
                   
            require_once 'dbh.inc.php';
            $data = new Database();
            $conn = $data -> getDbConnection();
        
            if($this  -> emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat) !== false){
                header("location: ../signup.php ? error = emptyinput");
                exit();//stops the script from running
            }
            if($this -> invalidUid($username) !== false){
                header("location: ../signup.php ? error = emptyuid");
                exit();
            }
            if($this -> invalidemail($email) !== false){
                header("location: ../signup.php ? error = emptyemail");
                exit();
            }
            if($this -> pwdMatch($pwd,$pwdRepeat) !== false){
                header("location: ../signup.php ? error = passwordsdontmatch");
                exit();
            }
            if($this -> uidExists($conn, $username,$email) !== false){
                header("location: ../signup.php ? error = usernametaken");
                exit();
            }
        
           $this -> createUser($conn,$name,$email,$username,$pwd,$pwdRepeat);
        
        }else{
            header("location: ../signup.php error = nuk u regjistrua");
            exit();
        }
    }
   
}

$data = new InsertData();

 