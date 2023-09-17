<?php

class Signup extends Dbh {
    public function checkUser($uname,$email){
        $sql = $this->connection()->prepare('SELECT * FROM users WHERE users_uname=? AND users_email=?;');

        if(!$sql->execute(array($uname,$email))){
            $sql = null;
            header('location: ../index.php?error=Failed to run query');
            exit();
        }
        if($sql->rowCount() > 0){
            $result = true;
        }else{
            $result = false;
        }
        return $result;

    }

    public function setUser($fname,$uname,$email,$password) : void
    {
        $sql = $this->connection()->prepare('INSERT INTO users(users_fname,users_uname,users_email,users_password)
                                                   VALUES(?,?,?,?);');

        if (!$sql->execute(array($fname, $uname, $email, $password))) {
            $sql = null;
            header('location: ../index.php?error=Failed to insert new user');
            exit();
        }else{
            header('location: ../login.php');
            exit();
        }
    }
}
