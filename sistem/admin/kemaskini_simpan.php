<?php
require '../conn.php';

$idstaff = $_POST['idstaff'];
$staff_name = $_POST['staff_name'];
$staff_name = strtoupper($staff_name);
$idpengguna = $_POST['idpengguna'];

$sql = "UPDATE staff SET staff_name = ?, idpengguna = ? WHERE idstaff = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssi', $staff_name, $idpengguna, $idstaff);
$stmt->execute();

if ($conn->error) {
?>
    <script>
        alert('Maaf! Nama tersebut sudah wujud dalam senarai');
        window.location = 'index.php';
    </script>
<?php
    exit;
} else {
    header('location: index.php');
}
