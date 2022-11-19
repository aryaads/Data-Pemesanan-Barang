<?php
include ('koneksi.php');

    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga_barang = $_POST['harga_barang'];
    $stok_barang = $_POST['stok_barang'];

    $input = "INSERT INTO tbl_barang";
    $query = mysqli_query($db, "INSERT INTO tbl_barang(id_barang, nama_barang, harga_barang, stok_barang) values ('$id_barang','$nama_barang','$harga_barang','$stok_barang')");

if($query){
    echo '<br><br>Data berhasil disimpan. Klik <a href="input.php">di sini</a>';
}else {
    echo 'Data gagal diinput. Silahkan coba lagi input <a href="input.php">';
}

?>