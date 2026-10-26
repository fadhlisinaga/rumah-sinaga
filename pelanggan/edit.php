<?php

include "../koneksi.php";
include "../navbar.php";

$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE id_pelanggan='$id'");
$d = mysqli_fetch_array($data);

if(isset($_POST['update'])){

    $nama = $_POST['nama'];
    $hp = $_POST['hp'];

    mysqli_query($koneksi,
    "UPDATE pelanggan SET
    nama_pelanggan='$nama',
    no_hp='$hp'
    WHERE id_pelanggan='$id'");

    header("Location:index.php");
}

?>

<h2>Edit Pelanggan</h2>

<form method="POST">

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input
            type="text"
            name="nama"
            class="form-control"
            value="<?= $d['nama_pelanggan']; ?>"
            required>
    </div>

    <div class="mb-3">
        <label class="form-label">No HP</label>
        <input
            type="text"
            name="hp"
            class="form-control"
            value="<?= $d['no_hp']; ?>"
            required>
    </div>

    <button type="submit" name="update" class="btn btn-warning">
        Update
    </button>

    <a href="index.php" class="btn btn-secondary">
        Kembali
    </a>

</form>

<?php
include "../footer.php";
?>