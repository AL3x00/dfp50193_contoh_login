<?php
require '../conn.php';

if (!isset($_SESSION['idstaff'])) header('location:../');
$idstaff = $_SESSION['idstaff'];

$sql = "SELECT staff_name FROM staff WHERE idstaff = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idstaff);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($staff_name);
$stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>
        <?php echo "Selamat Datang $staff_name"; ?>
    </h3>
    <p><a href="../logout.php">Logout</a></p>
</body>

</html>