<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA DARI DATABASE </title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN PEKOK COFFE</h2>
		<h4>Revian arfarizi</h4>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
            <th>Nama pemesan</th>
			<th>nomor meja</th>
			<th>pembayaran</th>
			<th>nama pesanan</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from pasien");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['idPasien']; ?></td>
                            <td><?= $data['nmPasien']; ?></td>
                            <td><?= $data['jk']; ?></td>
                            <td><?= $data['alamat']; ?></td>
                            <td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>