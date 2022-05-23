<?php

class LogOut {

    public function __construct()
    {
        session_start();
        session_unset();
        session_destroy();
        header("location: ../index.php");
        exit();
    }
}

$out = new LogOut();

