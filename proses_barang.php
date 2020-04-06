
<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['typecars'],$_POST['duration'],$_POST['price'],$_POST['tot_price']);
	header('location:tampil_data.php');
}

elseif($action=="update")
{
	$koneksi->update_data($_POST['typecars'],$_POST['duration'],$_POST['price'],$_POST['tot_price'],$_POST['id']);
	header('location:tampil_data.php');
}

elseif($action=="delete")
{
	$id = $_GET['id'];
	$koneksi->delete_data($id);
	header('location:tampil_data.php');
}
?>
