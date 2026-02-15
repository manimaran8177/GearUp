<?php
$conn = new mysqli("localhost", "root", "", "auto_parts_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>