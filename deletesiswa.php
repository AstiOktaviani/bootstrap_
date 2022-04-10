<?php
include "koneksi.php";
// Coding Hapus
$sql="delete from siswa where nis='$_GET[nis]'";
$delete=mysqli_query($konek, $sql);

header('location:tampilsiswa.php');
?>


