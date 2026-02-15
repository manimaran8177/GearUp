<?php
session_start();
include "db.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}

$user_id = $_SESSION['user_id'];
$part_id = $_GET['part_id'];

$conn->query("INSERT INTO orders (user_id, part_id, quantity)
              VALUES ($user_id, $part_id, 1)");

echo "Order placed successfully!<br>";
echo "<a href='dashboard.php'>Back</a>";
?>