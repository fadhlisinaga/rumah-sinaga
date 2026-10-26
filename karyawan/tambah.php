<?php
include "../koneksi.php";
include "../navbar.php";

if(isset($_POST['simpan'])){

    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];

    mysqli_query($koneksi,
    "INSERT INTO karyawan(nama_karyawan,jabatan)
    VALUES('$nama','$jabatan')");

    header("Location:index.php");
}
?>

<h2>Tambah Karyawan</h2>

<form method="POST">

<div class="mb-3">
<label>Nama Karyawan</label>
<input type="text" name="nama" class="form-control" required>
</div>

<div class="mb-3">
<label>Jabatan</label>

<select name="jabatan" class="form-control">
    <option>Kasir</option>
    <option>Pelayan</option>
    <option>Supervisor</option>
</select>

</div>

<button class="btn btn-success" name="simpan">
Simpan
</button>

<a href="index.php" class="btn btn-secondary">
Kembali
</a>

</form>

<?php
include "../footer.php";
?>