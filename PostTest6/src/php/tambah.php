<?php
require '../aksi/koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['NAMA'];
    $alamat = $_POST['ALAMAT'];
    $jenis = $_POST['JENIS_MAINAN'];
    $jumlah = $_POST['JUMLAH_MAINAN'];
    $nomor = $_POST['NO_HP'];
    $date = date('Y-m-d');
    
    //upload gambar
    $img = $_FILES['GAMBAR_MAINAN']['name'];
    $explode = explode(',',$img);
    $ekstensi = strtolower(end($explode));
    $gambar_baru = "$date.$nama.$ekstensi";
    $tmp = $_FILES['GAMBAR_MAINAN']['tmp_name'];

    if (move_uploaded_file($tmp,'../assets/'.$gambar_baru)) {
        $result = mysqli_query($conn, "INSERT INTO mainan (ID, NAMA, ALAMAT, JENIS_MAINAN, JUMLAH_MAINAN, NO_HP, GAMBAR_MAINAN) 
        values('', '$nama', '$alamat', '$jenis', '$jumlah', '$nomor', '$gambar_baru')");
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
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Pesanan</title>
    <link rel="stylesheet" href="../style/tambah.css">
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
            <form action="" method="post" enctype="multipart/form-data">
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
                        <option value="Lego">Lego</option>
                        <option value="Baby Alive">Baby Alive</option>
                        <option value="McFarlane">McFarlane</option>
                        <option value="Nerf">Nerf</option>
                        <option value="Plum">Plum</option>
                        <option value="SuperWings">SuperWings</option>
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

                <div class="field input">
                    <label for="Gambar_Mainan">Upload Gambar Mainan</label>
                    <input type="file" name="GAMBAR_MAINAN" id=""> <br>
                </div>
                
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Tambah Data" required>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

