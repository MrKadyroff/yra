<?php 
include_once 'db.php';


// login form validation
// check from db if user is registered login
if(isset($_POST['username']) && isset($_POST['user_psw']) && isset($_POST['login'])){
	session_start();
$username = $_POST['username'];
$user_psw = $_POST['user_psw'];

// data to string
$username = $con->real_escape_string($username);
$user_psw = $con->real_escape_string($user_psw);

// compare users data
$getUser = "SELECT * FROM users WHERE username = '$username' AND psw = '$user_psw' ";
$queryUser = $con->query($getUser);

// if thoose user is have start session

// quantity rows
$rows = $queryUser->num_rows;

if($rows>=1){
	while($row = $queryUser->fetch_assoc()){
		$u_id = $row['user_id'];
		$u_name = $row['u_name'];
		$money = $row['user_money'];
	}
	// session_start();
	$_SESSION['u_id'] = $u_id;
	$_SESSION['money'] = $money;
	$_SESSION['user'] = $u_name;

	// ok
	echo 1;
}else{

	// err
	echo 2; }

}



// Registration form 
if(isset($_POST['username']) && isset($_POST['user_psw']) && isset($_POST['register'])){

// get all data from form
$u_name = $_POST['u_name'];
$u_surname = $_POST['u_surname'];
$username = $_POST['username'];
$user_psw = $_POST['user_psw'];


// data to string
$username = $con->real_escape_string($username);
$u_name = $con->real_escape_string($u_name);
$u_surname = $con->real_escape_string($u_surname);
$user_psw = $con->real_escape_string($user_psw);

// compare users from db / if username is taken echo err
$getUser = "SELECT * FROM users WHERE username = '$username'";
$startQuery = $con->query($getUser);
$rows = $startQuery->num_rows;

$num = $startQuery->num_rows;
if($rows>=1){
	
	// username is taken
	echo 2;
}else{

	// if username don't taken then add to db
	$insQuery = "INSERT INTO users (`u_name`, `u_surname`, `username`, `psw`, `user_money`) VALUES ('$u_name' , '$u_surname' , '$username' , '$user_psw' , 0) ";
	$startIns = $con->query($insQuery);

	if($startIns){
		$getUser = "SELECT * FROM users WHERE username = '$username' AND psw = '$user_psw' ";
		$queryUser = $con->query($getUser);

	while($row = $queryUser->fetch_assoc()){
		$u_id = $row['user_id'];
		$u_name = $row['u_name'];
		$money = $row['user_money'];
	}
	session_start();
	$_SESSION['u_id'] = $u_id;
	$_SESSION['money'] = $money;
	$_SESSION['user'] = $u_name;

	

	// ok
	echo 1;

	}else{
		// err
		echo 0;
	}


	
}

}
 ?>