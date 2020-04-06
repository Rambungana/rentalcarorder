
<?php 
class database{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "rentalcar";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
 
	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from tbl_order");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
 
	
function tambah_data($typecars,$duration,$price,$tot_price)
	{
		mysqli_query($this->koneksi,"insert into tbl_order values ('','$typecars','$duration','$price','$tot_price')");
	}

function get_by_id($id)
	{
		$query = mysqli_query($this->koneksi,"select * from tbl_order where id='$id'");
		return $query->fetch_array();
	}
 
	function update_data($typecars,$duration,$price,$tot_price,$id)
	{
		$query = mysqli_query($this->koneksi,"update tbl_order set typecars='$typecars',duration='$duration',price='$price',tot_price='$tot_price' where id='$id'");
	}

	function delete_data($id)
	{
		$query = mysqli_query($this->koneksi,"delete from tbl_order where id='$id'");
		
	}
}
?>

