<?php 	
include('koneksi.php');
$db = new database();
$data_barang = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <title>Rental Car</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

  <h1>RENTAL CAR</h1>

 

	<h3>Please choose available cars </h3>

<form method="post" action="proses_barang.php?action=add">
	
 	<fieldset>
 		  <div class="gallery">
	      
	      <img src="img/car2005.jpg" alt="Car 1" width="600" height="400">
	      
	      <div class="desc">Car 1</div>
	      <div class="desc"> 2005</div>
	      <input type="radio" name="typecars" value=2005 id="c1" onclick="cartype();"/>
	      </div>

	      <div class="gallery">
	      
	      <img src="img/car2010.jpg" alt="Car 2" width="600" height="400">
	      
	      <div class="desc">Car 2</div>
	      <div class="desc"> 2010</div>
	      <input type="radio" name="typecars" value=2010 id="c2" onclick="cartype();"/>
	      </div>

  
 
	      <div class="gallery">
	      
	      <img src="img/car2015.jpg" alt="Car 3" width="600" height="400">
	     
	      <div class="desc">Car 3</div>
	      <div class="desc">2015</div>
	       <input type="radio" name="typecars" value=2015 id="c3" onclick="cartype();"/>

	      </div>
   
  
 
  
	      <div class="gallery">
	      
	      <img src="img/car2020.jpg" alt="Car 4" width="600" height="400">
	      
	      <div class="desc">Car 4</div>
	      <div class="desc"> 2020</div>
	       <input type="radio" name="typecars" value=2020 id="c4" onclick="cartype();"/>
            
      	  </div>
  
	</fieldset>
	<table id="dataorder">
	
	<tr>
		<td>Duration (days)</td>
		<td>:</td>
		<td><input type="number" id="duration" name="duration"/></td>
	</tr>
	<tr>
		<td>Price Rp.</td>
		<td>:</td>
		<td><input type="number" id="price" name="price"/></td>
	</tr>
	
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Add shopping cart" /></td>
		 
	</tr>

	</table>
</form>
	<table id="table" border="1">
		<tr>
			<th>No</th>
			<th>Years of Cars</th>
			<th>Duration (days)</th>
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
	
	
	  <span id="val"></span>
	

	<script src="js/totalprice.js">
	</script>
  
 </body>




</html>