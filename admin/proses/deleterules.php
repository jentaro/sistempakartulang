<?php
include '../koneksi.php';
// menyimpan data id kedalam variabel
$kode   = $_GET['kode'];
// query SQL untuk insert data
$query=("DELETE from rules where kode='$kode'");
// print_r($query);
$hasil = mysqli_query($koneksi, $query);
// print_r($hasil);
// mengalihkan ke halaman index.php
header("location:../rules.php?pesan=hapus");
?>