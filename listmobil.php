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
    <h1>Mobil dalam proses lelang</h1>
    <?php
    include_once("config.php");
    $list = mysqli_query($mysqli,"SELECT * FROM kendaraan WHERE status_kendaraan = 'Dilelang' ORDER BY id DESC ");
    while($car_data = mysqli_fetch_array($list)){
    echo '
    <a href="detail.php?id='.$car_data['id'].'">
    <div class="row">
    <div class="column">
      <div class="card">
        <h3>'.$car_data['tahun_kendaraan']." ".$car_data['model_kendaraan'].'</h3>
        <p>'.$car_data['merek_kendaraan'].'</p>
        <p>Some text</p>
        <p>Some text</p>
      </div>
    </div>
    </a>';
    }
    ?>
    <h1>Mobil dalam lot</h1>
    <?php
    $list = mysqli_query($mysqli,"SELECT * FROM kendaraan  WHERE status_kendaraan ='Garasi' ORDER BY id DESC");
    while($car_data = mysqli_fetch_array($list)){
        echo '
        <a href="detail.php?id='.$car_data['id'].'">
        <div class="row">
        <div class="column">
          <div class="card">
            <h3>'.$car_data['tahun_kendaraan']." ".$car_data['model_kendaraan'].'</h3>
            <p>'.$car_data['merek_kendaraan'].'</p>
            <p>Some text</p>
            <p>Some text</p>
          </div>
        </div>
        </a>';
    }
    ?>
</body>
</html>