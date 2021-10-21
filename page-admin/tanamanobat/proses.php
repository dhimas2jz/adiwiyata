<?php
require_once "../../_config/config.php";
require "../../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if(isset($_POST['add'])) {
	$uuid = Uuid::uuid4()->toString();
	$nama_pohon = trim(mysqli_real_escape_string($con, $_POST['nama_pohon']));
	$nama_latin = trim(mysqli_real_escape_string($con, $_POST['nama_latin']));
	$deskripsi = trim(mysqli_real_escape_string($con, $_POST['deskripsi']));
	$manfaat = trim(mysqli_real_escape_string($con, $_POST['manfaat']));
	$tahun_tanam = trim(mysqli_real_escape_string($con, $_POST['tahun_tanam']));
	$jumlah = trim(mysqli_real_escape_string($con, $_POST['jumlah']));
	$luas = trim(mysqli_real_escape_string($con, $_POST['luas']));
	$sql_cek_identitas = mysqli_query($con, "SELECT * FROM tb_tanamanobat WHERE nama_pohon = '$nama_pohon' ") or die (mysqli_error($con));
	if(mysqli_num_rows($sql_cek_identitas) > 0) {
		echo "<script>alert('Pohon ini sudah pernah di pakai!'); window.location='add.php';</script>";
	} else {
		$tmp_gambar = $_FILES['gambar']['tmp_name'];
		$gambar = $_FILES['gambar']['name'];
		if ($gambar != '') {
			if (move_uploaded_file($tmp_gambar, "../../_assets/img3/{$gambar}")) {
				echo "<script>	
				window.location='data.php';
				</script>";
			}
		}
	}
			mysqli_query($con, "INSERT INTO tb_tanamanobat (id_tanamanobat, nama_pohon, nama_latin, deskripsi, manfaat, tahun_tanam, jumlah, luas, gambar) VALUES ('$uuid', '$nama_pohon', '$nama_latin', '$deskripsi', '$manfaat', '$tahun_tanam', '$jumlah', '$luas', '$gambar')") or die (mysqli_error($con));
		echo "<script>window.location='data.php';</script>";
} else if(isset($_POST['edit'])) {
	$id = $_POST['id'];
	$nama_pohon = trim(mysqli_real_escape_string($con, $_POST['nama_pohon']));
	$nama_latin = trim(mysqli_real_escape_string($con, $_POST['nama_latin']));
	$deskripsi = trim(mysqli_real_escape_string($con, $_POST['deskripsi']));
	$manfaat = trim(mysqli_real_escape_string($con, $_POST['manfaat']));
	$tahun_tanam = trim(mysqli_real_escape_string($con, $_POST['tahun_tanam']));
	$jumlah = trim(mysqli_real_escape_string($con, $_POST['jumlah']));
	$luas = trim(mysqli_real_escape_string($con, $_POST['luas']));
	$tmp_gambar = $_FILES['gambar']['tmp_name'];
		$gambar = $_FILES['gambar']['name'];
		if ($gambar != '') {
			if (move_uploaded_file($tmp_gambar, "../../_assets/img3/{$gambar}")) {
				mysqli_query($con, "UPDATE tb_tanamanobat SET gambar='$gambar' WHERE id_tanamanobat = '$_POST[id_tanamanobat]'") or die (mysqli_error($con));
				echo "<script>	
				window.location='data.php';
				</script>";
			}
		}
}
	mysqli_query($con, "UPDATE tb_tanamanobat SET nama_pohon = '$nama_pohon', nama_latin = '$nama_latin', deskripsi = '$deskripsi', manfaat = '$manfaat', tahun_tanam = '$tahun_tanam', jumlah = '$jumlah', luas = '$luas' WHERE id_tanamanobat = '$id'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
?>