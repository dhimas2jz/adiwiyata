<?php include_once('../../_header.php'); ?>

<div class="box">
	<h1>Tanaman Keras</h1>
	<hr>
	<h4>
		<small>Edit Tanaman Keras</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i> Kembali </a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php
			$id = @$_GET['id'];
			$sql_tanamanproduktif = mysqli_query($con, "SELECT * FROM tb_tanamanproduktif WHERE id_tanamanproduktif = '$id'") or die (mysqli_error($con));
			$data = mysqli_fetch_array($sql_tanamanproduktif);
			?>
			<form action="proses.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="nama pohon">Nama Pohon :</label>
					<input type="hidden" name="nama_pohon" value="<?=$data['nama_pohon']?>">
					<input type="text" name="nama_pohon" id="nama_pohon" value="<?=$data['nama_pohon']?>" class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<label for="nama latin">Nama Latin :</label>
					<input type="hidden" name="id" value="<?=$data['id_tanamanproduktif']?>">
					<input type="text" name="nama_latin" id="nama_latin" value="<?=$data['nama_latin']?>" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="deskripsi">Deskripsi :</label>
					<input type="text" name="deskripsi" value="<?=$data['deskripsi']?>" class="form-control" required>
				</div>	
				<div class="form-group">
					<label for="manfaat">Manfaat :</label>
					<input type="text" name="manfaat" value="<?=$data['manfaat']?>" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="tahun tanam">Tahun Tanam :</label>
					<textarea name="tahun_tanam" id="tahun_tanam" class="form-control" required><?=$data['tahun_tanam']?></textarea>
				</div>
				<div class="form-group">
					<label for="jumlah">Jumlah :</label>
					<textarea name="jumlah" id="jumlah" class="form-control" required><?=$data['jumlah']?></textarea>
				</div>
				<div class="form-group">
					<label for="luas">Luas :</label>
					<input type="text" name="luas" value="<?=$data['luas']?>" class="form-control" required>
				</div>
            	<div class="form-group">
					<label for="gambar">Gambar :</label>
					<input type="file" name="gambar" value="<?=$data['gambar']?>" class="form-control">
				</div>
				<div class="form-group pull-right">
					<input type="submit" name="edit" value="Simpan" class="btn btn-success">
				</div>
				</div>
			</form>
		</div>
	</div>

<?php include_once('../../_footer.php'); ?>