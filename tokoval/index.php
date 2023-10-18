
<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH Barang</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>id Barang</th>
            <th>kode Barang</th>
			<th>nama Barang</th>
			<th>satuan Barang</th>
			<th>stock Barang</th>
            <th>harga Barang</th>
			
			
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_toko");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
                <td><?php echo $d['kodeBarang']; ?></td>
				<td><?php echo $d['namaBarang']; ?></td>
                <td><?php echo $d['satuanBarang']; ?></td>
                <td><?php echo $d['stockBarang']; ?></td>
				<td><?php echo $d['hargaBarang']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['idBarang']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['idBarang']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>