<?php 
include_once '../endpoints/db.php';
if(isset($_POST['username']) && isset($_POST['psw'])){
$username = $_POST['username'];
$psw = $_POST['psw'];

$username = $con->real_escape_string($username);
$psw = $con->real_escape_string($psw);

$selAdmin = "SELECT * FROM admins WHERE admin_login = '$username' AND admin_psw = '$psw' ";
$startQuery = $con->query($selAdmin);

$rows = $startQuery->num_rows;

if($rows>0){
	session_start();
	$_SESSION['admin'] = 'admin';
	echo 1;
}else{
	echo 2;
}

}
 ?>
