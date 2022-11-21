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
    <form action="" method="post">
        <p>
            <label for="Tahun">Tahun kendaraan</label><br>
            <input type="number" name="tahun_form">
        </p>
        <p>
            <label for="Merk">Merek kendaraan</label><br>
            <input type="text" name="merek_form">
        </p>
        <p>
            <label for="Model">Model kendaraan</label><br>
            <input type="text" name="model_form">
        </p>
            <label for="Transmission">Transmission</label><br>
            <input type="radio" name="transmission" value="automatic">Automatic
            <input type="radio" name="transmission" value="manual">Manual
        <p>
            <label for="Plat">Plat Nomer kendaraan</label><br>
            <input type="number" name="plat_form">
        </p>
        <p>
            <label for="Interior">Nilai kondisi interior</label><br>
            <input type="number" name="interior_form">
        </p>
        <p>
            <label for="Mesin">Nilai kondisi mesin</label><br>
            <input type="number" name="mesin_form">
        </p>
        <p>
            <label for="Exterior">Nilai kondisi exterior</label><br>
            <input type="number" name="exterior_form">
        </p>
        <p>
            <label for="Harga">Harga awal</label><br>
            <input type="number" name="harga_form">
        </p>
    </form>
    <button name="Submit">Simpan</button>
    <a href="Dashboard.php">
        <button>Batalkan</button>
    </a>
</body>
</html>