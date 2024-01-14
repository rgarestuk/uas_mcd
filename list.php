<?php 
include ('connection.php'); 

$query = mysqli_query($connect,"SELECT * FROM pelayanan_mcd");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<html>
<body>
    <a href="add.php">Tambah Data</a>  
    
    <br/><br/>
    
    <table border="1">
        <tr>
            <th>Waktu Kedatangan</th>
            <th>Selisih Kedatangan</th>
            <th>Waktu Awal Pelayanan</th>
            <th>Selisih Pelayanan Kasir</th>
            <th>Waktu Selesai</th>
            <th>Selisih Keluar Antrian</th>
            <th>Pilihan</th>
        </tr>
        <?php foreach($results as $result) : ?>
            <tr>
                <td><?php echo $result['waktu_kedatangan']?></td>
                <td><?php echo $result['selisih_kedatangan']?></td>
                <td><?php echo $result['waktu_awal_pelayanan']?></td>
                <td><?php echo $result['selisih_pelayanan_kasir']?></td>
                <td><?php echo $result['waktu_selesai']?></td>
                <td><?php echo $result['selisih_keluar_antrian']?></td>
                <td>
                    <a href="edit.php?id=<?php echo $result['id']?>">Edit</a>
                    <a href="delete.php?id=<?php echo $result['id']?>">Delete</a> 
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
