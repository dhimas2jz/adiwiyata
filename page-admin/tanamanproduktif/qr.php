<?php include_once('../../_header.php'); ?>

	<?php
			$id = @$_GET['id'];
			$sql_tanamanproduktif = mysqli_query($con, "SELECT * FROM tb_tanamanproduktif WHERE id_tanamanproduktif = '$id'") or die (mysqli_error($con));
			$data = mysqli_fetch_array($sql_tanamanproduktif);
			?>

	<div class="box">
		<h1>QR Code <?=$data['nama_pohon']?></h1>
		<hr>
		<h4>
			<small>Jenis Tanaman Produktif</small>
		</h4>
		<div style="margin-bottom: 20px;">

<center>
	<div>
		<img src="https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl=http://localhost/adiwiyata/page-user/tanamanproduktif/lihat.php?id=<?= $data['id_tanamanproduktif']; ?>&choe=UTF-8">
	</div>
</center>

	<!-- script>
 $(document).ready(function() {  
   $('.table').DataTable( {  
     dom: 'Bfrtip',  
     buttons: [  
       'copy', 'csv', 'excel', 'pdf', 'print'  
     ]  
   } );  
 } );  
	</script>
 -->
<?php include_once('../../_footer.php'); ?>