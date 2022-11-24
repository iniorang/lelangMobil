<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<style>
    body{
        background-color: cyan;
    }
</style>
<?php
    include_once("config.php");

    if (isset($_POST['Update'])) {
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
        $status = $_POST['status_form'];

        $list = mysqli_query($mysqli, "UPDATE kendaraan SET tahun_kendaraan='$thn',
        merek_kendaraan='$merek',model_kendaraan='$model',transmisi_kendaraan='$trans',
        plat_no_kendaraan='$plat',nilai_kondisi_interior='$inter',nilai_kondisi_mesin='$mesin',
        nilai_kondisi_exterior='$exterior',harga_awal='$harga',status_kendaraan='$status' WHERE id='$id'");
        header("Location:Dashboard.php");

        $msg = "Perubahan mobil berhasil";
        
        if($list){
            echo "<script type='text/javascript'>alert('$msg');</script>";
            header("Location:Dashboard.php");
        }
    }
    ?>

<?php
    $id = $_GET['id'];

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
    ?>

<body>
    <div class="form-group">
        <h1>Edit</h1>
        <form action="edit.php" method="post">
            <div class="form-input">
                <label for="Tahun">Tahun kendaraan</label><br>
                <input type="number" name="tahun_form" value=<?php echo $thn; ?> required>
            </div>
            <div class="form-input">
                <label for="Merk">Merek kendaraan</label><br>
                <input type="text" name="merek_form" value=<?php echo $merek; ?> required>
            </div>
            <div class="form-input">
                <label for="Model">Model kendaraan</label><br>
                <input type="text" name="model_form" value=<?php echo $model; ?> required>
            </div>
            <div class="form-input">
                <label for="Transmission">Transmission</label><br>
                <input type="radio" name="transmission" value="Automatic" required <?php if ($trans=='Automatic')
                echo
                    'checked="checked"' ?>>Automatic
                <input type="radio" name="transmission" value="Manual" <?php if ($trans=='Manual')
                echo
                    'checked="checked"' ?>>Manual
            </div>
            <div class="form-input">
                <label for="Plat">Plat Nomer kendaraan</label><br>
                <input type="text" name="plat_form" value=<?php echo $plat; ?> required>
            </div>
            <div class="form-input">
                <label for="Interior">Nilai kondisi interior</label><br>
                <input type="number" name="interior_form" value=<?php echo $inter; ?> required>
            </div>
            <div class="form-input">
                <label for="Mesin">Nilai kondisi mesin</label><br>
                <input type="number" name="mesin_form" value=<?php echo $mesin; ?> required>
            </div>
            <div class="form-input">
                <label for="Exterior">Nilai kondisi exterior</label><br>
                <input type="number" name="exterior_form" value=<?php echo $exterior; ?> required>
            </div>
            <div class="form-input">
                <label for="Harga">Harga awal</label><br>
                <input type="number" name="harga_form" value=<?php echo $harga; ?> required>
            </div>
            <div class="form-input">
                <label for="Status">Status</label><br>
                <input type="radio" name="status_form" value="Garasi" required <?php if ($status=='Garasi')
                echo
                    'checked="checked"' ?>>Di Garasi
                <input type="radio" name="status_form" value="Dilelang" <?php if ($status=='Dilelang')
                echo
                    'checked="checked"' ?>>Dilelang
            </div>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
            <button type="submit" name="Update">Simpan</button>
        </form>
        <a href="Dashboard.php">
            <button>Batalkan</button>
        </a>
    </div>
</body>

</html>