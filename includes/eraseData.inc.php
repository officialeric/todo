<?php
#grabbing requests
$todo_id = $_GET['todo_id'] ;

#instatiating a erase class
include ('../classes/dbh.classes.php');
include ('../classes/eraseData.clsses.php');

$erase = new eraseData();
$erase->eraseTodo($todo_id);


