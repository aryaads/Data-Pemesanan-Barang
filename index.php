<html>
	<head>
		<title>JUAL BELI BARANG</title>
		<style>
			.table1 {
				font-family: sans-serif;
				color: #444;
				border-collapse: collapse;
				width: 50%;
				border: 1px solid #f2f5f7;
			}
			.table1 tr th{
				background: #35A9DB;
				color: #fff;
				font-weight: normal;
			}
			.table1, th, td {
				padding: 8px 20px;
				text-align: left;
			}
			.table1 tr:hover {
				background-color: #f5f5f5;
			}
			.table1 tr:nth-child(even) {
				background-color: #f2f2f2;
			}
		</style>
	</head>
	<body style="font-family:arial">
		<center><h2>Aplikasi CRUD Penjualan Barang<br /></h2></center>
		<hr /><br>
		<center><h3><b><u>Data Barang</u></b></h3></center><br>
		<input type="button" value="Tambah Data" onclick="window.location.href='tambah.php'" style="margin-left: 15%; padding: 5px;"><br><br>
		<center>
			<table style="width:70%" class="table1">
				<tr>
					<th><center>No</center></th>
					<th><center>Kode Barang</center></th>
					<th><center>Nama Barang</center></th>
					<th><center>Harga Barang</center></th>
					<th><center>Stok Barang</center></th>
					<th colspan=2><center>Opsi</center></th>
				</tr>
				<?php
					include "koneksi.php";
					$no = 1;
					$data = mysqli_query($konek,"select * from tbl_barang");
					while($r = mysqli_fetch_array($data)){
						$id_barang = $r['id_barang'];
						$nama_barang = $r['nama_barang'];
						$harga_barang = $r['harga_barang'];
						$stok_barang = $r['stok_barang'];
				?>
				<tr>
					<td><center><?php echo $no++; ?></center></td>
					<td><center><?php echo $id_barang; ?></center></td>
					<td><center><?php echo $nama_barang; ?></center></td>
					<td><center>Rp.<?php echo $harga_barang; ?></center></td>
					<td><center><?php echo $stok_barang; ?></center></td>
					<td>
						<center>
						<input type="button" value="Edit" onclick="window.location.href='edit.php?id_barang=<?php echo $r['id_barang'];?>'">
						<input type="button" value="Delete" onclick="window.location.href='hapus.php?id_barang=<?php echo $r['id_barang'];?>'" style="margin-left: 10px;">
						</center>
					</td></center>
				</tr>
				<?php
					}
				?>
			</table>
		</center>
	</body>
</html>