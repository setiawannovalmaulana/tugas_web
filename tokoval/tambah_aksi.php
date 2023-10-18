<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kode = $_POST['kodeBarang'];
$nama = $_POST['namaBarang'];
$satuan = $_POST['satuanBarang'];
$stock = $_POST['stockBarang'];
$harga = $_POST['hargaBarang'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into tb_toko values('$kode','$nama','$satuan','$stock','$harga')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>