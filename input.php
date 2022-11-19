<!DOCTYPE html>
<html>
    <head>
        <title>Form Input Data Barang</title>
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
        <form action="prosesSimpan.php" method="post" name="forminput">
            Id Barang:
            <input type="text" name="id_barang"><br>
            Nama Barang:
            <input type="text" name="nama_barang"><br>
            Harga Barang:
            <input type="text" name="harga_barang"><br>
            Stok Barang:
            <input type="text" name="stok_barang"><br>
            <input type="submit" value="Simpan" name="simpan"><br>
            <input type="reset" value="Reset"><br>
        </form><br><br><br>

        <center><h2>Aplikasi CRUD Sederhana <br />
</h2></center>
<hr />
<center><b>DATA BARANG </b></center><br>
<center><table style="width:70%" class="table1">
<tr>

<th>Kode Barang</th>
<th>Nama Barang</th>
<th>Harga Barang</th>
<th>Stok Barang</th>
<th>aksi<th>
</tr>
<?php
include "koneksi.php";

$data = mysqli_query($db,"select * from tbl_barang");
while($r = mysqli_fetch_array($data)){
$id_barang = $r['id_barang'];
$nama_barang = $r['nama_barang'];
$harga_barang = $r['harga_barang'];
$stok_barang = $r['stok_barang'];
?>

<td><?php echo $id_barang; ?></td>
<td><?php echo $nama_barang; ?></td>
<td><?php echo $harga_barang; ?></td>
<td><?php echo $stok_barang; ?></td>
<td>
    <Input type="button" value="edit" style="padding: 5px;" onclick="window.location.href='edit.php?id_barang=<?php echo $r['id_barang'];?>'">
    <Input type="button" value="hapus"> 
</td>


</tr>
<?php
}
?>
</table></center>
    </body>
</html>