<?php

#grabbing request
$todo_id = $_GET['todo_id'];

#instantiate editData class
include ('../classes/dbh.classes.php');
include ('../classes/editData.classes.php');

$edit = new editData();
$selectedTodo = $edit->editTodo($todo_id);

if($selectedTodo){
    header('location:../views/index.php?selected');
    exit();
}