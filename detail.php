<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Detail</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
    <?php
    include_once("config.php");
     $id = $_GET['id'];

     $list = mysqli_query($mysqli,"SELECT * FROM kendaraan WHERE id=$id");
     while($car_data = mysqli_fetch_array($list))
     {
         $thn = $car_data['tahun_kendaraan'];
         $merek = $car_data['merek_kendaraan'];
         $model = $car_data['model_kendaraan'];
         $trans = $car_data['transmisi_kendaraan'];
         $plat = $car_data['plat_no_kendaraan'];
         $inter = $car_data['nilai_kondisi_interior'];
         $mesin = $car_data['nilai_kondisi_mesin'];
         $exterior = $car_data['nilai_kondisi_exterior'];
         $harga = $car_data['harga_awal'];
         $status = $car_data['status_kendaraan'];
     }
    ?>
<body>
    <p>Nice</p>
</body>
</html>