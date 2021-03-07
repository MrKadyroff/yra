<?php 
session_start();
if(!isset($_SESSION['admin'])){
  header('Location: login.php');
}

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>
    Admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
    
        <a  class="simple-text logo-normal">
          ADMIN
        </a>
      </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a >
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="active">
            <a href="./news_ru.php">
              <i class="now-ui-icons education_atom"></i>
              <p>ALL NEWS</p>
            </a>
          </li>
           <li >
            <a href="./add_news.php">
              <i class="now-ui-icons education_atom"></i>
              <p>ADD NEWS</p>
            </a>
          </li>
            <li>
            <a href="./members_ru.php">
              <i class="now-ui-icons education_atom"></i>
              <p>ALL MEMBERs</p>
            </a>
          </li>
          <li>
            <a href="./add_member.php">
              <i class="now-ui-icons education_atom"></i>
              <p>ADD MEMBER</p>
            </a>
          </li>
           <li>
            <a href="./add_project.php">
              <i class="now-ui-icons education_atom"></i>
              <p>ADD PROJECT</p>
            </a>
          </li>
           <li>
            <a href="./projects_ru.php">
              <i class="now-ui-icons education_atom"></i>
              <p>PROJECTS</p>
            </a>
          </li>
           <li>
            <a href="./smi_ru.php">
              <i class="now-ui-icons education_atom"></i>
              <p>SMI</p>
            </a>
          </li>
           <li>
            <a href="./add_smi.php">
              <i class="now-ui-icons education_atom"></i>
              <p>ADD SMI</p>
            </a>
          </li>


            <li>
            <a href="./users.php">
              <i class="now-ui-icons education_atom"></i>
              <p>Users</p>
            </a>
          </li>

          
           <li >
            <a href="logout.php">
              <i class="now-ui-icons education_atom"></i>
              <p>Logout</p>
            </a>
          </li>
        
          
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Dashboard / NEWS → RU</a>
            <a href="news_kz.php"><button class="btn btn-info">KZ</button></a>
            <a href="news_en.php"><button class="btn btn-success">EN</button></a>
          </div>
         
        
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-lg" style="height: 25vh !important;">
      </div>
      <div class="content">
        <div class="row">

          <?php 
              include_once '../endpoints/db.php';

              $selProd = "SELECT * FROM news WHERE lang = 'ru'";
              $startSel = $con->query($selProd);

              while($row= $startSel->fetch_assoc()){
                $deleted = $row['news_deleted'];
                if($deleted == 0){
                  echo '<div class="col-lg-4">
            <div class="card card-chart"  >
              <div class="card-header">
                <h4 class="card-title">ACTIVE</h4>
               
              </div>
              <div class="card-body text-center">
              <img src="../'.$row['news_photo'].'" style="height:30vh ; width20vw;">
               <p>News Header: '.$row['news_header'].'</p>
               <p>Anons: '.$row['news_anons'].'</p>
               <p>All info: '.$row['news_info'].'</p>
               <p>Date: '.$row['news_date'].'</p>
               
            

               <form id="del'.$row['news_id'].'">
               <input type="text" name="news_id" value="'.$row['news_id'].'" style="display:none;">
               <input type="text" name="del"  style="display:none;">
               <input type="submit" class="btn btn-danger" value="Delete">
               </form>

              </div>
             
            </div>
          </div>';
                }else {
                  echo '<div class="col-lg-4" >
            <div class="card card-chart" style="background:#faa49d;">
              <div class="card-header">
                <h4 class="card-title">DELETED</h4>
               
              </div>
              <div class="card-body text-center">
              <img src="../'.$row['news_photo'].'" style="height:30vh ; width20vw;">
               <p>News Header: '.$row['news_header'].'</p>
               <p>Anons: '.$row['news_anons'].'</p>
               <p>All info: '.$row['news_info'].'</p>
               <p>Date: '.$row['news_date'].'</p>
               
                <form id="active'.$row['news_id'].'">
               <input type="text" name="news_id" value="'.$row['news_id'].'" style="display:none;">
               <input type="text" name="active"  style="display:none;">
               <input type="submit" class="btn btn-success" value="Activate">
               </form>

              </div>
             
            </div>
          </div>';
                }
              }
           ?>


        
         
        </div>
      
      </div>
     
    </div>
  </div>
  <!--   Core JS Files   -->
  <!-- <script src="assets/js/core/jquery.min.js"></script> -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>



<script>
   
    $(document).ready(function () {
        $('form').submit(function () {
            var formID = $(this).attr('id'); // Получение ID формы
            var formNm = $('#' + formID);
            $.ajax({
                type: 'POST',
                url: '../endpoints/delete.php', // Обработчик формы отправки
                data: formNm.serialize(),
                success: function (data) {
                    // Вывод текста результата отправки в текущей форме
                    // alert(data);
                    if(data == 1){
                         Swal.fire({
 
  icon: 'success',
  title: "Deleted",
  showConfirmButton: false,
  timer: 2000
})
setInterval(function() {
   location.reload();
}, 1000); //5 seconds
                     }else if (data == 0){
                         Swal.fire({
 
  icon: 'error',
  title: "Error",
  showConfirmButton: false,
  timer: 2000
})
                     }

                   
                }
            });
            return false;
        });
    });

</script>