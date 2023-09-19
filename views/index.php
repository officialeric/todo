<?php
global $todos;
include ('../partials/header.php');
include ('../classes/selectData.classes.php');

?>

<form action="../includes/addTodo.inc.php" method="post">
    <h3>sign up form</h3>
    <p><?=($_GET['error'] ?? ' ')?></p>
    <div>
        <label for="title">Title </label>
        <input type="text" name="title" id="title">
    </div>
    <div>
        <label for="todo">Detail </label>
        <textarea name="todo" id="todo" ></textarea>
    </div>
    
    <div>
        <input type="submit" value="Add Todo" name="addTodo">
    </div>
</form>

<h3>Todos :</h3>
<?php foreach ($todos as $todo) :?>
<div>
    <h4><?=$todo['todos_title']?></h4>
    <p><?=$todo['todos_detail']?></p>
    <small><?=$todo['time']?></small>
    <div>
        <a href="../includes/editData.inc.php?todo_id=<?=$todo['todos_id']?>"><button>edit</button></a>
        <a href="../includes/eraseData.inc.php?todo_id=<?=$todo['todos_id']?>"><button>erase</button></a>
    </div>
</div>
<?php endforeach ?>

<?php
include ('../partials/footer.php');
?>