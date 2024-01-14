<?php 

include ('connection.php');

$id = $_POST['id'];
$waktu_kedatangan = $_POST['waktu_kedatangan'];
$selisih_kedatangan = $_POST['selisih_kedatangan'];
$waktu_awal_pelayanan = $_POST['waktu_awal_pelayanan'];
$selisih_pelayanan_kasir = $_POST['selisih_pelayanan_kasir'];
$waktu_selesai = $_POST['waktu_selesai'];
$selisih_keluar_antrian = $_POST['selisih_keluar_antrian'];

$update = mysqli_query($connect,"UPDATE pelayanan_mcd SET waktu_kedatangan='$waktu_kedatangan', selisih_kedatangan='$selisih_kedatangan', waktu_awal_pelayanan='$waktu_awal_pelayanan', selisih_pelayanan_kasir='$selisih_pelayanan_kasir', waktu_selesai='$waktu_selesai', selisih_keluar_antrian='$selisih_keluar_antrian'  WHERE id='$id' "); 

if($update) 
    header('Location:list.php');
else
    echo 'Input data gagal';

?>