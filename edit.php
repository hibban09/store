<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, worl</title>
  </head>
  <body>

  <div class="container">
  <div class="row">
<div class="col-12">

    <h1>Edit form</h1>
</div>
</div>
<div class="row">
<div class="col-6">

<?php
include "koneksi.php";
$idbarang=$_GET['idbarang'];


$hasil=mysqli_query($conn,"SELECT * FROM gudang where idbarang='$idbarang'" );
$baris=mysqli_fetch_array($hasil);

?>
<form action="update.php" method="POST">
<input type="hidden" class="form-control" name="idbarang" value="<?php echo  $baris['idbarang'] ?>">

<div class="form-group">
<label for="fname">kode barang</label>
    <input type="number" class="form-control" name="kodebarang" value="<?php echo  $baris['kodebarang'] ?>">
  </div>
    

  <div class="form-group">
    <label for="fname">Nama barang</label>
 <input type="text" name="nmbarang" class="form-control" value="<?php echo  $baris['nmbarang'] ?>">
</div> 
<div class="form-group">
<label for="nmmerek">Nama merek</label>
  <input type="text"  class="form-control" name="nmmerek" value="<?php echo  $baris['nmmerek'] ?>"> 
  </div>
<div class="form-group">
  <label for="nomorrak">nomor rak barang</label>
  <input type="number" class="form-control" name="nomorrak"value="<?php echo  $baris['nomorrak'] ?>">
  </div>
  <div class="form-group">
  <label for="jumlah">jumlah</label>
  <input type="number" class="form-control" name="jumlah"value="<?php echo  $baris['jumlah'] ?>">
  </div>

  <div class="form-group">

<input type="submit" class="btn btn-secondary" value="submit">
&nbsp;
<input class="btn btn-danger" type="reset">
&nbsp;
<a class="btn btn-info" href="menampilkan.php">kembali</a>
  </div>
</form>
</div>
</div>
</div>
</body>
</html>