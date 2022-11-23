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
<body>
    <form action="tambah.php" method="post">
        <p>
            <label for="Tahun">Tahun kendaraan</label><br>
            <input type="number" name="tahun_form" required>
        </p>
        <p>
            <label for="Merk">Merek kendaraan</label><br>
            <input type="text" name="merek_form" required>
        </p>
        <p>
            <label for="Model">Model kendaraan</label><br>
            <input type="text" name="model_form" required>
        </p>
            <label for="Transmission">Transmission</label><br>
            <input type="radio" name="transmission" value="Automatic" required>Automatic
            <input type="radio" name="transmission" value="Manual">Manual
        <p>
            <label for="Plat">Plat Nomer kendaraan</label><br>
            <input type="text" name="plat_form" required>
        </p>
        <p>
            <label for="Interior">Nilai kondisi interior</label><br>
            <input type="number" name="interior_form" required>
        </p>
        <p>
            <label for="Mesin">Nilai kondisi mesin</label><br>
            <input type="number" name="mesin_form" required>
        </p>
        <p>
            <label for="Exterior">Nilai kondisi exterior</label><br>
            <input type="number" name="exterior_form" required>
        </p>
        <p>
            <label for="Harga">Harga awal</label><br>
            <input type="number" name="harga_form" required>
        </p>
        <button type="submit" name="Submit">Simpan</button>
    </form>
    <a href="Dashboard.php">
        <button>Batalkan</button>
    </a>
    <?php
    if(isset($_POST['Submit'])){
        $thn = $_POST['tahun_form'];
        $merek = $_POST['merek_form'];
        $model = $_POST['model_form'];
        $trans = $_POST['transmission'];
        $plat = $_POST['plat_form'];
        $inter = $_POST['interior_form'];
        $mesin = $_POST['mesin_form'];
        $exterior = $_POST['exterior_form'];
        $harga = $_POST['harga_form'];

        include_once("config.php");
        $list = mysqli_query($mysqli,"INSERT INTO kendaraan(tahun_kendaraan,merek_kendaraan,
        model_kendaraan,transmisi_kendaraan,plat_no_kendaraan,nilai_kondisi_interior,nilai_kondisi_mesin,
        nilai_kondisi_exterior,harga_awal,status_kendaraan) VALUES('$thn','$merek','$model','$trans','$plat','$inter',
        '$mesin','$exterior','$harga','Garasi')");

        header("Location:Dashboard.php");
        
    }
    ?>
</body>
</html>