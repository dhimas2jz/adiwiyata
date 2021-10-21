<?php include_once('../../_header.php'); ?>

	<?php
			$id = @$_GET['id'];
			$sql_tanamankeras = mysqli_query($con, "SELECT * FROM tb_tanamankeras WHERE id_tanamankeras = '$id'") or die (mysqli_error($con));
			$data = mysqli_fetch_array($sql_tanamankeras);
			?>

	<div class="box">
		<h1>QR Code <?=$data['nama_pohon']?></h1>
		<hr>
		<h4>
			<small>Jenis Tanaman Keras</small>
		</h4>
		<div style="margin-bottom: 20px;">

<center>
	<div>
		<img src="https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl=http://localhost/adiwiyata/page-user/tanamankeras/lihat.php?id=<?= $data['id_tanamankeras']; ?>&choe=UTF-8">
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