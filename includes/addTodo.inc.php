<?php

if(isset($_POST['addTodo'])){
    #grabing all inputs
    include ('../functions/validate.php');
    $title = validate($_POST['title']);
    $detail = validate($_POST['todo']);

    #instatiate addTodo-contr class
    include ('../classes/dbh.classes.php');
    include ('../classes/addTodo.classes.php');
    include ('../controller/addTodo-contr.classes.php');
    $addTodo = new addTodoContr($title,$detail);

    #running error handlers
    $addTodo->add();
}else{
    header('location:../views/index.php');
    exit();
}