<?php
include "../config.php";
include "../koneksi.php";
include "../navbar.php";

$data = mysqli_query($koneksi, "SELECT * FROM menu");
?>

<h2>Data Menu</h2>

<a href="tambah.php" class="btn btn-primary mb-3">
Tambah Menu
</a>

<table class="table table-bordered table-striped">

<tr>

<th>No</th>
<th>Nama Menu</th>
<th>Harga</th>
<th>Aksi</th>

</tr>

<?php

$no = 1;

while($d = mysqli_fetch_array($data)){

?>

<tr>

<td><?= $no++; ?></td>

<td><?= $d['nama_menu']; ?></td>

<td>Rp <?= number_format($d['harga']); ?></td>

<td>

<a href="edit.php?id=<?= $d['id_menu']; ?>" class="btn btn-warning btn-sm">
Edit
</a>

<a href="hapus.php?id=<?= $d['id_menu']; ?>" class="btn btn-danger btn-sm">
Hapus
</a>

</td>

</tr>

<?php } ?>

</table>

<?php
include "../footer.php";
?>