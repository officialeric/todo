<?php

class Login extends Dbh {
    public $user;
    public function checkUser($email,$pwd){
        $sql = $this->connection()->prepare('SELECT * FROM users WHERE users_email=? AND users_password=?;');

        if(!$sql->execute(array($email,$pwd))){
            $sql = null;
            header('location: ../login.php?error=Failed to run query');
            exit();
        }else {
            $this->user = $sql->fetch();
            if ($this->user && password_verify($pwd, $this->user['users_password'])) {
                $result = true;
            } else {
                $result = false;
            }
        }
        return $result;
    }
}
