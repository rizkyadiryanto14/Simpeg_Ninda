<div role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ajukan Cuti</h3>
      </div>

      <div class="title_right">
        <div class="col-md-3 col-sm-3 col-xs-12 pull-right">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Ajukan Cuti</li>
          </ol>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-3 col-sm-3"></div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Form Pengajuan Cuti</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form method="POST">
              <div class="form-group">
                <label>Jenis cuti yang diambil</label>
                <select class="form-control" name="jenis_cuti">
                  <option disabled selected>-- Pilih jenis cuti --</option>
                  <option value="Cuti Tahunan">Cuti Tahunan</option>
                  <option value="Cuti Besar">Cuti Besar</option>
                  <option value="Cuti Sakit">Cuti Sakit</option>
                  <option value="Cuti Melahirkan">Cuti Melahirkan</option>
                  <option value="Cuti Karena Alasan Penting">Cuti Karena Alasan Penting</option>
                  <option value="Cuti diluar Tanggungan Negara">Cuti diluar Tanggungan Negara</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Alasan Cuti</label>
                <input type="text" required class="form-control" placeholder="Masukkan alasan cuti" name="alasan_cuti">
              </div>
              <div class="form-group">
                <label for="">Lamanya cuti</label>
                <input type="text" required class="form-control" placeholder="Masukan berapa lama" name="lama_cuti">
                <select name="ket_lamacuti" class="form-control select2">
                  <option disabled selected>-- Pilih Hari, Bulan, Tahun --</option>
                  <option value="Hari">Hari</option>
                  <option value="Minggu">Minggu</option>
                  <option value="Bulan">Bulan</option>
                  <option value="Tahun">Tahun</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Dari tanggal</label>
                <input type="date" required class="form-control" name="dari_tanggal">
              </div>
              <div class="form-group">
                <label for="">Sampai dengan</label>
                <input type="date" required class="form-control" name="sampai_dengan">
              </div>
              <div class="form-group">
                <label for="">Atasan</label>
                <select class="form-control" name="atasan">
                  <?php
                  include '../database/koneksi.php';

                  $queryjabatan = mysqli_query($koneksi, "SELECT * FROM pegawai pg, jabatan jb WHERE nip='$nip' and pg.id_jabatan=jb.id_jabatan");
                  $rowjabatan = mysqli_fetch_array($queryjabatan);
                  $jabatan = $rowjabatan['nama_jabatan'];

                  if ($jabatan == 'GURU PNS' || $jabatan == 'WALI KELAS') {
                  ?>
                    <option value="operator">OPERATOR</option>
                  <?php
                  } elseif ($jabatan == 'WAKA KESISWAAN' || $jabatan == 'WAKA KURIKULUM' || $jabatan == 'WAKA AKADEMIK' || $jabatan == 'OPERATOR' || $jabatan == 'WAKIL SAPRAS') {
                  ?>
                    <option value="sekretaris">SEKRETARIS</option>
                  <?php
                  } elseif ($jabatan == 'SEKRETARIS' || $jabatan == 'WAKIL KETUA' || $jabatan == 'BENDAHARA') {
                  ?>
                    <option value="ketua">KETUA</option>
                  <?php
                  } elseif ($jabatan == 'STAFF TU') {
                  ?>
                    <option value="kepalatu">KEPALA TU</option>
                  <?php
                  } elseif ($jabatan == 'STAFF KOMITE') {
                  ?>
                    <option value="Kepalakomite">KEPALA KOMITE</option>
                  <?php
                  } elseif ($jabatan == 'STAFF KURIKULUM') {
                  ?>
                    <option value="wakakurikulum">WAKA KURIKULUM</option>
                  <?php
                  } elseif ($jabatan == 'STAFF BENDAHARA') {
                  ?>
                    <option value="bendahara">BENDAHARA</option>
                  <?php
                  } elseif ($jabatan == 'STAFF SAPRAS') {
                  ?>
                    <option value="kepalasapras">KEPALA SAPRAS</option>
                  <?php
                  } elseif ($jabatan == 'STAFF KESISWAAN') {
                  ?>
                    <option value="kasubagkeuangan">WAKA KESISWAAN</option>
                  <?php
                  } elseif ($jabatan == 'KETUA') {
                  ?>
                    <option value="ketualangsung">-</option>
                  <?php
                  }
                  ?>
                </select>
              </div>
              <hr>
              <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">Ajukan Cuti</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-3"></div>
    </div>
  </div>
</div>

<?php
include '../database/koneksi.php';

