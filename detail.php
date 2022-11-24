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
$gradeInt;
$gradeEng;
$gradeExt;

$list = mysqli_query($mysqli, "SELECT * FROM kendaraan WHERE id=$id");
while ($car_data = mysqli_fetch_array($list)) {
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
if ($inter >= 90) {
   $gradeInt = "A";
} elseif ($inter >= 70) {
   $gradeInt = "B";
} elseif ($inter >= 50) {
   $gradeInt = "C";
} else if ($inter >= 30) {
   $gradeInt = "D";
} else {
   $gradeInt = "E";
}
if ($mesin >= 90) {
   $gradeEng = "A";
} elseif ($inter >= 70) {
   $gradeEng = "B";
} elseif ($inter >= 50) {
   $gradeEng = "C";
} else if ($inter >= 30) {
   $gradeEng = "D";
} else {
   $gradeEng = "E";
}
if ($exterior >= 90) {
   $gradeExt = "A";
} elseif ($inter >= 70) {
   $gradeExt = "B";
} elseif ($inter >= 50) {
   $gradeExt = "C";
} else if ($inter >= 30) {
   $gradeExt = "D";
} else {
   $gradeExt = "E";
}
?>

<body>
   <div class="group-car">
      <div class="header-car">
         <?php echo "<h1>" . $thn . " " . $merek . " " . $model . "</h1>" ?>
      </div>
      <div class="image-car">
         <?php
         $list = mysqli_query($mysqli, "SELECT * FROM kendaraan WHERE id=$id");
         while ($car_data = mysqli_fetch_array($list)) {
            echo "<img src='file/" . $car_data['file_gambar']." 'width = 500 >";
         }
         ?>
      </div>
      <div class="detail-car">
         <label>Transmisi</label><?php echo "<p>$trans</p>" ?>
         <label>Plat Nomor</label><?php echo "<p>$plat</p>" ?>
         <label>Nilai Interior</label><?php echo "<p>$gradeInt</p>" ?>
         <label>Nilai Exterior</label><?php echo "<p>$gradeExt</pwi>" ?>
         <label>Nilai Mesin</label><?php echo "<p>$gradeEng</p>" ?>
         <label>Harga Awal</label><?php echo "<p>Rp$harga</p>" ?>
      </div>
   </div>
</body>

</html>