<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}
?>

<link rel="stylesheet" href="css/style.css">
<header>
    <h1>User Dashboard</h1>
    <nav>
        <a href="index.php">Shop</a>
        <a href="logout.php">Logout</a>
    </nav>
</header>

<div class="container">
    <h2>Welcome to Auto Parts Store</h2>
</div>