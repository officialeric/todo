<?php

use JetBrains\PhpStorm\NoReturn;

class addTodo extends Dbh {
    #[NoReturn] public function addOne($title, $detail) : void
    {
        $sql = $this->connection() ->prepare('INSERT INTO todos(todos_title,todos_detail) VALUES(?,?);');
        if(!$sql->execute(array($title,$detail))){
            $sql = null;
            header('location:../views/index.php?error=Failed to create todo');
        }else{
            header('location:../views/index.php?info=Todo added successful');
        }
        exit();
    }
}
