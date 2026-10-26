<?php
include "../koneksi.php";
include "../navbar.php";

if(isset($_POST['simpan'])){

    $nama = $_POST['nama'];
    $hp = $_POST['hp'];

    mysqli_query($koneksi,
    "INSERT INTO pelanggan(nama_pelanggan,no_hp)
    VALUES('$nama','$hp')");

    header("Location:index.php");
}
?>

<h2>Tambah Pelanggan</h2>

<form method="POST">

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">No HP</label>
        <input type="text" name="hp" class="form-control" required>
    </div>

    <button type="submit" name="simpan" class="btn btn-success">
        Simpan
    </button>

    <a href="index.php" class="btn btn-secondary">
        Kembali
    </a>

</form>

<?php
include "../footer.php";
?>