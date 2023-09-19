<?php

if(!isset($_SESSION['users_id'])){
    header('location:../login.php');
}
