<?php

include "../koneksi.php";
include "../navbar.php";

$id = $_GET['id'];

$data = mysqli_query($koneksi,
"SELECT * FROM pesanan WHERE id_pesanan='$id'");

$d = mysqli_fetch_array($data);

$pelanggan = mysqli_query($koneksi,"SELECT * FROM pelanggan");
$karyawan = mysqli_query($koneksi,"SELECT * FROM karyawan");

if(isset($_POST['update'])){

    $id_pelanggan = $_POST['pelanggan'];
    $id_karyawan = $_POST['karyawan'];
    $tanggal = $_POST['tanggal'];

    mysqli_query($koneksi,
    "UPDATE pesanan SET

    id_pelanggan='$id_pelanggan',
    id_karyawan='$id_karyawan',
    tanggal_pesanan='$tanggal'

    WHERE id_pesanan='$id'");

    header("Location:index.php");
}

?>

<h2>Edit Pesanan</h2>

<form method="POST">

<div class="mb-3">

<label>Pelanggan</label>

<select name="pelanggan" class="form-control">

<?php
while($p = mysqli_fetch_array($pelanggan)){
?>

<option
value="<?= $p['id_pelanggan']; ?>"
<?= ($p['id_pelanggan']==$d['id_pelanggan']) ? "selected" : ""; ?>>

<?= $p['nama_pelanggan']; ?>

</option>

<?php } ?>

</select>

</div>

<div class="mb-3">

<label>Karyawan</label>

<select name="karyawan" class="form-control">

<?php
while($k = mysqli_fetch_array($karyawan)){
?>

<option
value="<?= $k['id_karyawan']; ?>"
<?= ($k['id_karyawan']==$d['id_karyawan']) ? "selected" : ""; ?>>

<?= $k['nama_karyawan']; ?>

</option>

<?php } ?>

</select>

</div>

<div class="mb-3">

<label>Tanggal</label>

<input
type="date"
name="tanggal"
class="form-control"
value="<?= $d['tanggal_pesanan']; ?>">

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