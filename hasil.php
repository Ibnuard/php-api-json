<?php
include'config.php';
$id = ''; 
if( isset( $_GET['id'])) {
    $id = $_GET['id']; 
} 
$cek = mysqli_query($connection,"select * from user where id='$id'");
// Evaluates as true because $var is set
if (!empty($id))
{
	$query = mysqli_query($connection,"select * from user where id='$id'");
}else
{
	$query = mysqli_query($connection,"select * from user");
};
$msg = '';
$code = '';
//untuk menjalankan perinta sql
if (mysqli_num_rows($cek) > 0) {
$code = 200;
$msg = "Show user data success";
}else{
	$code = 204;
	$msg = "User data not found";	
}
	# buat array
	$responsistem = array();
	$responsistem["success"] = true;
	$responsistem["data"] = array();
	$responsistem["message"] = $msg;
	$responsistem["code"] = $code;

			while ($row = mysqli_fetch_assoc($query)) {
				# kerangka format penampilan data json
				$data['id'] = $row["id"];
				$data['username'] = $row["username"];
				$data['password'] = $row["password"];
				array_push($responsistem["data"], $data);
			}
	echo json_encode($responsistem);

?>