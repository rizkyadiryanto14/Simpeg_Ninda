<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Export Jabatan</title>

</head>

<body>
    <style type="text/css">
        body {
            font-family: sans-serif;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #3c3c3c;
            padding: 3px 8px;

        }

        a {
            background: blue;
            color: #fff;
            padding: 8px 10px;
            text-decoration: none;
            border-radius: 2px;
        }
    </style>
    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Jabatan.xls");
    ?>

    <table border="1">
        <tr>
            <th>No</th>
            <th>jabatan</th>
        </tr>
        <?php
        include '../database/koneksi.php';
        $query = mysqli_query($koneksi, "SELECT * FROM jabatan");
        $i = 1;
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['nama_jabatan'] ?></td>
            </tr>
        <?php
            $i++;
        }
        ?>

    </table>
</body>

</html>