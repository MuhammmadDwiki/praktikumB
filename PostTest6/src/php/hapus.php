<?php
require "../aksi/koneksi.php";
$id = $_GET['id'];
$mainan = [];


$results = mysqli_query($conn, "select * from mainan where ID = '$id'");
while ($row = mysqli_fetch_assoc($results)){
    $mainan[] = $row;
}
foreach($mainan as $mn) {
    $status=unlink('../assets/'.$mn['GAMBAR_MAINAN']);  
    if ($status) {
        $result = mysqli_query($conn,"DELETE FROM mainan WHERE ID = '$id'");
        echo "
        <script>
        alert('Data berhasil Hapus!');
        document.location.href = 'dashboard.php'
        </script>";
    } else {
        $result = mysqli_query($conn,"DELETE FROM mainan WHERE ID = '$id'");
        echo "
        <script>
            alert('Data Gagal Hapus!');
            document.location.href = 'dashboard.php'
        </script>";
    }
}

?>