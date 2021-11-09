<?php
include "koneksi.php";

$id = $_POST['deleteData'];

$sql = "delete from mhs where nim='$id'";
$hasil=mysqli_query($kon,$sql);
?>