<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <?php
    include_once("config.php");

    if(isset($_POST['Update'])){
        $id = $_POST['id'];
        $thn = $_POST['tahun_form'];
        $merek = $_POST['merek_form'];
        $model = $_POST['model_form'];
        $trans = $_POST['transmission'];
        $plat = $_POST['plat_form'];
        $inter = $_POST['interior_form'];
        $mesin = $_POST['mesin_form'];
        $exterior = $_POST['exterior_form'];
        $harga = $_POST['harga_form'];

        $list = mysqli_query($mysqli,"UPDATE kendaraan SET tahun_kendaraan='$thn',merek_kendaraan='$merek',
        model_kendaraan='$model',transmisi_kendaraan='$trans',plat_no_kendaraan='$plat',nilai_kondisi_interior='$inter',nilai_kondisi_mesin='$mesin',
        nilai_kondisi_exterior='$exterior',harga_awal='$harga' WHERE id=$id");
    }
    ?>

    <?php
    $id = $_GET['id'];

    $list = mysqli_query($mysqli,"SELECT * FROM kendaraan WHERE id=$id");
    while($car_data = mysqli_fetch_array($list))
    {
        $thn = $car_data['tahun_form'];
        $merek = $car_data['merek_form'];
        $model = $car_data['model_form'];
        $trans = $car_data['transmission'];
        $plat = $car_data['plat_form'];
        $inter = $car_data['interior_form'];
        $mesin = $car_data['mesin_form'];
        $exterior = $car_data['exterior_form'];
        $harga = $car_data['harga_form'];
    }
    ?>
    
    <body>
    <form action="edit.php" method="post">
        <p>
            <label for="Tahun">Tahun kendaraan</label><br>
            <input type="number" name="tahun_form" value=<?php echo $thn;?> required>
        </p>
        <p>
            <label for="Merk">Merek kendaraan</label><br>
            <input type="text" name="merek_form" value=<?php echo $merek;?> required>
        </p>
        <p>
            <label for="Model">Model kendaraan</label><br>
            <input type="text" name="model_form" value=<?php echo $model;?> required>
        </p>
            <label for="Transmission">Transmission</label><br>
            <input type="radio" name="transmission" value="Automatic" required>Automatic
            <input type="radio" name="transmission" value="Manual">Manual
        <p>
            <label for="Plat">Plat Nomer kendaraan</label><br>
            <input type="text" name="plat_form" value=<?php echo $plat;?> required>
        </p>
        <p>
            <label for="Interior">Nilai kondisi interior</label><br>
            <input type="number" name="interior_form" value=<?php echo $inter;?> required>
        </p>
        <p>
            <label for="Mesin">Nilai kondisi mesin</label><br>
            <input type="number" name="mesin_form" value=<?php echo $mesin;?> required>
        </p>
        <p>
            <label for="Exterior">Nilai kondisi exterior</label><br>
            <input type="number" name="exterior_form" value=<?php echo $exterior;?> required>
        </p>
        <p>
            <label for="Harga">Harga awal</label><br>
            <input type="number" name="harga_form" value=<?php echo $harga;?> required>
        </p>
        <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
        <button type="submit" name="Update">Simpan</button>
    </form>
    <a href="Dashboard.php">
        <button>Batalkan</button>
    </a>
    </body>
</html>