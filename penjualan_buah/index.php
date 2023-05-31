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

    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="p-4">
        <h1 class="text-center mb-4">Data Penjualan Buah</h1>
        <div class="table-responsive-md">
            <table class="table table-bordered text-center table-hover">
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
        </div>
    </section>

    <!-- BOOTSTRAP 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html> 
