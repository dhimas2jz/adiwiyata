<?php include_once('../../_header.php'); ?>

	<?php
			$id = @$_GET['id'];
			$sql_tanamanhias = mysqli_query($con, "SELECT * FROM tb_tanamanhias WHERE id_tanamanhias = '$id'") or die (mysqli_error($con));
			$data = mysqli_fetch_array($sql_tanamanhias);
			?>

	<div class="box">
		<h1>QR Code <?=$data['nama_pohon']?></h1>
		<hr>
		<h4>
			<small>Jenis Tanaman Hias</small>
		</h4>
		<div style="margin-bottom: 20px;">

<center>
	<div>
		<img src="https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl=http://localhost/adiwiyata/page-user/tanamanhias/lihat.php?id=<?= $data['id_tanamanhias']; ?>&choe=UTF-8">
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