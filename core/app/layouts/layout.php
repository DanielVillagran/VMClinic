<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Bio Clinic Estética, Longevidad y Obesidad</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>
    <link href="assets/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="assets/js/jquery.min.js" type="text/javascript"></script>
  <script src='assets/js/sweetalert2.all.js'></script>

<?php if(isset($_GET["view"]) && $_GET["view"]=="calendar"):?>
<link href='assets/fullcalendar/fullcalendar.min.css' rel='stylesheet' />
<link href='assets/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='assets/fullcalendar/moment.min.js'></script>
<script src='assets/fullcalendar/fullcalendar.min.js'></script>
<script src='assets/fullcalendar/locale-all.js'></script>

<?php endif; ?>

</head>

<body>
<?php if(isset($_SESSION["user_id"])):?>
  <div class="wrapper">

      <div class="sidebar" data-color="blue" style="margin-bottom: -40px;">
      <div class="logo">
        <a href="./" class="simple-text">
            <img src="assets/images/logo.png" width="150px" alt="">
        </a>
      </div>

        <div class="sidebar-wrapper">
              <ul class="nav">
                  <li class="">
                      <a href="./">
                          <i class="fa fa-home"></i>
                          <p>Inicio</p>
                      </a>
                  </li>
                  <li class="">
                      <a href="./?view=calendar">
                          <i class="fa fa-calendar"></i>
                          <p>Calendario</p>
                      </a>
                  </li>
                  <li>
                      <a href="./?view=reservations">
                          <i class="fa fa-address-book-o"></i>
                          <p>Citas</p>
                      </a>
                  </li>
                  <li>
                      <a href="./?view=pacients">
                          <i class="fa fa-male"></i>
                          <p>Pacientes</p>
                      </a>
                  </li>
                  <li>
                      <a href="./?view=medics">
                          <i class="fa fa-user-md"></i>
                          <p>Medicos</p>
                      </a>
                  </li>
                  <li>
                      <a href="./?view=medicine">
                          <i class="fa fa-medkit"></i>
                          <p>Medicamentos</p>
                      </a>
                  </li>
                  <li>
                      <a href="./?view=items">
                          <i class="fa fa-database"></i>
                          <p>Articulos</p>
                      </a>
                  </li>
                  <li>
                      <a href="./?view=categories">
                          <i class="fa fa-th-list"></i>
                          <p>Categorias</p>
                      </a>
                  </li>
                  <li>
                      <a href="./?view=reports">
                          <i class="fa fa-area-chart"></i>
                          <p>Reporte de Citas</p>
                      </a>
                  </li>
                  <li>
                      <a href="./?view=users">
                          <i class="fa fa-users"></i>
                          <p>Usuarios</p>
                      </a>
                  </li>
              </ul>
        </div>
      </div>

      <div class="main-panel">
      <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./"><b>Bio Clinic: Estética, Longevidad, Obesidad</b></a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-user"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="logout.php">Salir</a></li>
                </ul>
              </li>

          </div>
        </div>
      </nav>

      <div class="content">
      <div class="container-fluid">
<?php 
  // puedo cargar otras funciones iniciales
  // dentro de la funcion donde cargo la vista actual
  // como por ejemplo cargar el corte actual
  View::load("login");

?>
</div>
      </div>

      <footer class="footer">
        <div class="container-fluid">
          <nav class="pull-left">
            <ul>
              <li>
                <a href="./?view=changelog" >
                  Log de cambios
                </a>
              </li>
              <li>
                <a href="http://VMComp.com/" target="_blank">
                  VMComp
                </a>
              </li>
        <!--
              <li>
                <a href="#">
                  Company
                </a>
              </li>
              <li>
                <a href="#">
                  Portfolio
                </a>
              </li>
              <li>
                <a href="#">
                   Blog
                </a>
              </li>
          -->
            </ul>
          </nav>
          <p class="copyright pull-right">
            <a href="http://VMComp.com" target="_blank">VMComp</a> &copy; 2016 
          </p>
        </div>
      </footer>
    </div>
  </div>
<?php else:?>
  <?php 
  View::load("login");

?>

<?php endif;?>
</body>

  <!--   Core JS Files   -->
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/js/material.min.js" type="text/javascript"></script>

  <!--  Charts Plugin -->
  <script src="assets/js/chartist.min.js"></script>

  <!--  Notifications Plugin    -->
  <script src="assets/js/bootstrap-notify.js"></script>

  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

  <!-- Material Dashboard javascript methods -->
  <script src="assets/js/material-dashboard.js"></script>

  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/js/demo.js"></script>
<script src="assets/js/newpacient.js"></script>

  <script type="text/javascript">
      $(document).ready(function(){

      // Javascript method's body can be found in assets/js/demos.js
          demo.initDashboardPageCharts();

      });
  </script>

</html>
