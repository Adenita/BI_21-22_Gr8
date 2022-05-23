<?php

 class Functions {

    function emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat){
        $result = false;
    
        if (empty($name) || empty($email) || empty($username)|| empty($pwd)|| empty($pwdRepeat)){
            $result = true; //nese jan najnja prej qetynve empty bane true
        }
        return $result;
    }
    function invalidUid($username){
        $result = false;
        
        if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){ //preg_match() kthen 1 nese perputhet me subjektin , 0 nese jo , or false n deshtim. 
            $result = true; 
        }
        return $result;
    }
    function invalidemail($email){
        $result = false;
        
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)){ 
            $result = true; 
        }
        return $result;
    }
    function pwdMatch($pwd,$pwdRepeat){
        $result = false;
        
        if ($pwd !== $pwdRepeat){ 
            $result = true; 
        }
        return $result;
    }
    function uidExists($conn, $username,$email){
        //? asht placeholder sepse kena me perdor statments t gatshme per mu lidh me databazen  
        $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("location: ../signup.php?error = stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "ss",$username,$email);
        mysqli_stmt_execute($stmt);
        
        $resultData = mysqli_stmt_get_result($stmt);
    
        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }else{
            $result = false;
            return $result;
        }
        
        mysqli_stmt_close($stmt);
    
    }
    function createUser($conn,$name,$email,$username,$pwd){
        //? asht placeholder sepse kena me perdor statments t gatshme per mu lidh me databazen  
        $sql = "INSERT INTO users (usersName,usersEmail,usersUid,usersPwd) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("location: ../signup.php?error = stmtfailed");
            exit();
        }
    
        $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);
    
        mysqli_stmt_bind_param($stmt, "ssss",$name,$email,$username,$hashedPwd);
        mysqli_stmt_execute($stmt);
    
        mysqli_stmt_close($stmt);
    
        $uidExists = $this -> uidExists($conn, $username,$username);
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location: ../index.php");
        exit();
    
    }
    
    function emptyInputLogin($username,$pwd){
        $result = false;
    
        if (empty($username)|| empty($pwd)){
            $result = true; 
        }
        return $result;
    }
    
    function loginUser($conn,$username,$pwd){
        $uidExists = $this -> uidExists($conn, $username,$username);
    
        if ($uidExists === false) {
            header("location: ../login.php? error = wronglogin");
            exit();
        }
        $pwdHashed = $uidExists["usersPwd"];
        $checkPwd = password_verify($pwd,$pwdHashed);
    
        if ($checkPwd === false) {
            header("location: ../login.php? error = wronglogin");
        }
        elseif ($checkPwd === true){
            //qetu i ka shtu sessions
            session_start();
            $_SESSION["userid"] = $uidExists["usersId"];
            $_SESSION["useruid"] = $uidExists["usersUid"];
            header("location: ../index.php");
            exit();
    
    
        }
    }

}

$fun = new Functions();