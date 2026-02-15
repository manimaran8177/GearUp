<?php
include "db.php";

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = md5($_POST['password']);

    $conn->query("INSERT INTO users (name, email, password)
                  VALUES ('$name','$email','$pass')");

    echo "Registered successfully!";
}
?>

<link rel="stylesheet" href="css/style.css">
<div class="form-box">
<form method="post">
<h2>Register</h2>
<input type="text" name="name" placeholder="Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button name="register">Register</button>
</form>
</div>