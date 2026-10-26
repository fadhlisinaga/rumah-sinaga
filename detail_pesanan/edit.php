<?php

include "../koneksi.php";
include "../navbar.php";

$id=$_GET['id'];

$data=mysqli_query($koneksi,
"SELECT * FROM detail_pesanan WHERE id_detail='$id'");

$d=mysqli_fetch_array($data);

$pesanan=mysqli_query($koneksi,"SELECT * FROM pesanan");
$menu=mysqli_query($koneksi,"SELECT * FROM menu");

if(isset($_POST['update'])){

mysqli_query($koneksi,"
UPDATE detail_pesanan SET

id_pesanan='$_POST[pesanan]',
id_menu='$_POST[menu]',
jumlah='$_POST[jumlah]'

WHERE id_detail='$id'
");

header("Location:index.php");

}

?>

<h2>Edit Detail Pesanan</h2>

<form method="POST">

<div class="mb-3">

<label>Pesanan</label>

<select
name="pesanan"
class="form-control">

<?php while($p=mysqli_fetch_array($pesanan)){ ?>

<option
value="<?= $p['id_pesanan']; ?>"
<?= ($p['id_pesanan']==$d['id_pesanan'])?"selected":""; ?>>

Pesanan <?= $p['id_pesanan']; ?>

</option>

<?php } ?>

</select>

</div>

<div class="mb-3">

<label>Menu</label>

<select
name="menu"
class="form-control">

<?php while($m=mysqli_fetch_array($menu)){ ?>

<option
value="<?= $m['id_menu']; ?>"
<?= ($m['id_menu']==$d['id_menu'])?"selected":""; ?>>

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
class="form-control"
value="<?= $d['jumlah']; ?>">

</div>

<button
class="btn btn-warning"
name="update">

Update

</button>

<a
href="index.php"
class="btn btn-secondary">

Kembali

</a>

</form>

<?php include "../footer.php"; ?>