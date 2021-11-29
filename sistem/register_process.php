<?php
require 'conn.php';

$nric = $_POST['nric'];
$katalaluan = $_POST['katalaluan'];
$custname = $_POST['cust_name'];

$sql = "INSERT INTO customer (nric, katalaluan, cust_name) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sss', $nric, $katalaluan, $custname);
$stmt->execute();

if ($conn->error) {
    ?>
    <script>
        alert('Maaf! Gagal menyimpan data');
        window.location = 'index.php';
    </script>
    <?php
    exit;
} else {
    header('location: index.php');
}