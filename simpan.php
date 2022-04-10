<?php
$nis		=$_POST['nis'];
$nama		=$_POST['nama'];
$kelas	    =$_POST['jenis_kelamin'];
$alamat 	=$_POST['tempat_lahir'];
$no_tlp 	=$_POST['tanggal_lahir'];
$id_spp 	=$_POST['alamat'];
include'koneksi.php';
$sql="insert into siswa SET nis='$nis', nama='$nama', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat";
$insert	=mysqli_query($konek,$sql);
header("location:tampilsiswa.php");
?>