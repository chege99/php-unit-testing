<?php

class User{

    public $fullname;

    public $email;

    public function getEmail(){
        return $this->email;
    }
    public function getFullname(){
        return $this->fullname;
    }
}

?>