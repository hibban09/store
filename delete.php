<?php
include "koneksi.php";
$idbarang=$_GET["idbarang"];

mysqli_query($conn,"DELETE FROM gudang where idbarang='$idbarang'");

header('Location: menampilkan.php');

?>