<?php

class eraseData extends Dbh {
    public function eraseTodo($id) : void
    {
       $sql = $this->connection()
             ->prepare("DELETE FROM todos WHERE todos_id=?;");

       if($sql->execute(array($id))){
           header('location: ../views/index.php?msg=Todo deleted successfully');
           exit();
       }
    }
}
