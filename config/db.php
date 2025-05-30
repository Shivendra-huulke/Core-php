<?php
$conn = new mysqli("localhost", "root", "", "core_php_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>