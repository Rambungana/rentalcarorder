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
$id = $_GET["id"];
if( delete_data($id) > 0 ) {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = 'daftar-sipi.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('data tidak berhasil dihapus!');
			document.location.href = 'daftar-sipi.php';
		</script>
	";
}
?>