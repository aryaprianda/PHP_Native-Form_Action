<!--
  MUHAMMAD ARYA PRIANDA
  18710068
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Form Action</h1>
        <hr />
        <form action="aksi.php" method="POST">
            <label> Nama Mahasiswa </label>
            <input type="text" class="form-control" name="nama" placeholder="Masukan nama">
            <br>
            <label> NPM Mahasiswa </label>
            <input type="text" class="form-control" name="npm" placeholder="Masukan NPM">
            <br>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
<script src="js/bootstrap.js"></script>

</html>