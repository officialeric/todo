<?php

use JetBrains\PhpStorm\NoReturn;

class addTodoContr extends addTodo {
    public string $title;
    public string $detail;

    public function __construct($title,$detail){
        $this->title = $title;
        $this->detail = $detail;
    }

   #[NoReturn] public function add() : void
   {
        if(!$this->emptyInputs()){
            header('location:../views/index.php?error=some inputs are empty');
            exit();
        }

        $this->addOne($this->title,$this->detail);
   }

    public function emptyInputs() : bool
    {
        if(empty($this->title) || empty($this->detail)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
}


