<?php 
$word =[];

if(empty($_SESSION['lang']) || empty($_SESSION['language'])){
	$_SESSION['lang'] = 'Русский';
	$_SESSION['language'] = 'ru';
}


if (isset($_POST['select_lang'])){
		
	if ($_POST['select_lang'] == 'ru'){
		$_SESSION['lang'] = 'Русский';
		 $_SESSION['language'] = 'ru';
	    }
	else if ($_POST['select_lang'] == 'kz'){
		$_SESSION['lang'] = 'Қазақша';
		 $_SESSION['language'] = 'kz';
		}
	else if($_POST['select_lang'] == 'en'){
		$_SESSION['lang'] = 'English';	
		 $_SESSION['language'] = 'en';
		}	
	}




 if ( $_SESSION['lang'] == 'Русский' ){
 	// words
$ru =  "SELECT assoc,ru FROM `content`";
$res =$con->query($ru);
while($row=$res->fetch_assoc()){
    $word[$row['assoc']] = $row['ru'];
  }

}

 if($_SESSION['lang'] == 'English'){
$en =  "SELECT assoc,en FROM `content`";
$res =$con->query($en);
while($row=$res->fetch_assoc()){

    $word[$row['assoc']] = $row['en'];

  }

}
 if($_SESSION['lang'] == 'Қазақша'){
$kz =  "SELECT assoc,kz FROM `content`";
$res =$con->query($kz);
while($row=$res->fetch_assoc()){

    $word[$row['assoc']] = $row['kz'];

  }

}

 ?>
 