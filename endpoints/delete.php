<?php 

include_once 'db.php';


// NEWS 
if (isset($_POST['news_id']) && isset($_POST['del'])){

	$news_id = $_POST['news_id'];
	$news_id = $con->real_escape_string($news_id);

	$delQuery = "UPDATE news SET news_deleted = '1' WHERE news_id = '$news_id' ";
	$startDel = $con->query($delQuery);

	if ($startDel){
		echo 1;
	}else{
		echo 0;
	}
}




if (isset($_POST['news_id']) && isset($_POST['active'])){

	$news_id = $_POST['news_id'];
	$news_id = $con->real_escape_string($news_id);

	$delQuery = "UPDATE news SET news_deleted = '0' WHERE news_id = '$news_id' ";
	$startDel = $con->query($delQuery);

	if ($startDel){
		echo 1;
	}else{
		echo 0;
	}
}

// NEWS END




// MEMBERS

if (isset($_POST['member_id']) && isset($_POST['del'])){

	$member_id = $_POST['member_id'];
	$member_id = $con->real_escape_string($member_id);

	$delQuery = "UPDATE command SET deleted = '1' WHERE member_id = '$member_id' ";
	$startDel = $con->query($delQuery);

	if ($startDel){
		echo 1;
	}else{
		echo 0;
	}
}




if (isset($_POST['member_id']) && isset($_POST['active'])){

	$member_id = $_POST['member_id'];
	$member_id = $con->real_escape_string($member_id);

	$delQuery = "UPDATE command SET deleted = '0' WHERE member_id = '$member_id' ";
	$startDel = $con->query($delQuery);

	if ($startDel){
		echo 1;
	}else{
		echo 0;
	}
}
// MEMBERS END




// PROJECTS



if (isset($_POST['project_id']) && isset($_POST['del'])){

	$project_id = $_POST['project_id'];
	$project_id = $con->real_escape_string($project_id);

	$delQuery = "UPDATE projects SET deleted = '1' WHERE project_id = '$project_id' ";
	$startDel = $con->query($delQuery);

	if ($startDel){
		echo 1;
	}else{
		echo 0;
	}
}




if (isset($_POST['project_id']) && isset($_POST['active'])){

	$project_id = $_POST['project_id'];
	$project_id = $con->real_escape_string($project_id);

	$delQuery = "UPDATE projects SET deleted = '0' WHERE project_id = '$project_id' ";
	$startDel = $con->query($delQuery);

	if ($startDel){
		echo 1;
	}else{
		echo 0;
	}
}


// PROJECTS END


if (isset($_POST['smi_id']) && isset($_POST['del'])){

	$smi_id = $_POST['smi_id'];
	$smi_id = $con->real_escape_string($smi_id);

	$delQuery = "UPDATE smi SET deleted = '1' WHERE smi_id = '$smi_id' ";
	$startDel = $con->query($delQuery);

	if ($startDel){
		echo 1;
	}else{
		echo 0;
	}
}




if (isset($_POST['smi_id']) && isset($_POST['active'])){

	$smi_id = $_POST['smi_id'];
	$smi_id = $con->real_escape_string($smi_id);

	$delQuery = "UPDATE smi SET deleted = '0' WHERE smi_id = '$smi_id' ";
	$startDel = $con->query($delQuery);

	if ($startDel){
		echo 1;
	}else{
		echo 0;
	}
}



// SMI








// SMI END


 ?>