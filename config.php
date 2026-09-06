<?php
session_start();
$conn=new mysqli('localhost','root','','lsd_cricket');
if($conn->connect_error) die('Database connection failed: '.$conn->connect_error);
$conn->set_charset('utf8mb4');
function e($v){return htmlspecialchars((string)$v,ENT_QUOTES,'UTF-8');}
function cart_count(){return count($_SESSION['cart']??[]);}
function money($v){return 'Rs. '.number_format((float)$v,2);}
?>
