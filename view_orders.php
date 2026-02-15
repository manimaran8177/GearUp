<?php
include "../db.php";

$result = $conn->query("
SELECT orders.order_id, users.name, spare_parts.part_name, orders.quantity
FROM orders
JOIN users ON orders.user_id = users.user_id
JOIN spare_parts ON orders.part_id = spare_parts.part_id
");

echo "<h2>Orders</h2>";

while ($row = $result->fetch_assoc()) {
    echo "Order ID: {$row['order_id']} | 
          User: {$row['name']} | 
          Part: {$row['part_name']} | 
          Qty: {$row['quantity']}<br>";
}