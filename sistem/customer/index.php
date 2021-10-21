<?php
require '../conn.php';

if (!isset($_SESSION['idcustomer'])) header('location:../');
$idcustomer = $_SESSION['idcustomer'];

$sql = "SELECT cust_name FROM customer WHERE idcustomer = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idcustomer);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cust_name);
$stmt->fetch();
?>