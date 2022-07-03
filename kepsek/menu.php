<div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
        <li><a href="index.php?page=dashboard"><i class="fa fa-home"></i> Dashboard</a></li>
    </ul>
</div>
<?php
include '../database/koneksi.php';

$selectjabatan = mysqli_query($koneksi, "SELECT * FROM pegawai pg, jabatan jb WHERE nip='$nip' and pg.id_jabatan=jb.id_jabatan");
$rowselect = mysqli_fetch_array($selectjabatan);
$jabatanpegawai = $rowselect['nama_jabatan'];
if ($jabatanpegawai == 'OPERATOR' || $jabatanpegawai == 'SEKRETARIS' || $jabatanpegawai == 'KETUA' || $jabatanpegawai == 'KEPALA TU' || $jabatanpegawai == 'KEPALA KOMITE' || $jabatanpegawai == 'WAKA KURIKULUM' || $jabatanpegawai == 'BENDAHARA' || $jabatanpegawai == 'KEPALA SAPRAS' || $jabatanpegawai == 'WAKA KESISWAAN') {
?>
    <div class="menu_section">
        <h3>Menu Khusus</h3>
        <ul class="nav side-menu">
            <li><a href="#"><i class="fa fa-calendar"></i> Approval Cuti <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="index.php?page=approve_cuti">Approve Cuti</a></li>
                </ul>
            </li>
        </ul>
    </div>
<?php
}
?>
<div class="menu_section">
    <h3>Laporan</h3>
    <ul class="nav side-menu">
        <li><a href="#"><i class="fa fa-database"></i> Laporan Pegawai <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="index.php?page=data_pegawai">Lihat Semua Data Pegawai</a></li>
                <li><a href="index.php?page=data_jabatan">Data Jabatan</a></li>
                <li><a href="index.php?page=data_golongan">Data Golongan</a></li>
            </ul>
        </li>
        <li><a href="#"><i class="fa fa-list"></i> Data Histori <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="index.php?page=daftar_cuti">Daftar Cuti</a></li>
                <li><a href="index.php?page=daftar_knp">Daftar KNP</a></li>
                <li><a href="index.php?page=daftar_kgb">Daftar KGB</a></li>
            </ul>
        </li>
    </ul>
</div>