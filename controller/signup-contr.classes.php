<?php

class SignupContr extends Signup {
    public $fname;
    public $uname;
    public $email;
    public $password;
    public $pwd_repeat;

    public function __construct($fname,$uname,$email,$password,$pwd_repeat){
        $this->fname = $fname;
        $this->uname = $uname;
        $this->email = $email;
        $this->password = $password;
        $this->pwd_repeat = $pwd_repeat;
    }

    public function signup(){
        if(!$this->emptyInput()){
            header('location:../index.php?error=Some inputs are empty');
            exit();
        }
        if(!$this->validateUname()){
            header('location:../index.php?error=Invalid username');
            exit();
        }
        if(!$this->validateEmail()){
            header('location:../index.php?error=Invalid email');
            exit();
        }
        if(!$this->pwdMatch()){
            header('location:../index.php?error=Password does not match');
            exit();
        }
        if(!$this->userTaken()){
            header('location:../index.php?error=Email or username has taken');
            exit();
        }

        $this->setUser($this->fname,$this->uname,$this->email,$this->password);
    }
    public function emptyInput(){
        if(empty($this->fname) || empty($this->uname) || empty($this->email) || empty($this->password) || empty($this->pwd_repeat)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    public function validateUname(){
        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->uname)){
           $result = false;
        }else {
            $result = true;
        }
        return $result;
    }

    public function validateEmail(){
        if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    public function pwdMatch(){
        if($this->password !== $this->pwd_repeat){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    public function userTaken(){
        if($this->checkUser($this->uname,$this->email)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

}
