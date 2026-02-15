<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Auto Spare Parts</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <h1>Auto Spare Parts Store</h1>
    <nav>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    </nav>
</header>

<div class="container">
<h2>Select Brand</h2>

<?php
$result = $conn->query("SELECT * FROM brands");
while ($row = $result->fetch_assoc()) {
    echo "<a class='brand-btn' href='index.php?brand={$row['brand_id']}'>
            {$row['brand_name']}
          </a>";
}

if (isset($_GET['brand'])) {
    $brand = $_GET['brand'];
    $parts = $conn->query("SELECT * FROM spare_parts WHERE brand_id=$brand");

    echo "<h3>Recommended Parts</h3>";
    while ($p = $parts->fetch_assoc()) {
        echo "<div class='card'>
                <h4>{$p['part_name']}</h4>
                <p>₹{$p['price']}</p>
                <a href='cart.php?part_id={$p['part_id']}'>Order</a>
              </div>";
    }
}
?>
</div>
</body>
</html>