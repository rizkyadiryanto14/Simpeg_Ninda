<?php
include "../database/koneksi.php";
$id = $_GET['id_gaji'];
$golongan = $_GET['golongan'];
$gaji_pegawai = $_GET['gaji_pegawai'];

$query = "UPDATE gaji SET golongan='$golongan', gaji_pegawai = '$gaji_pegawai' WHERE id_gaji='$id'";
$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
    echo "<script>alert('Berhasil Edit'); document.location='index.php?page=data_gaji';</script>";
} else {
    echo "<script>alert('Gagal Edit'); document.location='index.php?page=data_gaji';</script>";
}
