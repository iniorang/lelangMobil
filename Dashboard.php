<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Dashboard</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<?php 
include_once("config.php");
$list = mysqli_query($mysqli,"SELECT * FROM kendaraan ORDER BY id DESC");
?>
<body>
    <a href="tambah.php">
        <button>Tambah mobil</button>
    </a>
    <table width='80%' border=1>
        <tr>
            <td>Tahun</td> <td>Merek</td> <td>Model</td> <td>Transmisi</td>
            <td>Plat</td> <td>Nilai interior</td> <td>Nilai Mesin</td>
            <td>Nilai Exterior</td> <td>Harga Awal</td> <td>Status</td>
             <td>Action</td>
        </tr>
        <?php 
        while($car_data = mysqli_fetch_array($list)){
            echo "<tr>";
            echo "<td>".$car_data['tahun_kendaraan']."</td>";
            echo "<td>".$car_data['merek_kendaraan']."</td>";
            echo "<td>".$car_data['model_kendaraan']."</td>";
            echo "<td>".$car_data['transmisi_kendaraan']."</td>";
            echo "<td>".$car_data['plat_no_kendaraan']."</td>";
            echo "<td>".$car_data['nilai_kondisi_interior']."</td>";
            echo "<td>".$car_data['nilai_kondisi_mesin']."</td>";
            echo "<td>".$car_data['nilai_kondisi_exterior']."</td>";
            echo "<td> Rp".$car_data['harga_awal']."</td>";
            echo "<td>".$car_data['status_kendaraan']."</td>";
            echo "<td><a href='edit.php?id=$car_data[id]'>Edit</a>
            | <a href='delet.php?id=$car_data[id]'>Delete</a></td>
            </tr>" ;
        }
        ?>
    </table>
</body>
</html>