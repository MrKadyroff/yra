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
          <li class=" ">
            <a >
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./news_ru.php">
              <i class="now-ui-icons education_atom"></i>
              <p>ALL NEWS</p>
            </a>
          </li>
           <li>
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


            <li class="active">
            <a href="./users.php">
              <i class="now-ui-icons education_atom "></i>
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
            <a class="navbar-brand" href="#pablo">Dashboard / SUBSCRIBED USERS</a>
          </div>
         
        
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-lg">
      </div>
      <div class="content">
        <div class="row">
  <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Users Table</h4>
                <a href="export.php"><button class="btn btn-primary">Export</button></a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Name</th> 
                      <th>Surname</th> 
                      <th>Mail</th>
                      <th>Date</th>
                     
                    </thead>
                    <tbody>

                      <?php 
              include_once '../endpoints/db.php';

              $selUsers = "SELECT * FROM mailing";
              $startSel = $con->query($selUsers);

              while($row= $startSel->fetch_assoc()){
                echo ' <tr>
                        <td>'.$row['user_name'].'</td>
                        <td>'.$row['user_lastname'].'</td>
                        <td>'.$row['user_mail'].'</td>
                        <td>'.$row['subscription_date'].'</td>
                         </tr>' ;
               
                }
              
           ?>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          


        
         
        </div>
      
      </div>
     
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Chart JS -->
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