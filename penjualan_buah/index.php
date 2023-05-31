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
    <title>Data Penjualan Buah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Data Penjualan Buah</h1>
    <table class="table table-bordered">
        <thead class="table-dark">
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
        </thead>
        <tbody>
            
        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($data)): ?>
            <tr>
                <td align=center valign=top><?= $i; ?></td>
                <td align=center valign=top><?= $row["nama_buah"]; ?></td>
                <td align=center valign=top><?= $row["jenis"]; ?></td>
                <td align=center valign=top><?= $row["nama_pembeli"]; ?></td>
                <td align=center valign=top><?= $row["jumlah_beli"]; ?> kg</td>
                <td align=center valign=top><?= $row["harga"]; ?></td>
                <td align=center valign=top><?= $row["total_beli"]; ?></td>
                <td align=center valign=top><?= tanggal_ind($row["tanggal"]); ?></td>
            </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
        </tbody>
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html> 
