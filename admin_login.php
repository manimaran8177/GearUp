<?php
session_start();

if (isset($_POST['login'])) {
    if ($_POST['username'] == "admin" &&
        $_POST['password'] == "admin123") {

        $_SESSION['admin'] = true;
        header("Location: admin_dashboard.php");
    } else {
        echo "Invalid login";
    }
}
?>

<form method="post">
<h2>Admin Login</h2>
Username: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
<button name="login">Login</button>
</form>