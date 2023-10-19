<?php
require '../aksi/koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['NAMA'];
    $alamat = $_POST['ALAMAT'];
    $jenis = $_POST['JENIS_MAINAN'];
    $jumlah = $_POST['JUMLAH_MAINAN'];
    $nomor = $_POST['NO_HP'];

    $result = mysqli_query($conn, "INSERT INTO mainan (ID, NAMA, ALAMAT, JENIS_MAINAN, JUMLAH_MAINAN, NO_HP) 
    values('', '$nama', '$alamat', '$jenis', '$jumlah', '$nomor')");
    if ($result) {
        echo "
        <script>
            alert('Data Berhasil DiTambahkan!');
            document.location.href = 'dashboard.php'
        </script>";
    }else {
        echo "
        <script>
            alert('Data Gagal DiTambahkan!');
            document.location.href = 'tambah.php'
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/tambah.css">
    <title>Menu Pesanan</title>
</head>
<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type-number] {
        -moz-appearance: textfield;
    }
</style>

<body>
    <div class="container">
        <div class="box form-box">
            <header>Pesanan</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="Nama">Nama</label>
                    <input type="text" name="NAMA" id="Nama" placeholder = "Enter Your Name" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="Alamat">Alamat</label>
                    <input type="text" name="ALAMAT" id="Alamat" placeholder = "Enter Your Address" autocomplete="off" required>
                </div>
                
                <div class="field input">
                    <label for="Jenis_Mainan">Jenis Mainan</label>
                    <!-- <input type="text" name="JENIS_MAINAN" id="Jenis_Mainan" placeholder = "Brand" autocomplete="off" required> -->
                    <select name="JENIS_MAINAN" id="" required>
                        <option hidden>Brand</option>
                        <option value="Lego City Police Car">Lego City Police Car</option>
                        <option value="Lego Technic Monster">Lego Technic Monster</option>
                        <option value="Lego Creator Super Robot">Lego Creator Super Robot</option>
                        <option value="Lego Technic Monster Jam EI">Lego Technic Monster Jam EI</option>
                        <option value="Lego Super Hero Iron Man">Lego Super Hero Iron Man</option>
                        <option value="Lego Super Mario Luigi">Lego Super Mario Luigi</option>
                        <option value="Lego NinjaGo Llyrod Race">Lego NinjaGo Llyrod Race</option>
                        <option value="Lego Technic Ford Mustang">Lego Technic Ford Mustang</option>
                        <option value="Lego The Batman Batmobil">Lego The Batman Batmobil</option>
                        <option value="Lego Harry Potter Hogwart Chess">Lego Harry Potter Hogwart Chess</option>
                    </select>
                </div>

                <div class="field input">
                    <label for="Jumlah_Mainan">Jumlah Mainan</label>
                    <input type="number" name="JUMLAH_MAINAN" id="Jumlah_Mainan" placeholder = "Quantity" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="Nomor_Hp">Nomor Handphone</label>
                    <input type="number" name="NO_HP" id="Nomor_Hp" placeholder = "Enter Your Number Phone" autocomplete="off" required>
                </div>
                
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Tambah Data" required>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

