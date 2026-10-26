<?php
include "../config.php";
include "../koneksi.php";
include "../navbar.php";

$data = mysqli_query($koneksi,"
SELECT
detail_pesanan.id_detail,
pesanan.id_pesanan,
menu.nama_menu,
detail_pesanan.jumlah

FROM detail_pesanan

JOIN pesanan
ON detail_pesanan.id_pesanan = pesanan.id_pesanan

JOIN menu
ON detail_pesanan.id_menu = menu.id_menu
");
?>

<h2>Data Detail Pesanan</h2>

<a href="tambah.php" class="btn btn-primary mb-3">
Tambah Detail Pesanan
</a>

<table class="table table-bordered table-striped">

<tr>

<th>No</th>
<th>ID Pesanan</th>
<th>Menu</th>
<th>Jumlah</th>
<th>Aksi</th>

</tr>

<?php

$no=1;

while($d=mysqli_fetch_array($data)){

?>

<tr>

<td><?= $no++; ?></td>

<td><?= $d['id_pesanan']; ?></td>

<td><?= $d['nama_menu']; ?></td>

<td><?= $d['jumlah']; ?></td>

<td>

<a href="edit.php?id=<?= $d['id_detail']; ?>"
class="btn btn-warning btn-sm">

Edit

</a>

<a href="hapus.php?id=<?= $d['id_detail']; ?>"
class="btn btn-danger btn-sm">

Hapus

</a>

</td>

</tr>

<?php } ?>

</table>

<?php include "../footer.php"; ?>