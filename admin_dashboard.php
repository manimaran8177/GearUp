<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
}
?>

<h2>Admin Dashboard</h2>
<a href="add_part.php">Add Spare Part</a><br>
<a href="view_orders.php">View Orders</a>