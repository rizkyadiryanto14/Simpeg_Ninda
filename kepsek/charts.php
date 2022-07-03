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

    <style type="text/css">
        .container {
            width: 50%;
            margin: 15px auto;
        }
    </style>
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
                labels: ['Pegawai', 'Jabatan', 'Golongan'],
                datasets: [{
                    label: 'Laporan',
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
</body>

</html>