<?php


if(isset($_POST['login'])){
    #grabbing and validate user inputs
    include_once ('../functions/validate.php');

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    #instantiate signup-contr class
    include ('../classes/dbh.classes.php');
    include ('../classes/login.classes.php');
    include('../controller/login-contr.classes.php');
    $signup = new LoginContr($email,$password);

    #running error handlers
    $signup->login();
}

