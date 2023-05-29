<?php 
include 'connect.php';
include 'function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PENJUALAN BUAH</title>
</head>
<body>
    
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>NO</th>
            <th>NAMA BUAH</th>
            <th>JENIS</th>
            <th>PEMBELI</th>
            <th>JUMLAH BELI (KG)</th>
            <th>HARGA BUAH (KG)</th>
            <th>TOTAL</th>
            <th>TANGGAL</th>
        </tr>

        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($data)): ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["nama_buah"]; ?></td>
            <td><?= $row["jenis"]; ?></td>
            <td><?= $row["nama_pembeli"]; ?></td>
            <td><?= $row["jumlah_beli"]; ?> kg</td>
            <td><?= $row["harga"]; ?></td>
            <td><?= $row["total_beli"]; ?></td>
            <td><?= tanggal_ind($row["tanggal"]); ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>

</body>
</html> 
