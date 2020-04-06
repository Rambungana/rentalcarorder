
<?php 	
include('koneksi.php');
$db = new database();
$data_barang = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Shopping Cart</title>
	<meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<table id="table" border="1">
		<tr>
			<th>No</th>
			<th>Years of Cars</th>
			<th>Duration</th>
			<th>Price (Rp.)</th>
			<th>&nbsp</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_barang as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['typecars']; ?></td>
				<td><?php echo $row['duration']; ?></td>
				<td><?php echo $row['price']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $row['id']; ?>">Update</a>
					
					<a href="proses_barang.php?action=delete&id=<?php echo $row['id']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	<section class="footer_banner" id="contact">
    
	    <p class="hero_header">Click the main page to back to main page :</p>
	    <div class="button" onclick="window.location.href='/index.php'">MAIN PAGE</div>
       
  </section>
</body>
</html>

 