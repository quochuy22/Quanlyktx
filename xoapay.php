<?php
$id = $_GET['sid'];
require_once 'connect.php';
$xoa_sql = "DELETE FROM pay WHERE id=$id";
mysqli_query($conn, $xoa_sql);
echo '<h1>Xoa thanh cong</h1>';
header("Location: dspay.php");
?>