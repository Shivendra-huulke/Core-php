<?php
session_start();
if (!isset($_SESSION['user_id'])) header("Location: ../auth/login.php");
include '../config/db.php';

$result = $conn->query("SELECT * FROM products");

echo "<a href='add.php'>Add Product</a><br><br>";
// echo "<a href="../auth/logout.php">Logout</a>";
while ($row = $result->fetch_assoc()) {
    echo "<div>
        <strong>{$row['name']}</strong> - ₹{$row['price']}<br>
        <a href='edit.php?id={$row['id']}'>Edit</a> |
        <a href='delete.php?id={$row['id']}'>Delete</a>
    </div><hr>";
}
?>