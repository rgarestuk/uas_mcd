<?php

include('connection.php');

//karena form menggunakan method post kita gunakan $_POST
$waktu_kedatangan = $_POST['waktu_kedatangan']; //index didalamnya sesuai dengan input name yang ada di form
$selisih_kedatangan = $_POST['selisih_kedatangan'];
$waktu_awal_pelayanan = $_POST['waktu_awal_pelayanan'];
$selisih_pelayanan_kasir = $_POST['selisih_pelayanan_kasir'];
$waktu_selesai = $_POST['waktu_selesai'];
$selisih_keluar_antrian = $_POST['selisih_keluar_antrian'];

$insert = mysqli_query($connect,"INSERT INTO pelayanan_mcd SET waktu_kedatangan='$waktu_kedatangan', selisih_kedatangan='$selisih_kedatangan', waktu_awal_pelayanan='$waktu_awal_pelayanan', selisih_pelayanan_kasir='$selisih_pelayanan_kasir', waktu_selesai='$waktu_selesai', selisih_keluar_antrian='$selisih_keluar_antrian' "); 

if($insert) 
    header('Location:list.php'); //Jika berhasil akan di arahkan ke halaman list.php
else
    echo 'Input data gagal'; //jika gagal akan keluar pesan tersebut