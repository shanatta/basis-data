<?php 
// Koneksi ke database
$db = mysqli_connect("localhost", "root", "", "db_penjualanbuah");

// Koneksi ke table
$data = mysqli_query($db, "SELECT * FROM tbl_buah, tbl_hargabuah, tbl_pembeli WHERE tbl_buah.id_buah=tbl_hargabuah.id_buah AND tbl_pembeli.id_pembeli=tbl_hargabuah.id_pembeli ORDER BY tanggal ASC");

?>