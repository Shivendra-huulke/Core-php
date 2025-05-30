<?php
session_start();
if (!isset($_SESSION['user_id'])) header("Location: ../auth/login.php");
include '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['description'];

    $stmt = $conn->prepare("INSERT INTO products (name, price, description) VALUES (?, ?, ?)");
    $stmt->bind_param("sds", $name, $price, $desc);
    $stmt->execute();

    header("Location: index.php");
}
?>

<h2>Add Product</h2>
<form method="POST">
    Name: <input name="name" required><br>
    Price: <input name="price" type="number" step="0.01" required><br>
    Description: <textarea name="description"></textarea><br>
    <button type="submit">Add</button>
</form>
<a href="index.php">← Back</a>
