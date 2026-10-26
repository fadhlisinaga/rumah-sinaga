<?php
include "../config.php";
include "../koneksi.php";
include "../navbar.php";

$data = mysqli_query($koneksi, "
SELECT
    pesanan.id_pesanan,
    pelanggan.nama_pelanggan,
    karyawan.nama_karyawan,
    pesanan.tanggal_pesanan
FROM pesanan
JOIN pelanggan ON pesanan.id_pelanggan = pelanggan.id_pelanggan
JOIN karyawan ON pesanan.id_karyawan = karyawan.id_karyawan
");
?>

<h2>Data Pesanan</h2>

<a href="tambah.php" class="btn btn-primary mb-3">
    Tambah Pesanan
</a>

<table class="table table-bordered table-striped">

<tr>
    <th>No</th>
    <th>Pelanggan</th>
    <th>Karyawan</th>
    <th>Tanggal</th>
    <th>Aksi</th>
</tr>

<?php
$no=1;

while($d=mysqli_fetch_array($data)){
?>

<tr>

<td><?= $no++; ?></td>

<td><?= $d['nama_pelanggan']; ?></td>

<td><?= $d['nama_karyawan']; ?></td>

<td><?= $d['tanggal_pesanan']; ?></td>

<td>

<a href="edit.php?id=<?= $d['id_pesanan']; ?>" class="btn btn-warning btn-sm">
Edit
</a>

<a href="hapus.php?id=<?= $d['id_pesanan']; ?>" class="btn btn-danger btn-sm">
Hapus
</a>

</td>

</tr>

<?php } ?>

</table>

<?php include "../footer.php"; ?>