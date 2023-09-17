<?php
include ('../partials/header.php');
?>

<form action="../includes/addTodo.inc.php" method="post">
    <h3>sign up form</h3>
    <p><?=($_GET['error'] ?? $_GET['info'])?></p>
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
<div>
    <h4>title</h4>
    <p>Details</p>
    <small>time</small>
    <div>
        <button>edit</button>
        <button>erase</button>
    </div>
</div>

<?php
include ('../partials/footer.php');
?>