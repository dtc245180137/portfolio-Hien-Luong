<?php
echo "<h1>Portfolio của DTC245180137</h1>";
$conn = new mysqli("db", "portfolio_user", "StrongPassW0rd!@#", "portfolio_db");
if ($conn->connect_error) {
    die("<p style='color:red;'>Kết nối DB thất bại: " . $conn->connect_error . "</p>");
}
echo "<p style='color:green;'>Kết nối Database MySQL thành công!</p>";
?>
