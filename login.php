<?php
include ('partials/header.php');
?>

<form action="includes/login.inc.php" method="post">
    <h3>sign up form</h3>
    <p><?=($_GET['error'] ?? ' ')?></p>

    <div>
        <label for="email">email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="password">password</label>
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="submit" value="login" name="login">
        Don't have account? <a href="index.php">Sign Up</a>

    </div>
</form>

<?php
include ('partials/footer.php');
?>