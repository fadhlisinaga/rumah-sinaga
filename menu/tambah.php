<?php
include "../koneksi.php";
include "../navbar.php";

if(isset($_POST['simpan'])){

    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    mysqli_query($koneksi,
    "INSERT INTO menu(nama_menu,harga)
    VALUES('$nama','$harga')");

    header("Location:index.php");
}
?>

<h2>Tambah Menu</h2>

<form method="POST">

<div class="mb-3">

<label>Nama Menu</label>

<input
type="text"
name="nama"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Harga</label>

<input
type="number"
name="harga"
class="form-control"
required>

</div>

<button
class="btn btn-success"
name="simpan">

Simpan

</button>

<a href="index.php"
class="btn btn-secondary">

Kembali

</a>

</form>

<?php
include "../footer.php";
?>