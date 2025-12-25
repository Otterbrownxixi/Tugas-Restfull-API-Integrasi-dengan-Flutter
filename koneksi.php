<?php
include 'koneksi.php';

// Gunakan isset untuk mengecek apakah data dikirim atau tidak
$nama    = isset($_POST['nama']) ? $_POST['nama'] : '';
$nim     = isset($_POST['nim']) ? $_POST['nim'] : '';
$jurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : '';

// Validasi: Jangan masukkan ke DB jika data penting kosong
if ($nama != '' && $nim != '') {
    $query = "INSERT INTO mahasiswa (nama, nim, jurusan) VALUES ('$nama', '$nim', '$jurusan')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo json_encode(["message" => "Data berhasil ditambahkan"]);
    } else {
        echo json_encode(["message" => "Gagal menambahkan data: " . mysqli_error($conn)]);
    }
} else {
    echo json_encode(["message" => "Gagal: Data nama atau nim tidak boleh kosong"]);
}
?>