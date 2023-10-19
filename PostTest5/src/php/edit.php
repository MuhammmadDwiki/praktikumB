<?php
require '../aksi/koneksi.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM mainan where id=$id");

$mainan = [];

while ($row = mysqli_fetch_assoc($result)){
    $mainan[] = $row;
}

$mainan = $mainan[0];

if (isset($_POST['edit'])) {
    $nama = $_POST['NAMA'];
    $alamat = $_POST['ALAMAT'];
    $jenis = $_POST['JENIS_MAINAN'];
    $jumlah = $_POST['JUMLAH_MAINAN'];
    $nomor = $_POST['NO_HP'];

    $result = mysqli_query($conn, "UPDATE mainan SET NAMA = '$nama', ALAMAT='$alamat', JENIS_MAINAN='$jenis', JUMLAH_MAINAN = '$jumlah', NO_HP = '$nomor' WHERE ID = '$id' ");
    if ($result) {
        echo "
        <script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'dashboard.php'
        </script>";
    }else {
        echo "
        <script>
            alert('Data Gagal DiTambahkan!');
            document.location.href = 'edit.php'
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
    <title>Edit</title>
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
            <header>Edit</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="Nama">Nama</label>
                    <input type="text" name="NAMA" value="<?php echo $mainan['NAMA']?>" id="Nama" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="Alamat">Alamat</label>
                    <input type="text" name="ALAMAT" value="<?php echo $mainan['ALAMAT']?>" id="Alamat" autocomplete="off" required>
                </div>
                
                <div class="field input">
                    <label for="Jenis_Mainan">Jenis Mainan</label>
                    <!-- <input type="text" name="JENIS_MAINAN" value="<?php echo $mainan['JENIS_MAINAN']?>" id="Jenis_Mainan" autocomplete="off" required> -->
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
                    <input type="number" name="JUMLAH_MAINAN" value="<?php echo $mainan['JUMLAH_MAINAN']?>" id="Jumlah_Mainan" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="Nomor_Hp">Nomor Handphone</label>
                    <input type="number" name="NO_HP" value="<?php echo $mainan['NO_HP']?>" id="Nomor_Hp" autocomplete="off" required>
                </div>
                
                <div class="field">
                    <input type="submit" class="btn" name="edit" value="Edit Data" required>
                </div>
            </form>
        </div>
    </div>
</body>
</html>