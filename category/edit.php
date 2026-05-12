
<?php
include '../connection.php';
include 'action.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    insertCategory($conn, $nama);
}
?>

<form method="POST" action="insert.php">
    <input type="text" name="nama" placeholder="Nama Category" required>
    <button type="submit">Simpan</button>
</form>
