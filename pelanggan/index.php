<?php
include "../config.php";
include "../koneksi.php";
include "../navbar.php";

$data = mysqli_query($koneksi, "SELECT * FROM pelanggan");
?>

<h2>Data Pelanggan</h2>

<a href="tambah.php" class="btn btn-primary mb-3">
Tambah Pelanggan
</a>

<table class="table table-bordered">

<tr>

<th>No</th>
<th>Nama</th>
<th>No HP</th>
<th>Aksi</th>

</tr>

<?php

$no=1;

while($d=mysqli_fetch_array($data)){

?>

<tr>

<td><?= $no++; ?></td>

<td><?= $d['nama_pelanggan']; ?></td>

<td><?= $d['no_hp']; ?></td>

<td>

<a href="edit.php?id=<?= $d['id_pelanggan']; ?>"
class="btn btn-warning btn-sm">
Edit
</a>

<a href="hapus.php?id=<?= $d['id_pelanggan']; ?>"
class="btn btn-danger btn-sm">
Hapus
</a>

</td>

</tr>

<?php } ?>

</table>

<?php include "../footer.php"; ?>