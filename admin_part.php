<?php
include "../db.php";

if (isset($_POST['add'])) {
    $brand = $_POST['brand'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];

    $conn->query("INSERT INTO spare_parts
        (brand_id, part_name, price, description)
        VALUES ($brand,'$name',$price,'$desc')");

    echo "Part added!";
}
?>

<form method="post">
<h2>Add Spare Part</h2>
Brand ID: <input type="number" name="brand"><br>
Part Name: <input type="text" name="name"><br>
Price: <input type="text" name="price"><br>
Description: <input type="text" name="desc"><br>
<button name="add">Add</button>
</form>