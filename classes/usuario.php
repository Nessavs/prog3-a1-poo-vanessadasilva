<?php

class usuario {

    private $userName;
    private $userEmail;
    private $userPassword;

    public function __construct($userName, $userEmail, $userPassword) {
        $this->userName = $userName;
        $this->userEmail = $userEmail;
        $this->userPassword = password_hash($userPassword, PASSWORD_DEFAULT);
    }

    public function getUserEmail() {
        return $this->userEmail;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function checkPassword($typedPassword) {
        return password_verify($typedPassword, $this->userPassword);
    }
}
