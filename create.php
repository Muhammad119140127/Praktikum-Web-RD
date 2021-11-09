<?php
include "koneksi.php";

$nama=$_POST["Nama"];
$nim=$_POST["NIM"];
$prodi=$_POST["Prodi"];
$angkatan=$_POST["Angkatan"];

$sql="insert into mhs (nama,nim,prodi,angkatan) values ('$nama','$nim','$prodi','$angkatan')";

$hasil=mysqli_query($kon,$sql);

?>