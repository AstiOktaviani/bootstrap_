<?php 
include 'koneksi.php';

$nis =$_GET['nis'];
$sql =mysqli_query($konek, "Select * from siswa where nis='$nis'");
$r  =mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="DataTables/datatables.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>    
</head>
<body>
<div class="container">
    <h4>Form Update Siswa</h4><br>
    <form action="updatesiswa.php" method="post">
        <div class="form-group row">
            <label for="" class="col-md-2">nis</label>
            <div class="col-md-6">
                <input type="number"  name="nis" value="<?php echo $r ['nis']; ?>"  class="form-control" placeholder="Masukkan nis">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-md-2">nama</label>
            <div class="col-md-6">
                <input type="text"  name="nama" value="<?php echo $r ['nama']; ?>" class="form-control" placeholder="Masukkan nama">
            </div>
        </div>  
        <div class="form-group row">
            <label for="" class="col-md-2">jenis_kelamin</label>
            <div class="col-md-6">
                <input type="option"  name="jenis_kelamin" value="<?php echo $r ['jenis_kelamin']; ?>" class="form-control" placeholder="jenis_kelamin">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-md-2">tempat_lahir</label>
            <div class="col-md-6">
                <input type="text"  name="tempat_lahir" value="<?php echo $r ['tempat_lahir']; ?>" class="form-control"
                placeholder="Masukkan tempat_lahir">
            </div>
        </div>
         <div class="form-group row">
            <label for="" class="col-md-2">tanggal_lahir</label>
            <div class="col-md-6">
                <input type="date"  name="tanggal_lahir" value="<?php echo $r ['tanggal_lahir']; ?>" class="form-control" placeholder="Masukkan tanggal_lahir">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-md-2">alamat</label>
            <div class="col-md-6">
                <input type="text"  name="alamat" value="<?php echo $r ['alamat']; ?>" class="form-control" placeholder="Masukkan alamat">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-md-2"></label>
            <div class="col-md-6">
                <button  type="submit" class="btn btn-outline-primary">Update</button>
                <a href="updatesiswa.php" class="btn btn-outline-danger">Cancel</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>