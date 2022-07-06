<div class="page-title">
  <div class="title_left">
    <h3>Profile</h3>
  </div>
  <div class="title_right">
    <div class="col-md-2 col-sm-2 col-xs-12 pull-right">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Profile</li>
      </ol>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-2 col-sm-2 col-xs-2"></div>
  <div class="col-md-8 col-sm-12 col-xs-12">
    <a href="#" class="btn btn-danger pull-right" data-toggle="modal" data-target=".btn-resetpass"><i class="fa fa-key"></i> Reset Password</a>
    <a href="#" class="btn btn-info pull-right" data-toggle="modal" data-target=".btn-edit-profile"><i class="fa fa-edit"></i> Edit Profile</a>
    <div class="x_panel">
      <div class="x_title">
        <h2>Profile</h2>
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
      <?php
      // Query untuk menampilkan profile pegawai
      // Select berdasarkan session nip yang tersimpan
      include '../database/koneksi.php';
      $query = mysqli_query($koneksi, "SELECT * FROM pegawai pg, jabatan jb, golongan gl,pendidikan pdk WHERE nip='$nip' and pg.id_jabatan=jb.id_jabatan and pg.id_golongan=gl.id_golongan and pg.id_pendidikan=pdk.id_pendidikan");
      $row = mysqli_fetch_array($query);

      $selectfoto = mysqli_query($koneksi, "SELECT * FROM user WHERE nip='$nip'");
      $row2 = mysqli_fetch_array($selectfoto);
      ?>
      <div class="x_content">
        <div class="text-center">
          <?php
          if (empty($row2['foto'])) {
          ?>
            <img src="../build/images/user.png" class="img-circle">
          <?php
          } elseif (!empty($row2['foto'])) {
          ?>
            <img src="../build/images/thump_<?php echo $row2['foto']; ?>" class="img-circle">
          <?php
          }
          ?>

        </div>
        <!-- Menampilkan data pegawai -->
        <h3 class="profile-username text-center">User</h3>
        <strong>Nama Lengkap</strong>
        <p class="text-muted"><?php echo $row['nama_pegawai']; ?></p>
        <hr>
        <strong>NIP</strong>
        <p class="text-muted"><?php echo $row['nip']; ?></p>
        <hr>
        <strong>Jenis Kelamin</strong>
        <p class="text-muted"><?php echo $row['jenis_kelamin']; ?></p>
        <hr>
        <strong>Alamat</strong>
        <p class="text-muted"><?php echo $row['alamat']; ?></p>
        <hr>
        <strong>Agama</strong>
        <p class="text-muted"><?php echo $row['agama']; ?></p>
        <hr>
        <strong>Jabatan</strong>
        <p class="text-muted"><?php echo $row['nama_jabatan']; ?></p>
        <hr>
        <strong>Golongan</strong>
        <p class="text-muted"><?php echo $row['nama_golongan']; ?></p>
        <hr>
        <strong>Pendidikan Terakhir</strong>
        <p class="text-muted"><?php echo $row['nama_pendidikan']; ?></p>
        <hr>
        <strong>Tahun Masuk</strong>
        <p class="text-muted"><?php echo $row['tahun_masuk'] ?></p>
        <hr>
        <strong>Tahun Keluar</strong>
        <p class="text-muted"><?php echo $row['tahun_keluar'] ?></p>
        <hr>
      </div>
    </div>
  </div>
  <div class="col-md-2 col-sm-2 col-xs-2"></div>
</div>

