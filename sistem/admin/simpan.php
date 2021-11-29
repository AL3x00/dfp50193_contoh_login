<?php
require '../conn.php';

$idpengguna = $_POST['idpengguna'];
$katalaluan = password_hash('abc123', PASSWORD_BCRYPT);
$staffname = $_POST['staff_name'];

$sql = "INSERT INTO staff (idpengguna, katalaluan, staff_name) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sss', $idpengguna, $katalaluan, $staffname);
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