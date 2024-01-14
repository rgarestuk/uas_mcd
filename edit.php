<?php 

include ('connection.php');

$id = $_GET['id'];

$query = mysqli_query($connect,"SELECT * FROM pelayanan_mcd WHERE id='$id' LIMIT 1");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="update.php" method="post">

    <input type="hidden" name="id" value="<?= $results[0]['id'] ?>">

        <label>Waktu kedatangan</label><br/>
        <input type="time" name="waktu_kedatangan" value="<?= $results[0]['waktu_kedatangan'] ?>"/>
        <br/><br/>
        
        <label>Selisih kedatangan</label><br/>
        <input type="number" name="selisih_kedatangan" id="" value="<?= $results[0]['selisih_kedatangan'] ?>"/>
        <br/><br/>
        
        <label>Waktu awal pelayanan</label><br/>
        <input type="time" name="waktu_awal_pelayanan" value="<?= $results[0]['waktu_awal_pelayanan'] ?>"/>
        <br/><br/>
        
        <label>Selisih pelayanan kasir</label><br/>
        <input type="number" name="selisih_pelayanan_kasir" id="" value="<?= $results[0]['selisih_pelayanan_kasir'] ?>"/>
        <br>

        <label>waktu selesai</label><br>
        <input type="time" name="waktu_selesai" id="" value="<?= $results[0]['waktu_selesai'] ?>"/>
        <br>

        <label>Selisih keluar antrian</label><br>
        <input type="number" name="selisih_keluar_antrian" id="" value="<?= $results[0]['selisih_keluar_antrian'] ?>"/>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>