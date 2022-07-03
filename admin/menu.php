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
  <h3>Cuti</h3>
  <ul class="nav side-menu">
    <li><a href="#"><i class="fa fa-calendar"></i> Pengajuan Cuti <span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="index.php?page=ajukan_cuti">Ajukan Cuti</a></li>
        <li><a href="index.php?page=daftar_approval">Menunggu Approval</a></li>
      </ul>
    </li>
    <li><a href="#"><i class="fa fa-bell"></i>Data Pengajuan Cuti <span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="index.php?page=disetujui">Disetujui</a></li>
        <li><a href="index.php?page=perubahan">Perubahan</a></li>
        <li><a href="index.php?page=ditangguhkan">Ditangguhkan</a></li>
        <li><a href="index.php?page=tidakdisetujui">Tidak Disetujui</a></li>
      </ul>
    </li>
  </ul>
</div>
<div class="menu_section">
  <h3>Management</h3>
  <ul class="nav side-menu">
    <li><a href="index.php?page=data_user"><i class="fa fa-users"></i> Data Users</a></li>
    <li><a href="#"><i class="fa fa-database"></i> Data Pegawai <span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="index.php?page=data_pegawai">Lihat Semua Data Pegawai</a></li>
        <li><a href="index.php?page=data_jabatan">Data Jabatan</a></li>
        <li><a href="index.php?page=data_golongan">Data Golongan</a></li>
        <li><a href="index.php?page=data_gaji">Data Gaji</a></li>
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