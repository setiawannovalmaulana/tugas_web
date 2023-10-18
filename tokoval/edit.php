<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select *  from tb_toko where idBarang='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Kode Barang</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['idBarang']; ?>">
						<input type="text" name="nama" value="<?php echo $d['kodeBarang']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama Barang</td>
					<td><input type="number" name="nim" value="<?php echo $d['namaBarang']; ?>"></td>
				</tr>
				<tr>
					<td>Satuan Barang</td>
					<td><input type="number" name="nim" value="<?php echo $d['satuanBarang']; ?>"></td>
				</tr>
				<tr>
					<td>Stock Barang</td>
					<td><input type="number" name="nim" value="<?php echo $d['stockBarang']; ?>"></td>
				</tr>
				<tr>
					<td>Harga Barang</td>
					<td><input type="number" name="nim" value="<?php echo $d['hargaBarang']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>