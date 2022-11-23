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
    <div class="form-group">
        <h1>Tambah</h1>
        <form action="tambah.php" method="post" enctype="multipart/form-data">
            <div class="form-input">
                <label for="Tahun">Tahun kendaraan</label><br>
                <input type="number" name="tahun_form" required>
            </div>
            <div class="form-input">
                <label for="Merk">Merek kendaraan</label><br>
                <input type="text" name="merek_form" required>
            </div>
            <div class="form-input">
                <label for="Model">Model kendaraan</label><br>
                <input type="text" name="model_form" required>
            </div>
            <div class="form-input">
                <label for="Transmission">Transmission</label><br>
                <input type="radio" name="transmission" value="Automatic" required>Automatic
                <input type="radio" name="transmission" value="Manual">Manual
            </div>
            <div class="form-input">
                <label for="Plat">Plat Nomer kendaraan</label><br>
                <input type="text" name="plat_form" required>
            </div>
            <div class="form-input">
                <label for="Interior">Nilai kondisi interior</label><br>
                <input type="number" name="interior_form" required>
            </div>
            <div class="form-input">
                <label for="Mesin">Nilai kondisi mesin</label><br>
                <input type="number" name="mesin_form" required>
            </div>
            <div class="form-input">
                <label for="Exterior">Nilai kondisi exterior</label><br>
                <input type="number" name="exterior_form" required>
            </div>
            <div class="form-input">
                <label for="Harga">Harga awal</label><br>
                <input type="number" name="harga_form" required>
            </div>
            <div class="form-input">
                <label for="Gambar">Gambar</label><br>
                <input type="file" name="gambar_form">
            </div>
            <button type="submit" name="Submit">Simpan</button>
        </form>
        <a href="Dashboard.php">
            <button type="cancel" name="Cancel">Batalkan</button>
        </a>
    </div>
    <?php
    if (isset($_POST['Submit'])) {
        $thn = $_POST['tahun_form'];
        $merek = $_POST['merek_form'];
        $model = $_POST['model_form'];
        $trans = $_POST['transmission'];
        $plat = $_POST['plat_form'];
        $inter = $_POST['interior_form'];
        $mesin = $_POST['mesin_form'];
        $exterior = $_POST['exterior_form'];
        $harga = $_POST['harga_form'];
        $gambar = $_FILES['gambar_form']['name'];
        //^^Atas variabel
        //Upload foto
        if(strlen($gambar)>0){
            if(is_uploaded_file($_FILES['gambar_form']['tmp_name'])){
                move_uploaded_file($_FILES['gambar_form']['tmp_name'],"file/".$gambar);
            }
        }
        
        //Nambahin
        include_once("config.php");
        $list = mysqli_query($mysqli, "INSERT INTO kendaraan(tahun_kendaraan,merek_kendaraan,
                model_kendaraan,transmisi_kendaraan,plat_no_kendaraan,nilai_kondisi_interior,nilai_kondisi_mesin,
                nilai_kondisi_exterior,harga_awal,status_kendaraan,file_gambar) VALUES('$thn','$merek','$model','$trans','$plat','$inter',
                '$mesin','$exterior','$harga','Garasi','$gambar')");

    }
    ?>
</body>

</html>