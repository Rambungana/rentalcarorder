
<?php 	
include('koneksi.php');
$db = new database();
$id = $_GET['id'];
if(! is_null($id))
{
	$data_barang = $db->get_by_id($id);
}
else
{
	header('location:tampil_data.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Update Data Order</h3>
<hr/>
<form method="post" action="proses_barang.php?action=update">
<input type="hidden" name="id" value="<?php echo $data_barang['id']; ?>"/>
<table>
	<tr>
		<td>Years of car</td>
		<td>:</td>
		<td><input type="text" name="typecars" value="<?php echo $data_barang['typecars']; ?>"/></td>
	</tr>
	<tr>
		<td>Duration (days)</td>
		<td>:</td>
		<td><input type="number" name="duration" value="<?php echo $data_barang['duration']; ?>"/></td>
	</tr>
	<tr>
		<td>Price</td>
		<td>:</td>
		<td><input type="number" name="price" value="<?php echo $data_barang['price']; ?>"/></td>
	</tr>
	
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Update"/></td>
	</tr>
</table>
</form>
</body>
</html>