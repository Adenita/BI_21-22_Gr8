<?php
include("functions.inc.php");

class Loged extends Functions{

    public function __construct()
    {
        if (isset($_POST["submit"])) {
            $username = $_POST["uid"];
            $pwd = $_POST["pwd"];
        
            require_once 'dbh.inc.php';
            $data = new Database();
            $conn = $data -> getDbConnection();
        
            if($this -> emptyInputLogin($username,$pwd) !== false){
                header("location: ../login.php ? error = emptyinput");
                exit();
            }
            $this -> loginUser($conn,$username,$pwd);
        }
        else{
            header("location: ../login.php");
            exit();
        }
    }

    public function getPlushy() {
        return $this -> plushy;
    }
}

$log = new Loged();

