<?php include'header.php'; ?>
<div class="container">
<h5 class="bold">Tambah Data Siswa</h5>
	<form action="simpan.php" method="post">
		<div class="form-group row">
			<label for="" class="col-md-2">
				Nis
			</label>
			<div class="col-md-6"><input type="int" class="form-control" placeholder="Masukkan Nis Anda" id="nis" name="nis"></div>
		</div>
		<div class="form-group row">
			<label for="" class="col-md-2">
				nama
			</label>
			<div class="col-md-6"><input type="varchar" class="form-control" placeholder="Masukkan nama Anda" id="nama" name="nama"></div>
		</div>

		<div class="form-group row">
			<label for="" class="col-md-2">
				jenis_kelamin
			</label>
			<div class="col-md-6"><input type="text" class="form-control" placeholder="Masukkan jenis_kelamin Anda" id="jenis_kelamin" name="jenis_kelamin"></div>
		</div>
		<div class="form-group row">
			<label for="" class="col-md-2">
				tempat lahir
			</label>
			<div class="col-md-6"><input type="varchar" class="form-control" placeholder="Masukkan tempat_lahir Anda" id="tempat_lahir" name="tempat_lahir"></div>
		</div>
		<div class="form-group row">
			<label for="" class="col-md-2">
				Tanggal lahir
			</label>
			<div class="col-md-6"><input type="date" class="form-control" placeholder="Masukkan tanggal_lahir Anda" id="tanggal_lahir" name="tanggal_lahir"></div>
		</div>
		<div class="form-group row">
			<label for="" class="col-md-2">
				Alamat
			</label>
			<div class="col-md-6"><input type="int" class="form-control" placeholder="Masukkan alamat Anda" id="alamat" name="alamat"></div>
		</div>
		<button type="submit" class="btn btn-outline-primary">Save</button>
		<button type="reset" class="btn btn-outline-danger">Cancel</button>
	</form>
</div>
<?php include'footer.php'; ?>