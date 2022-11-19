<html>
	<head>
		<title>JUAL BELI BARANG</title>
		<style type="text/css">
			.mr-2{
				margin-right: 20px;
			}
			.btn{
			    text-decoration:none;
			}
			/* memberi efek hover pada button */
			.btn:hover{
				opacity:0.9;
			}
		</style>
	</head>
	<body style="font-family:arial">
		<center><h2>Aplikasi CRUD Penjualan Barang<br /></h2>
		<hr />
		<br><h3><b><u>Tambah Data Baru</u></b></h3><br/>
		<form action="tambah.php" method="post" name="form1">
			<table width="40%" border="0">
				<tr>
					<td>Id Barang</td>
					<td><input type="text" name="id_barang" size="50" placeholder="Masukkan id barang" required></td>
				</tr>
				<tr>
					<td>Nama Barang</td>
					<td><input type="text" name="nama_barang" size="50" placeholder="Masukkan nama barang" required></td>
				</tr>
				<tr>
					<td>Harga Barang</td>
					<td><input type="text" name="harga_barang" size="50" placeholder="Masukkan harga barang" required></td>
				</tr>
				<tr>
					<td>Stok Barang</td>
					<td><input type="text" name="stok_barang" size="50" placeholder="Masukkan jumlah barang" required></td>
				</tr>
				<tr>
					<td></td>
					<td align="right"><br>
						<input type="submit" name="Submit" value="Simpan" style="padding: 5px; margin-right: 5px;">
						<input type="button" value="Kembali" onclick="window.location.href='index.php'" style="margin-right: 22%; padding: 5px;">
					</td>
				</tr>
			</table>
		</form>
		<?php
			// Check If form submitted, insert form data into users table.
			if(isset($_POST['Submit'])){
				$id_barang = $_POST['id_barang'];
				$nama_barang = $_POST['nama_barang'];
				$harga_barang = $_POST['harga_barang'];
				$stok_barang = $_POST['stok_barang'];
				// include database connection file
				include "koneksi.php";
				// Insert user data into table
				$tambah_barang = "insert into tbl_barang values('$id_barang','$nama_barang','$harga_barang','$stok_barang')";
				$kerjakan=mysqli_query($konek, $tambah_barang);
				if($kerjakan){
					// Show message when user added
					header("Location: index.php");
				}
				else{
					echo "Barang gagal di simpan!";
				}
			}
		?>
		</center>
	</body>
</html>