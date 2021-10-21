<?php include_once('../../_header.php'); ?>

<div class="box">
	<h1>Tanaman Obat</h1>
	<hr>
	<h4>
		<small>Tambah Tanaman Obat</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i> Kembali </a>
		</div>
	</h4>

	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="proses.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="nama_pohon">Nama Pohon :</label>
					<input type="text" name="nama_pohon" id="nama_pohon"class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<label for="nama latin">Nama Latin :</label>
					<input type="text" name="nama_latin" id="nama_latin" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="deskripsi">Deskripsi :</label>
					<input type="text" name="deskripsi" class="form-control" required>
				</div>	
				<div class="form-group">
					<label for="manfaat">Manfaat :</label>
					<input type="text" name="manfaat" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="tahun tanam">Tahun Tanam :</label>
					<textarea name="tahun_tanam" id="tahun_tanam" class="form-control" required></textarea>
				</div>
				<div class="form-group">
					<label for="jumlah">Jumlah :</label>
					<input type="text" name="jumlah" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="luas">Luas :</label>
					<input type="luas" name="luas" class="form-control" required>
				</div>
            	<div class="form-group">
                  	<label>Gambar</label>
                  	<input type="file" name="gambar" value="" class="form-control" >
                </div>
				<div class="form-group pull-right">
					<input type="submit" name="add" value="Simpan" class="btn btn-success">
				</div>
				</div>
			</form>
		</div>
	</div>

<?php include_once('../../_footer.php'); ?>