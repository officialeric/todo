<?php
include ('dbh.classes.php');
class selectData extends  Dbh {
    public function selectAll(){
        $sql = $this->connection()->prepare("SELECT * FROM todos;");
        $sql->execute();
        return $sql->fetchAll();
    }
}

#instantiating selectData class
$todo = new selectData();
$todos = $todo->selectAll();