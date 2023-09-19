<?php
include ('partials/header.php');
?>

<form action="includes/signup.inc.php" method="post">
    <h3>sign up form</h3>
    <p><?=($_GET['error'] ?? ' ')?></p>
    <div>
        <label for="fname">full name </label>
        <input type="text" name="fname" id="fname">
    </div>
    <div>
        <label for="uname">user name </label>
        <input type="text" name="uname" id="uname">
    </div>
    <div>
        <label for="email">email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="password">password</label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <label for="pwd_repeat">password</label>
        <input type="password" name="pwd_repeat" id="pwd_repeat">
    </div>
    <div>
        <input type="submit" value="sign up" name="signup">
        Already have account? <a href="login.php">Log in</a>
    </div>
</form>

<?php
include ('partials/footer.php');
?>