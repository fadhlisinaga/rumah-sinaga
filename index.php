<?php
include "config.php";
include "koneksi.php";
include "navbar.php";

date_default_timezone_set("Asia/Jakarta");

$pelanggan = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pelanggan"));
$menu = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM menu"));
$karyawan = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM karyawan"));
$pesanan = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pesanan"));
$detail = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM detail_pesanan"));
?>

<div class="text-end mb-3">
    <strong><?= date("d F Y"); ?></strong><br>
    <small><?= date("H:is"); ?> WIB</small>
</div>

<div class="alert alert-primary shadow-sm">
    <h3 class="mb-2">🍽 Selamat Datang, Admin</h3>
    <p class="mb-0">
        Sistem Informasi Rumah Makan digunakan untuk mengelola data pelanggan,
        menu, karyawan, pesanan, dan detail pesanan secara mudah dan terintegrasi.
    </p>
</div>

<h2 class="text-center fw-bold mt-4">
    Dashboard Sistem Informasi Rumah Makan
</h2>

<p class="text-center text-muted mb-4">
    Kelola seluruh data rumah makan melalui dashboard berikut.
</p>

<div class="row">

    <div class="col-md-4 mb-4">
        <div class="card border-0 shadow bg-primary text-white">
            <div class="card-body text-center">
                <h1>👥</h1>
                <h5>Total Pelanggan</h5>
                <h2><?= $pelanggan; ?></h2>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card border-0 shadow bg-success text-white">
            <div class="card-body text-center">
                <h1>🍽</h1>
                <h5>Total Menu</h5>
                <h2><?= $menu; ?></h2>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card border-0 shadow bg-warning">
            <div class="card-body text-center">
                <h1>👨‍🍳</h1>
                <h5>Total Karyawan</h5>
                <h2><?= $karyawan; ?></h2>
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-4">
        <div class="card border-0 shadow bg-info text-white">
            <div class="card-body text-center">
                <h1>📋</h1>
                <h5>Total Pesanan</h5>
                <h2><?= $pesanan; ?></h2>
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-4">
        <div class="card border-0 shadow bg-danger text-white">
            <div class="card-body text-center">
                <h1>🛒</h1>
                <h5>Total Detail Pesanan</h5>
                <h2><?= $detail; ?></h2>
            </div>
        </div>
    </div>

</div>

<hr>

<h3 class="text-center mb-4">
    Menu Cepat
</h3>

<div class="row">

    <div class="col-md-4 mb-3">
        <a href="pelanggan/" class="btn btn-outline-primary w-100 p-3">
            👥<br>
            Kelola Pelanggan
        </a>
    </div>

    <div class="col-md-4 mb-3">
        <a href="menu/" class="btn btn-outline-success w-100 p-3">
            🍽<br>
            Kelola Menu
        </a>
    </div>

    <div class="col-md-4 mb-3">
        <a href="karyawan/" class="btn btn-outline-warning w-100 p-3">
            👨‍🍳<br>
            Kelola Karyawan
        </a>
    </div>

    <div class="col-md-6 mb-3">
        <a href="pesanan/" class="btn btn-outline-info w-100 p-3">
            📋<br>
            Kelola Pesanan
        </a>
    </div>

    <div class="col-md-6 mb-3">
        <a href="detail_pesanan/" class="btn btn-outline-danger w-100 p-3">
            🛒<br>
            Kelola Detail Pesanan
        </a>
    </div>

</div>

<hr>

<div class="card shadow-sm">
    <div class="card-body">
        <h5>Informasi Sistem</h5>
        <table class="table table-bordered mt-3">
            <tr>
                <th width="30%">Nama Aplikasi</th>
                <td>Sistem Informasi Rumah Makan</td>
            </tr>
            <tr>
                <th>Database</th>
                <td>db_rumah_makan</td>
            </tr>
            <tr>
                <th>Pengembang</th>
                <td>M. Raafi Fadhli Sinaga</td>
            </tr>
            <tr>
                <th>NIM</th>
                <td>701250156</td>
            </tr>
        </table>
    </div>
</div>

<div class="text-center mt-5 mb-3 text-muted">
    <small>
        © 2026 Sistem Informasi Rumah Makan<br>
        Universitas Islam Negeri Sultan Thaha Saifuddin Jambi
    </small>
</div>

<?php
include "footer.php";
?>