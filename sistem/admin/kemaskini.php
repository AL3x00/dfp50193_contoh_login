<?php
require '../conn.php';

$idstaff = $_GET['idstaff'];
$sql = "SELECT * FROM staff WHERE idstaff = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idstaff);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_object();
?>

<form action="kemaskini_simpan.php" method="post">
    <input type="hidden" name="idstaff" value="<?php echo $row->idstaff; ?>" />
    <table>
        <tr>
            <td><label for="staff_name">Staff Name</label></td>
            <td>
                <input id="staff_name" type="text" name="staff_name" value="<?php echo $row->staff_name; ?>" required />
            </td>
        </tr>
        <tr>
            <td><label for="idpengguna">ID Pengguna</label></td>
            <td>
                <input id="idpengguna" type="text" step="any" name="idpengguna" value="<?php echo $row->idpengguna; ?>" required />
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <button type="submit">SIMPAN</button>
            </td>
        </tr>
    </table>
</form>