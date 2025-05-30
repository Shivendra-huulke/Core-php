<?php
session_start();
if (!isset($_SESSION['user_id'])) header("Location: ../auth/login.php");
include '../config/db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM products WHERE id=$id");
$product = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['description'];

    $stmt = $conn->prepare("UPDATE products SET name=?, price=?, description=? WHERE id=?");
    $stmt->bind_param("sdsi", $name, $price, $desc, $id);
    $stmt->execute();

    header("Location: index.php");
}
?>

<h2>Edit Product</h2>
<form method="POST">
    Name: <input name="name" value="<?= $product['name'] ?>" required><br>
    Price: <input name="price" type="number" step="0.01" value="<?= $product['price'] ?>" required><br>
    Description: <textarea name="description"><?= $product['description'] ?></textarea><br>
    <button type="submit">Update</button>
</form>
<a href="index.php">← Back</a>
