<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Main</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='Style.css'>
  <script src='main.js'></script>
</head>

<body>
  <div class="group-trade">
    <h1>Mobil dalam proses lelang</h1>
    <?php
    include_once("config.php");
    $gradeInt;
    $gradeEng;
    $gradeExt;
    $list = mysqli_query($mysqli, "SELECT * FROM kendaraan WHERE status_kendaraan = 'Dilelang' ORDER BY id DESC ");
    while ($car_data = mysqli_fetch_array($list)) {
      $inter = $car_data['nilai_kondisi_interior'];
      $mesin = $car_data['nilai_kondisi_mesin'];
      $exterior = $car_data['nilai_kondisi_exterior'];
      /*-Grading-*/
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
      /*-Munculin kartu tiap data di db-*/
      echo '
      <a href="detail.php?id=' . $car_data['id'] . '">
      <div class="row">
        <div class="column">
          <div class="card">
            <img src=file/' . $car_data['file_gambar'] . '>
            <h4>Rp' . $car_data['harga_awal'] . '</h4>
            <h3>' . $car_data['tahun_kendaraan'] . " " . $car_data['model_kendaraan'] . '</h3>
            <p>' . $car_data['merek_kendaraan'] . '</p>
            <p>Nilai Interior ' . $gradeInt . '</p>
            <p>Nilai Mesin ' . $gradeEng . '</p>
            <p>Nilai Exterior ' . $gradeExt . '</p>
          </div>
        </div>
    </a>';
    }
    ?>
  </div>
  <div class="group-garage">
    <h1>Mobil dalam lot</h1>
    <?php
    $gradeInt;
    $gradeEng;
    $gradeExt;
    $list = mysqli_query($mysqli, "SELECT * FROM kendaraan  WHERE status_kendaraan ='Garasi' ORDER BY id DESC");
    while ($car_data = mysqli_fetch_array($list)) {
      $inter = $car_data['nilai_kondisi_interior'];
      $mesin = $car_data['nilai_kondisi_mesin'];
      $exterior = $car_data['nilai_kondisi_exterior'];
      /*-Grading-*/
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
      /*-Munculin kartu tiap data di db-*/
      echo '
      <a href="detail.php?id=' . $car_data['id'] . '">
      <div class="row">
        <div class="column">
          <div class="card">
            <img src=file/' . $car_data['file_gambar'] . '>
            <h4>Rp' . $car_data['harga_awal'] . '</h4>
            <h3>' . $car_data['tahun_kendaraan'] . " " . $car_data['model_kendaraan'] . '</h3>
            <p>' . $car_data['merek_kendaraan'] . '</p>
            <p>Nilai Interior ' . $gradeInt . '</p>
            <p>Nilai Mesin ' . $gradeEng . '</p>
            <p>Nilai Exterior ' . $gradeExt . '</p>
          </div>
        </div>
    </a>';
    }
    ?>
  </div>
</body>

</html>