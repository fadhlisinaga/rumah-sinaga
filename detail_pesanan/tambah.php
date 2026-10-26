<?php

include "../koneksi.php";
include "../navbar.php";

if(isset($_POST['simpan'])){

mysqli_query($koneksi,"
INSERT INTO detail_pesanan
(id_pesanan,id_menu,jumlah)

VALUES

('$_POST[pesanan]',
'$_POST[menu]',
'$_POST[jumlah]')
");

header("Location:index.php");

}

$pesanan=mysqli_query($koneksi,"SELECT * FROM pesanan");
$menu=mysqli_query($koneksi,"SELECT * FROM menu");

?>

<h2>Tambah Detail Pesanan</h2>

<form method="POST">

<div class="mb-3">

<label>Pesanan</label>

<select name="pesanan" class="form-control">

<?php while($p=mysqli_fetch_array($pesanan)){ ?>

<option value="<?= $p['id_pesanan']; ?>">

Pesanan <?= $p['id_pesanan']; ?>

</option>

<?php } ?>

</select>

</div>

<div class="mb-3">

<label>Menu</label>

<select name="menu" class="form-control">

<?php while($m=mysqli_fetch_array($menu)){ ?>

<option value="<?= $m['id_menu']; ?>">

<?= $m['nama_menu']; ?>

</option>

<?php } ?>

</select>

</div>

<div class="mb-3">

<label>Jumlah</label>

<input
type="number"
name="jumlah"
class="form-control">

</div>

<button
class="btn btn-success"
name="simpan">

Simpan

</button>

<a
href="index.php"
class="btn btn-secondary">

Kembali

</a>

</form>

<?php include "../footer.php"; ?>