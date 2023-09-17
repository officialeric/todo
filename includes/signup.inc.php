<?php

if(isset($_POST['signup'])){
    #grabbing and validate user inputs
    include_once ('../functions/validate.php');

    $fname =  validate($_POST['fname']);
    $uname = validate($_POST['uname']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $pwd_repeat = validate($_POST['pwd_repeat']);

    #instantiate signup-contr class
    include ('../classes/dbh.classes.php');
    include ('../classes/signup.classes.php');
    include('../controller/signup-contr.classes.php');
    $signup = new SignupContr($fname,$uname,$email,$password,$pwd_repeat);

    #running error handlers
    $signup->signup();
}
