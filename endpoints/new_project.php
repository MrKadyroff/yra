<?php 
// подкл к БД

include_once 'db.php';


// Проверяем установлен ли массив файлов и массив с переданными данными
if(isset($_FILES) && isset($_FILES['image'])) {
 
  //Переданный массив сохраняем в переменной
  $image = $_FILES['image'];

// Принимает все заоплненные поля с формы

  $project_header = $_POST['project_header'];
  $project_anons = $_POST['project_anons'];
  $project_info = $_POST['project_info'];
  $project_lang = $_POST['lang'];

  // преобразование в строку

  $project_header = $con->real_escape_string($project_header);
  $project_anons = $con->real_escape_string($project_anons);
  $project_info = $con->real_escape_string($project_info);
  $project_lang = $con->real_escape_string($project_lang);
  




 
  // Проверяем размер файла и если он превышает заданный размер
  // завершаем выполнение скрипта и выводим ошибку
  if ($image['size'] > 2000000) {
    die('error');
  }
 
  // Достаем формат изображения
  $imageFormat = explode('.', $image['name']);
  $imageFormat = $imageFormat[1];
 
  // Генерируем новое имя для изображения. Можно сохранить и со старым
  // но это не рекомендуется делать
  $folder = '../img/';
  $hash = hash('crc32',time()) . '.' . $imageFormat;
  $imageFullName = $folder . $hash;
  $fold = 'img/';
 	$imgName = $con->real_escape_string($fold.$hash);
  // Сохраняем тип изображения в переменную
  $imageType = $image['type'];
 
  // Сверяем доступные форматы изображений, если изображение соответствует,
  // копируем изображение в папку images
  if ($imageType == 'image/jpeg' || $imageType == 'image/png' || $imageType == 'image/jpg') {
    if (move_uploaded_file($image['tmp_name'],$imageFullName)) {
    	 $con->set_charset("utf8");
    	$insQuery = "INSERT INTO projects ( `project_header`, `project_anons`, `project_info`, `project_photo`, `lang` , `deleted`) VALUES ('$project_header' , '$project_anons' , '$project_info' ,  '$imgName'  , '$project_lang' ,'0') ";
    	$startQuery = $con->query($insQuery);
    	if($startQuery){
    		echo 'success';
    	}else{
    		echo "Error1";
    	}



      
    } else {
      echo 'error2';
    }
  }
}

 ?>