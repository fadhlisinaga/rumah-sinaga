<?php

include "../koneksi.php";

$id=$_GET['id'];

mysqli_query($koneksi,
"DELETE FROM detail_pesanan
WHERE id_detail='$id'");

header("Location:index.php");

?>