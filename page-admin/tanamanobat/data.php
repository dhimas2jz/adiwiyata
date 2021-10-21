<?php include_once('../../_header.php'); ?>

	<div class="box">
		<h1>Tanaman Obat</h1>
		<hr>
		<h4>
			<small>Data Tanaman Obat</small>
		</h4>
			<div class="pull-right">
				<a href="" class="btn btn-default"><i class="glyphicon glyphicon-refresh"></i></a>
				<a href="add.php" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Tambah Tanaman Obat </a>
			</div>
		<div style="margin-bottom: 20px;">
			<form class="form-inline" action="" method="post">
				<div class="form-group">
					<input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
				</div>
			</form>
		</div>
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th><center>No</center></th>
						<th><center>Nama Pohon</center></th>
						<th><center>Nama Latin</center></th>
						<th><center>Deskripsi</center></th>
						<th><center>Manfaat</center></th>
						<th><center>Tahun Tanam</center></th>
						<th><center>Jumlah</center></th>
						<th><center>Luas</center></th>
						<th><center>QR Code</center></th>
						<th><center>Edit</center></th>
						<th><center>Delete</center></th>
					</tr>
				</thead>
				<tbody>
				<?php
				$batas = 5;
				$hal = @$_GET['hal'];
				if(empty($hal)) {
					$posisi = 0;
					$hal = 1;
				} else {
					$posisi = ($hal - 1) * $batas;
				}
				$no = 1;
				if($_SERVER['REQUEST_METHOD'] == "POST") {
					$pencarian = trim(mysqli_real_escape_string($con, $_POST['pencarian']));
					if($pencarian != '') {
						$sql = "SELECT * FROM tb_tanamanobat WHERE nama_pohon LIKE '%$pencarian%'";
						$query = $sql;
						$queryJml = $sql;
					} else {
						$query = "SELECT * FROM tb_tanamanobat LIMIT $posisi, $batas";
						$queryJml = "SELECT * FROM tb_tanamanobat";
						$no = $posisi + 1;
					}
				} else {
					$query = "SELECT * FROM tb_tanamanobat LIMIT $posisi, $batas";
					$queryJml = "SELECT * FROM tb_tanamanobat";
					$no = $posisi + 1;
				}
				
				$sql_tanamanobat = mysqli_query($con, $query) or die (mysqli_error($con));
				if(mysqli_num_rows($sql_tanamanobat) > 0) {
					while($data = mysqli_fetch_array($sql_tanamanobat)) { ?>
						<tr>
							<td><?=$no++?></td>
							<td><?=$data['nama_pohon']?></td>
							<td><?=$data['nama_latin']?></td>
							<td><?=$data['deskripsi']?></td>
							<td><?=$data['manfaat']?></td>
							<td><?=$data['tahun_tanam']?></td>
							<td><?=$data['jumlah']?></td>
							<td><?=$data['luas']?></td>
							<td class="text-center">
								<a href="qr.php?id=<?=$data['id_tanamanobat']?>" class="btn btn-success"><i class="	glyphicon glyphicon-qrcode"></i></a>
							<td class="text-center">
								<a href="edit.php?id=<?=$data['id_tanamanobat']?>" class="btn btn-warning"><i class="	glyphicon glyphicon-edit"></i></a>
							<td class="text-center">
								<a href="delete.php?id=<?=$data['id_tanamanobat']?>" onclick="return confirm('Apakah anda yakin akan menghapus data?')" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>

						</tr>
					<?php
					}
				} else {
					echo "<tr><td colspan=\"12\" align=\"center\">Data tidak ditemukan</td></tr>";
				}
				?>
				</tbody>
			</table>
		</div>
		<?php
		//if(isset($_POST['pencarian']))
		if(isset($_POST['pencarian'])) { ?>
			<div style="float:left;">
				<?php
				$jml = mysqli_num_rows(mysqli_query($con, $queryJml));
				echo "Data Hasil Pencarian : <b>$jml</b>";
		} else {
			echo "<div style=\"float:left;\">";
			$jml = mysqli_num_rows(mysqli_query($con, $queryJml));
			echo "Jumlah Data : <b>$jml</b>";
			echo "</div>";
		}
		?>
			</div>
			<div style="float:right;">
				<ul class="pagination pagination-sm" style="margin:0">
					<?php
					$jml_hal = ceil($jml / $batas);
					for ($i=1; $i <= $jml_hal; $i++) { 
						if($i != $hal) {
							echo "<li><a href=\"?hal=$i\">$i</a></li>";	
						} else {
							echo "<li class=\"active\"><a>$i</a></li>";
						}
					}
					?>
				</ul>
			</div>
	</div>

<?php include_once('../../_footer.php'); ?>