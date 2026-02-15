<?php
session_start();
include "db.php";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = md5($_POST['password']);

    $res = $conn->query("SELECT * FROM users
                         WHERE email='$email' AND password='$pass'");

    if ($res->num_rows > 0) {
        $user = $res->fetch_assoc();
        $_SESSION['user_id'] = $user['user_id'];
        header("Location: dashboard.php");
    } else {
        echo "Invalid login";
    }
}
?>

<link rel="stylesheet" href="css/style.css">
<div class="form-box">
<form method="post">
<h2>Login</h2>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button name="login">Login</button>
</form>
</div>