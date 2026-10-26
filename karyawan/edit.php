<?php

include "../koneksi.php";
include "../navbar.php";

$id = $_GET['id'];

$data = mysqli_query($koneksi,
"SELECT * FROM karyawan WHERE id_karyawan='$id'");

$d = mysqli_fetch_array($data);

if(isset($_POST['update'])){

$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];

mysqli_query($koneksi,
"UPDATE karyawan SET

nama_karyawan='$nama',
jabatan='$jabatan'

WHERE id_karyawan='$id'");

header("Location:index.php");

}

?>

<h2>Edit Karyawan</h2>

<form method="POST">

<div class="mb-3">

<label>Nama Karyawan</label>

<input
type="text"
name="nama"
class="form-control"
value="<?= $d['nama_karyawan']; ?>">

</div>

<div class="mb-3">

<label>Jabatan</label>

<select name="jabatan" class="form-control">

<option <?= ($d['jabatan']=="Kasir")?"selected":""; ?>>
Kasir
</option>

<option <?= ($d['jabatan']=="Pelayan")?"selected":""; ?>>
Pelayan
</option>

<option <?= ($d['jabatan']=="Supervisor")?"selected":""; ?>>
Supervisor
</option>

</select>

</div>

<button class="btn btn-warning" name="update">
Update
</button>

<a href="index.php" class="btn btn-secondary">
Kembali
</a>

</form>

<?php
include "../footer.php";
?>