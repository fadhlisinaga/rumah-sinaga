<?php

include "../koneksi.php";
include "../navbar.php";

$id = $_GET['id'];

$data = mysqli_query($koneksi,
"SELECT * FROM menu WHERE id_menu='$id'");

$d = mysqli_fetch_array($data);

if(isset($_POST['update'])){

$nama = $_POST['nama'];
$harga = $_POST['harga'];

mysqli_query($koneksi,
"UPDATE menu SET

nama_menu='$nama',
harga='$harga'

WHERE id_menu='$id'");

header("Location:index.php");

}

?>

<h2>Edit Menu</h2>

<form method="POST">

<div class="mb-3">

<label>Nama Menu</label>

<input
type="text"
name="nama"
class="form-control"
value="<?= $d['nama_menu']; ?>">

</div>

<div class="mb-3">

<label>Harga</label>

<input
type="number"
name="harga"
class="form-control"
value="<?= $d['harga']; ?>">

</div>

<button
class="btn btn-warning"
name="update">

Update

</button>

<a href="index.php"
class="btn btn-secondary">

Kembali

</a>

</form>

<?php
include "../footer.php";
?>