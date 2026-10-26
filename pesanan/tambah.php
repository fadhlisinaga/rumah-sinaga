<?php
include "../koneksi.php";
include "../navbar.php";

if(isset($_POST['simpan'])){

    mysqli_query($koneksi,"INSERT INTO pesanan
    (id_pelanggan,id_karyawan,tanggal_pesanan)
    VALUES
    ('$_POST[pelanggan]',
     '$_POST[karyawan]',
     '$_POST[tanggal]')");

    header("Location:index.php");
}

$pelanggan=mysqli_query($koneksi,"SELECT * FROM pelanggan");
$karyawan=mysqli_query($koneksi,"SELECT * FROM karyawan");
?>

<h2>Tambah Pesanan</h2>

<form method="POST">

<div class="mb-3">

<label>Pelanggan</label>

<select name="pelanggan" class="form-control">

<?php while($p=mysqli_fetch_array($pelanggan)){ ?>

<option value="<?= $p['id_pelanggan']; ?>">

<?= $p['nama_pelanggan']; ?>

</option>

<?php } ?>

</select>

</div>

<div class="mb-3">

<label>Karyawan</label>

<select name="karyawan" class="form-control">

<?php while($k=mysqli_fetch_array($karyawan)){ ?>

<option value="<?= $k['id_karyawan']; ?>">

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
class="form-control">

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

<?php include "../footer.php"; ?>