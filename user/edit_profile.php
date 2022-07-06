<?php
include "../database/koneksi.php";
$nip = $_GET['nip'];
$nama = $_GET['pegawai'];
$jenis_kelamin = $_GET['jenis_kelamin'];
$alamat = $_GET['alamat'];
$jabatanpegawai = $_GET['jabatan'];
$golpegawai = $_GET['golongan'];
$pendidikan = $_GET['pendidikan'];
$TTL = $_GET['TTL'];
$agama = $_GET['agama'];
$tahun_masuk = $_GET['tahun_masuk'];
$tahun_keluar = $_GET['tahun_keluar'];

$query = "UPDATE pegawai SET nama_pegawai='$nama', id_jabatan='$jabatanpegawai', id_golongan='$golpegawai', id_pendidikan='$pendidikan', jenis_kelamin='$jenis_kelamin', TTL='$TTL', agama='$agama' WHERE nip='$nip'";
$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
    echo "<script>alert('Berhasil Edit'); document.location='index.php?page=profile';</script>";
} else {
    echo "<script>alert('Gagal Edit'); document.location='index.php?page=profile';</script>";
}
