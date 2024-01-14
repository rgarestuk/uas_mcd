<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="insert.php" method="post">
        <label>Waktu kedatangan</label><br/>
        <input type="time" name="waktu_kedatangan"/>
        <br/><br/>
        
        <label>Selisih kedatangan</label><br/>
        <input type="number" name="selisih_kedatangan" id="">
        <br/><br/>
        
        <label>Waktu awal pelayanan</label><br/>
        <input type="time" name="waktu_awal_pelayanan"/>
        <br/><br/>
        
        <label>Selisih pelayanan kasir</label><br/>
        <input type="number" name="selisih_pelayanan_kasir" id="">
        <br>

        <label>waktu selesai</label><br>
        <input type="time" name="waktu_selesai" id="">
        <br>

        <label>Selisih keluar antrian</label><br>
        <input type="number" name="selisih_keluar_antrian" id="">
        <br>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>