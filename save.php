<?php
include "koneksi.php";
$kodebarang=$_POST['kodebarang'];
$nmbarang= $_POST['nmbarang'];
$nmmerek=$_POST['nmmerek'];
$nomorrak=$_POST['nomorrak'];
$jumlah=$_POST['jumlah'];



$hasil = mysqli_query($conn,"INSERT INTO gudang (kodebarang,nmbarang,nmmerek,nomorrak,jumlah)
VALUES('$kodebarang','$nmbarang','$nmmerek','$nomorrak','$jumlah')");

if($hasil == false){
    echo "gagal";
}

header('Location: menampilkan.php');
?>