if (isset($_POST['submit'])) {
  $jenis = $_POST['jenis_cuti'];
  $alasan = $_POST['alasan_cuti'];
  $lama = $_POST['lama_cuti'];
  $ketlama = $_POST['ket_lamacuti'];
  $dari = $_POST['dari_tanggal'];
  $sampai = $_POST['sampai_dengan'];
  $atasan = $_POST['atasan'];

  $selectid = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE nip='$nip'");
  $rowid = mysqli_fetch_array($selectid);
  $id = $rowid['id_pegawai'];

  if ($atasan == 'operator') {

    $operator = '196211051983032005	';
    $query = mysqli_query($koneksi, "INSERT INTO cuti_pegawai VALUES (null, '$id', '$jenis', '$alasan', '$lama', '$ketlama', '$dari', '$sampai' ,null, $operator, null, 1, 0, 0, 'Diajukan', 'Menunggu Approval Operator')");
  } elseif ($atasan == 'sekretaris') {

    $sekretaris = '196709172000121004';
    $query = mysqli_query($koneksi, "INSERT INTO cuti_pegawai VALUES (null, '$id', '$jenis', '$alasan', '$lama', '$ketlama', '$dari', '$sampai' ,null,'$sekretaris', null, 1, 0, 0, 'Diajukan', 'Menunggu Approval Sekretaris')");
  } elseif ($atasan == 'ketualangsung') {
    $query = mysqli_query($koneksi, "INSERT INTO cuti_pegawai VALUES (null, '$id', '$jenis', '$alasan', '$lama', '$ketlama', '$dari', '$sampai' ,null,null, null, 1, 1, 1, 'Disetujui', 'Pengajuan Cuti Disetujui')");
  } else if ($atasan == 'ketua') {
    $ketua = '196507021992031005';
    $query = mysqli_query($koneksi, "INSERT INTO cuti_pegawai VALUES (null, '$id', '$jenis', '$alasan', '$lama', '$ketlama', '$dari', '$sampai' ,null,null, '$kepalasekolah', 1, 1, 0, 'Diajukan', 'Menunggu Approval Ketua')");
  } elseif ($atasan == 'kepalatu') {

    $kepalatu = '196709172000121002';
    $query = mysqli_query($koneksi, "INSERT INTO cuti_pegawai VALUES (null, '$id', '$jenis', '$alasan', '$lama', '$ketlama', '$dari', '$sampai' ,$kepalatu, null, null, 0, 0, 1, 'Diajukan', 'Menunggu Approval Kepala TU')");
  } elseif ($atasan == 'kepalakomite') {

    $kepalakomite = '196211051983032004';
    $query = mysqli_query($koneksi, "INSERT INTO cuti_pegawai VALUES (null, '$id', '$jenis', '$alasan', '$lama', '$ketlama', '$dari', '$sampai' ,$kepalakomite, null, null, 0, 0, 1, 'Diajukan', 'Menunggu Approval Kepala')");
  } elseif ($atasan == 'WAKA KURIKULUM') {

    $wakakurikulum = '196901031995031001';
    $query = mysqli_query($koneksi, "INSERT INTO cuti_pegawai VALUES (null, '$id', '$jenis', '$alasan', '$lama', '$ketlama', '$dari', '$sampai' ,$wakakurikulum, null, null, 0, 0, 1, 'Diajukan', 'Menunggu Approval Panmud Permohonan')");
  } elseif ($atasan == 'bendahara') {

    $bendahara = '197208161994031002';
    $query = mysqli_query($koneksi, "INSERT INTO cuti_pegawai VALUES (null, '$id', '$jenis', '$alasan', '$lama', '$ketlama', '$dari', '$sampai' ,$bendahara, null, null, 0, 0, 1, 'Diajukan', 'Menunggu Approval bendahara')");
  } elseif ($atasan == 'KEPALA SAPRAS') {

    $kepalasapras = '196303071992031005';
    $query = mysqli_query($koneksi, "INSERT INTO cuti_pegawai VALUES (null, '$id', '$jenis', '$alasan', '$lama', '$ketlama', '$dari', '$sampai' ,$kepalasapras, null, null, 0, 0, 1, 'Diajukan', 'Menunggu Approval')");
  } elseif ($atasan == 'WAKA KESISWAAN') {

    $wakakesiswaan = '196008161988031007';
    $query = mysqli_query($koneksi, "INSERT INTO cuti_pegawai VALUES (null, '$id', '$jenis', '$alasan', '$lama', '$ketlama', '$dari', '$sampai' ,$wakakeiswaan, null, null, 0, 0, 1, 'Diajukan', 'Menunggu Approval ')");
  }

  if ($query) {
    echo "<script>alert('Data Berhasil Ditambahkan'); document.location='index.php?page=daftar_approval';</script>";
  } else {
    echo "<script>alert('Data Gagal Ditambahkan'); document.location='index.php?page=ajukan_cuti';</script>";
  }
}
?>