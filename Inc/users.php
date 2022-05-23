<?php
class Users {

    private $plushy;
    private $username;
    public function __construct($username, $plushy)
    {
        $this -> plushy = $plushy;
        $this -> username = $username;
    }
}
?>