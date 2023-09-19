<?php

class editData extends Dbh {
  public function editTodo($id)
  {
      $sql = $this->connection()
          ->prepare('SELECT * FROM todos WHERE todos_id=?;');

      $sql->execute(array($id));

      return $sql->fetchAll();
  }
}


