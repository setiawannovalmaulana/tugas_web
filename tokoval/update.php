<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kode = $_POST['kodeBarang'];
$nama = $_POST['namaBarang'];
$satuan = $_POST['satuanBarang'];
$stock = $_POST['stockBarang'];
$harga = $_POST['hargaBarang'];
 
 

mysqli_query($koneksi,"update tb_toko set kodeBarang='$kode',namaBarang='$nama', satuanBarang='$satuan', satuanStock='$stock' where $harga='$harga'");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>