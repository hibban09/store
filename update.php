<?php

include "koneksi.php";
$idbarang=$_POST['idbarang'];
$kodebarang=$_POST['kodebarang'];
$nmbarang= $_POST['nmbarang'];
$nmmerek=$_POST['nmmerek'];
$nomorrak=$_POST['nomorrak'];
$jumlah=$_POST['jumlah'];
mysqli_query($conn,"UPDATE gudang set idbarang='$idbarang',kodebarang='$kodebarang', nmbarang='$nmbarang'
, nmmerek='$nmmerek',nomorrak='$nomorrak',jumlah='$jumlah'  WHERE idbarang='$idbarang'");
header('Location: menampilkan.php');


?>