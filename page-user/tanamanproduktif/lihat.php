<?php include_once('../../_headeruser.php'); ?>

<?php
			$id = @$_GET['id'];
			$sql_tanamanproduktif = mysqli_query($con, "SELECT * FROM tb_tanamanproduktif WHERE id_tanamanproduktif = '$id'") or die (mysqli_error($con));
			$data = mysqli_fetch_array($sql_tanamanproduktif);
			?>

<div class="box">
	
	<div class="pull-right">
		<img src="https://chart.googleapis.com/chart?chs=50x50&cht=qr&chl=http://localhost/adiwiyata/page-user/tanamanproduktif/lihat.php?id=<?= $data['id_tanamanproduktif']; ?>&choe=UTF-8">
	</div>

	<h1><?=$data['nama_pohon']?></h1>
	<h4>
		<small>Jenis : Tanaman Hias</small>
	</h4>

	<hr>

	<div class="row">
    	<div class="col-sm-6" >
			
			<div class="gallery">
				<center>
					<a target="_blank" href="<?=base_url("_assets/img3/{$data['gambar']}");?>">
						<img src="<?=base_url("_assets/img3/{$data['gambar']}");?>" alt="Cinque Terre" style="object-fit: cover; margin-bottom: 20px;" width="315" height="315" align="right">
					</a>
				</center>
			</div>

    	</div>
    	<div class="col-sm-6" >
    			<div class="row">
		<div class="col-lg-8 ">
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="nama pohon">Nama Pohon :</label>
					<p><?=$data['nama_pohon']?></p>
				</div>
				<div class="form-group">
					<label for="nama latin">Nama Latin :</label>
					<p><?=$data['nama_latin']?></p>
				</div>
				<div class="form-group">
					<label for="deskripsi">Deskripsi :</label>
					<p><?=$data['deskripsi']?></p>
				</div>	
				<div class="form-group">
					<label for="manfaat">Manfaat :</label>
					<p><?=$data['manfaat']?></p>
				</div>
				<div class="form-group">
					<label for="tahun tanam">Tahun Tanam :</label>
					<p><?=$data['tahun_tanam']?></p>
				</div>
				<div class="form-group">
					<label for="jumlah">Jumlah :</label>
					<p><?=$data['jumlah']?></p>
				</div>
				<div class="form-group">
					<label for="luas">Luas :</label>
					<p><?=$data['luas']?></p>
				</div>

				</div>

			</form>
		</div>
	</div>
    	</div>
  	</div>

<?php include_once('../../_footer.php'); ?>