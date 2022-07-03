<?php
include "../database/koneksi.php";
$pegawai = mysqli_query($koneksi, "SELECT nama_pegawai from pegawai");
$jabatan = mysqli_query($koneksi, "SELECT nama_jabatan from jabatan");
$golongan = mysqli_query($koneksi, "SELECT nama_golongan from golongan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
    <title>Charts</title>
</head>

<body>

    <div class="container">
        <canvas id="myCharts"></canvas>
    </div>
    <script>
        var ctx = document.getElementById("myCharts");
        var myCharts = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jumlah Pegawai', 'Jumlah Jabatan', 'Jumlah Golongan'],
                datasets: [{
                    label: 'Laporan Pegawai',
                    data: [
                        <?php echo mysqli_num_rows($pegawai); ?>,
                        <?php echo mysqli_num_rows($jabatan); ?>,
                        <?php echo mysqli_num_rows($golongan); ?>

                    ],
                    backgroundColor: [
                        'rgba(255,99,132,0.2',
                        'rgba(54,162,235,0.2'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>

    <div class="row top_tiles">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
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
                    <table id="datatable" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Jabatan</th>
                                <th>Golongan</th>
                                <th>Cuti</th>
                                <th>KNP</th>
                                <th>KGB</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../database/koneksi.php';
                            $query = mysqli_query($koneksi, "SELECT * FROM pegawai pg, jabatan jb, golongan gl WHERE pg.id_jabatan=jb.id_jabatan and pg.id_golongan=gl.id_golongan order by pg.id_jabatan");
                            $i = 1;
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $row['nama_pegawai'] ?></td>
                                    <td><?php echo $row['nip'] ?></td>
                                    <td><?php echo $row['nama_jabatan'] ?></td>
                                    <td><?php echo $row['nama_golongan'] ?></td>
                                    <td><a href="index.php?page=viewcutipegawai&nip=<?php echo $row['nip'] ?>" class="label label-success">Lihat Detail</a> </td>
                                    <td><a href="index.php?page=viewknppegawai&nip=<?php echo $row['nip'] ?>" class="label label-success">Lihat Detail</a> </td>
                                    <td><a href="index.php?page=viewkgbpegawai&nip=<?php echo $row['nip'] ?>" class="label label-success">Lihat Detail</a> </td>
                                </tr>

                            <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>