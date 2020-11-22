<?php
include './dbConnection/connect.php';
session_start();

if (isset ($_POST['log_in'])){

    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "SELECT * FROM `account` WHERE `account_username` = '$username'"; 
    $result_object = mysqli_query($mysql_connection_object, $query); 

    $user_data = mysqli_fetch_array($result_object);

    if ( is_null($user_data) ) {
    
        $error = 'The user does not exist';

    }else if ($password == $user_data['account_password']){
        $_SESSION['account_id'] = $user_data['account_id'];         
        $_SESSION['account_username'] = $user_data['account_username'];
         $_SESSION['account_password'] = $user_data['account_password'];
        $_SESSION['full_name'] = $user_data['full_name'];

        header("Location:dashboard.php");
      

    }else{
        $error = 'Please check your password!';
        exit();
    }

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon"/>
  <title>Admin Login</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="./css/mdb.min.css">
  <!-- Custom styles -->
  <link rel="stylesheet" href="./css/style.css">
  <style>
    html,
    body,
    header,
    .view {
      height: 100%;
    }
    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 1040px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view {
        height: 600px;
      }
    }
  </style>
</head>

<body class="cpulanding" >

  <!-- Main Navigation -->
  <header>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar cpunav">
      <div class="container">
        <a class="navbar-brand" href="#"><strong><img src='./img/logo.png' class='cpulogo'> </strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
          aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">CPU Map Guide and Building Directory<span class="sr-only">(current)</span></a>
            </li>
        
          </ul>
     
        </div>
      </div>
    </nav>

    <!-- Intro Section -->
    <section class="view intro-2">
      <div class="mask rgba-gradient">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="d-flex align-items-center content-height">
            <div class="row flex-center pt-5 mt-3">
              <div class="col-md-6 text-center text-md-left mb-5">
                <div class="white-text">
                  <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Vision
                  </h1>
                  <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                  <h6 class="wow fadeInLeft" data-wow-delay="0.3s">A University committed to Exemplary Christian Education for Life (EXCEL) and responsive to the needs of the total person and the world.</h6>

                  <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Mission
                  </h1>
                  <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                  <h6 class="wow fadeInLeft" data-wow-delay="0.3s">The mission of Central Philippine University is to carry out a program of spiritual , intellectual, moral, scientific, technological, and cultural training, and allied studies under influences which strengthen Christian faith, build up character and promote scholarship, research and community service.</h6>
                  <br>
                 
                </div>
              </div>

              <div class="col-md-6 col-xl-5 offset-xl-1">
                <!-- Form -->
                <form action='index.php' method='POST'>
                <div class="card wow fadeInRight" data-wow-delay="0.3s">
                  <div class="card-body">
                    <!-- Header -->
                    <div class="text-center">
                      <h3 class="black-text"></i>Admin Login</h3>
                      <hr class="hr-light">
                    </div>

                    <!-- Body -->
                   
                    <div class="md-form">
                      <i class="fas fa-user prefix black-text"></i>
                      <input type="text" id="form3" class="form-control" name='username' placeholder ='Username'>
                      
                    </div>
               

                    <div class="md-form">
                      <i class="fas fa-lock prefix black-text"></i>
                      <input type="password" id="form4" class="form-control" name='password' placeholder ='Password'>
                      
                    </div>

                    <div class="text-center mt-4">
                      <button class="btn btn-light-blue btn-rounded" name='log_in'>Log In</button>
                      <hr class="hr-light mb-3 mt-4">

                   
                    </div>
                  
                  </div>
                </div>
                </form>
                <!-- /.Form -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </header>
  <!-- Main Navigation -->

  <!-- Main layout -->
  <main>

    <div class="container">

     


    </div>

  </main>
  <!-- Main layout -->

  <!-- Footer -->
  <footer class="page-footer pt-4 text-center text-md-left">

   

    <!-- Copyright -->
    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        &copy; 2020 Copyright: <a href="http://localhost/CpuVirtualMap/"> CPU Virtual Map </a>

      </div>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="../../js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../../js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../../js/mdb.min.js"></script>
  <script>
    new WOW().init();

  </script>
</body>

</html>
