<?php

include "../koneksi.php";

if(isset($_GET['id'])){

    $id = $_GET['id'];

    mysqli_query($koneksi, "DELETE FROM pelanggan WHERE id_pelanggan='$id'");

}

header("Location:index.php");

?>