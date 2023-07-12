
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>barang</title>
  </head>
  <body>

  <div class="container">
  <div class="row">
<div class="col-12">

    <h1>daftar barang</h1>
</div>
</div>
<div class="row">
<div class="col-6">
<form action="save.php" method="POST">
<div class="form-group">
    <label for="fname">kode</label>
    <input type="number" id="kodebarang" class="form-control" name="kodebarang">
</div>
<div class="form-group">
<label for="nmbarang">Nama barang</label>
    <input type="text" class="form-control" name="nmbarang">
</div>
  
<div class="form-group">
<label for="nmmerek">Nama Merek</label>
  <input type="text" class="form-control" name="nmmerek">
  </div>
<div class="form-group">
  <label for="nomerrak">NO.rak</label>
  <input type="number" id="nomerrak" class="form-control" name="nomerrak">
  </div>
  <div class="form-group">
  <label for="jumlah barang">jumlah barang</label>
  <input type="number" id="jumlah" class="form-control" name="jumlah">
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