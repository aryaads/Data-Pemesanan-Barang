<?php
	// include database connection file
	include "koneksi.php";
	// Check if form is submitted for user update, then redirect to homepage after update
	if(isset($_POST['update'])){
		$id_barang = $_POST['id_barang'];
		$nama_barang=$_POST['nama_barang'];
		$harga_barang=$_POST['harga_barang'];
		$stok_barang=$_POST['stok_barang'];
		// update user data
		$result = mysqli_query($konek, "UPDATE tbl_barang SET nama_barang='$nama_barang', harga_barang='$harga_barang', stok_barang='$stok_barang' WHERE id_barang='$id_barang'");
		// Redirect to homepage to display updated user in list
		header("Location: index.php");
	}
	// Display selected user data based on id
	// Getting id from url
	$id_barang = $_GET['id_barang'];
	// Fetech user data based on id
	$result = mysqli_query($konek, "SELECT * FROM tbl_barang WHERE id_barang='$id_barang'");
	while($r = mysqli_fetch_array($result)){
		$nama_barang = $r['nama_barang'];
		$harga_barang = $r['harga_barang'];
		$stok_barang = $r['stok_barang'];
	}
?>

<html>
	<head>
		<title>JUAL BELI BARANG</title>
	</head>
	<body style="font-family:arial">
		<center><h2>Aplikasi CRUD Penjualan Barang<br /></h2>
		<hr />
		<br><h3><b><u>Edit Data Barang</u></b></h3><br/>
		<form action="edit.php" method="post" name="update_user">
			<table width="40%" border="0">
				<tr>
					<td>Nama Barang</td>
					<td><input type="text" name="nama_barang" size="50" value="<?php echo $nama_barang;?>" required></td>
				</tr>
				<tr>
					<td>Harga Barang</td>
					<td><input type="text" name="harga_barang" size="50" value="<?php echo $harga_barang;?>" required></td>
				</tr>
				<tr>
					<td>Stok Barang</td>
					<td><input type="text" name="stok_barang" size="50" value="<?php echo $stok_barang;?>" required></td>
				</tr>
				<tr>
					<td></td>
					<td align="right"><br>
						<input type="hidden" name="id_barang" value=<?php echo $_GET['id_barang'];?>>
						<input type="submit" name="update" value="Update" style="padding: 5px; margin-right: 5px;">
						<input type="button" value="Kembali" onclick="window.location.href='index.php'" style="margin-right: 22%; padding: 5px;">
					</td>
				</tr>
			</table>
		</form>
		</center>
	</body>
</html>