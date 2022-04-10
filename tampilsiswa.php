<?php include 'header.php';?>
<nav class="navbar navbar-expand-md bg-info navbar-dark">
	<a href="index.php" class="navbar-brand text-dark"><i class="fas fa-home"> Data Siswa</i></a>
	<ul class="navbar-nav">
	    <li class="nav-item">
			<a href="index.php" class="nav-link text-dark"></a>
		</li>            
</nav>
<div class="container text-center mt-3">
	<a href="formsiswa.php"><button class="btn btn-success">TAMBAH DATA</button></a>
		<a href="cetaksiswa.php"><button class="btn btn-dark">CETAK</button></a>
		<p>Data Siswa</p>
</div>
<div class="container mt-5">
	<table id="example"  class="table table-hover table-striped table-bordered text-dark">
		<thead>
			<tr>
				<th>No</th>
				<th>NIS</th>
				<th>NAMA</th>
				<th>JENIS KELAMIN</th>
				<th>TEMPAT LAHIR</th>
				<th>TANGGAL LAHIR</th>
				<th>ALAMAT</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no=1;
			$sql=mysqli_query($konek, "select * from siswa");
			while ($a=mysqli_fetch_array($sql)) {
			 ?>
			 <tr>
			 	<td><?php echo $no++;?></td>	
			 	<td><?php echo $a['nis'];?></td>
			 	<td><?php echo $a['nama'];?></td>
			 	<td><?php echo $a['jenis_kelamin'];?></td>
			 	<td><?php echo $a['tempat_lahir'];?></td>
			 	<td><?php echo $a['tanggal_lahir'];?></td>
			 	<td><?php echo $a['alamat'];?></td>
			 	<td>
			 		<a href="editsiswa.php?nis=<?php echo $a['nis']; ?>">
			 			<button class="btn btn-outline-info"><i class="fas fa-pen"></i>EDIT</button>
			 		</a>
			 		<a href="deletesiswa.php?nis=<?php echo $a['nis']; ?>">
			 			<button class="btn btn-outline-danger"><i class="fas fa-trash"></i>DELETE</button>
			 		</a>
			 	</td>
			 </tr>
			 <?php 
			 }
			  ?>
		</tbody>
	</table>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php 
include 'footer.php';
 ?>