<!-- Modal pop up edit profile -->
<div class="modal fade btn-edit-profile" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Form Edit Profile </h4>
      </div>
      <div class="modal-body">
        <form data-parsley-validate class="form-horizontal form-label-left" action="edit_profile.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nama Lengkap</label>
            <div class="form-group">
              <input type="text" required="required" class="form-control" name="nama_pegawai" value="<?php echo $row['nama_pegawai']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label>NIP</label>
            <div class="form-group">
              <input type="text" class="form-control" name="nip" value="<?php echo $row['nip']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="jenis_kelamin">
              <option selected disabled>-- Pilih Jenis Kelamin --</option>
              <option value="laki-laki">Laki-Laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Alamat">
          </div>

          <div class="form-group">
            <label>TTL</label>
            <input type="text" class="form-control" name="TTL" placeholder="TTL">
          </div>

          <div class="form-group">
            <label>Agama</label>
            <select name="agama" class="form-control">
              <option selected disabled>-- Pilih Agama --</option>
              <option value="islam">Islam</option>
              <option value="hindu">Hindu</option>
              <option value="kristen">Kristen</option>
              <option value="budha">Budha</option>
            </select>
          </div>

          <div class="form-group">
            <label>Jabatan</label>
            <select class="form-control" name="jabatan">
              <option selected disabled>-- Pilih Jabatan --</option>
              <?php
              $jabatan = mysqli_query($koneksi, "SELECT * FROM jabatan");
              while ($rowjab = mysqli_fetch_array($jabatan)) {
              ?>
                <option value="<?php echo $rowjab['id_jabatan']; ?>"><?php echo $rowjab['nama_jabatan']; ?></option>
              <?php
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <label>Golongan</label>
            <select class="form-control" name="golongan">
              <option selected disabled>-- Pilih Golongan--</option>
              <?php
              $jabatan = mysqli_query($koneksi, "SELECT * FROM golongan");

              while ($rowjab = mysqli_fetch_array($jabatan)) {
              ?>
                <option value="<?php echo $rowjab['id_golongan']; ?>"><?php echo $rowjab['nama_golongan']; ?></option>
              <?php
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <label>Pendidikan</label>
            <select class="form-control" name="pendidikan">
              <option selected disabled>-- Pilih Pendidikan--</option>
              <?php
              $pendidikan = mysqli_query($koneksi, "SELECT * FROM pendidikan");
              while ($rowpen = mysqli_fetch_array($pendidikan)) {
              ?>
                <option value="<?php echo $rowpen['id_pendidikan']; ?>"><?php echo $rowpen['nama_pendidikan']; ?></option>
              <?php
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <label for="">Tahun Masuk</label>
            <input type="text" name="tahun_masuk" id="" class="form-control">
          </div>

          <div class="form-group">
            <label for="">Tahun Keluar</label>
            <input type="text" name="tahun_keluar" class="form-control">
          </div>

          <div class="ln_solid"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End modal pop up edit profile -->

<!-- Modal pop up reset password on profile -->
<div class="modal fade btn-resetpass" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Form Reset Password </h4>
      </div>
      <div class="modal-body">
        <form data-parsley-validate class="form-horizontal form-label-left" method="POST">
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="hidden" name="nippegawai" value="<?php echo $row['nip']; ?>">
              <input class="form-control col-md-7 col-xs-12" type="password" name="pass" placeholder="Masukkan password">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Masukkan Ulang Password</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input class="form-control col-md-7 col-xs-12" type="password" name="ulangpass" placeholder="Masukkan ulang password">
            </div>
          </div>

          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End modal pop up reset pasword on profile profile -->

<?php
include '../database/koneksi.php';

if (isset($_POST['submit'])) {
  $nippegawaiuser = $_POST['nippegawai'];
  $password = $_POST['pass'];
  $ulangpassword = $_POST['ulangpass'];

  if ($password == $ulangpassword) {
    $passbaru = md5($password);
    $query = mysqli_query($koneksi, "UPDATE user SET password='$passbaru' WHERE nip='$nippegawaiuser'");

    if ($query) {
      echo "<script>alert('Berhasil reset password'); document.location='index.php?page=profile';</script>";
    } else {
      echo "<script>alert('Gagal reset password'); document.location='index.php?page=profile';</script>";
    }
  } else {
    echo "<script>alert('Password anda tidak cocok'); document.location='index.php?page=profile';</script>";
  }
}
?>