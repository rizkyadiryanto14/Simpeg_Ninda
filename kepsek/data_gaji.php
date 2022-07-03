<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Gaji</title>
</head>

<body>
    <div class="page-title">
        <div class="title_left">
            <h3>Gaji</h3>
        </div>

        <div class="title_right">
            <div class="col-md-3 col-sm-3 col-xs-12 pull-right">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Gaji</a></li>
                </ol>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <a href="export_gaji.php" title="Tambah User" class="btn btn-success pull-right"><i class="fa fa-download"></i> Export Laporan Gaji</a>
            <div class="x_panel">
                <div class="x_title">
                    <h2>Data Gaji <small>Daftar Gaji Golongan</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>golongan</th>
                                <th>Gaji</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            include "../database/koneksi.php";
                            $query = mysqli_query($koneksi, "SELECT * FROM gaji");
                            $i = 1;
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td>Rp. <?php echo $row['golongan'] ?></td>
                                    <td>Rp. <?php echo $row['gaji_pegawai'] ?></td>
                                </tr>
                            <?php
                                $i++;
                            }
                            ?>
                        </tbody>

</body>

</html>