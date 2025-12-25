<?php
include 'koneksi.php';

$id = $_POST['id'];

$query = "DELETE FROM mahasiswa WHERE id = '$id'";
$result = mysqli_query($conn, $query);

if ($result) {
    echo json_encode(["message" => "Data berhasil dihapus"]);
} else {
    echo json_encode(["message" => "Gagal menghapus data"]);
}
?>