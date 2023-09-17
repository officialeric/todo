<?php

class LoginContr extends Login
{

    public $email;
    public $password;

    public function __construct( $email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function login()
    {
        if (!$this->emptyInput()) {
            header('location:../login.php?error=Some inputs are empty');
            exit();
        }

        if (!$this->validateEmail()) {
            header('location:../login.php?error=Invalid email');
            exit();
        }
        if ($this->isUser()) {
            session_start();
            $_SESSION['users_id'] = $this->user['users_id'];
            $_SESSION['users_uname'] = $this->user['users_uname'];
            $_SESSION['users_email'] = $this->user['users_email'];

            header('location:../views/index.php?user_id='.$_SESSION['users_id']);
            exit();
        }
    }

    public function emptyInput() : bool
    {
        if (empty($this->email) || empty($this->password)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }


    public function validateEmail() : bool
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }


    public function isUser() : bool
    {
        if ($this->checkUser($this->email,$this->password )) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

}

