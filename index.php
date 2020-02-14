<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login SPK Pemilihan Tempat Kos</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!--===============================================================================================-->
</head>
<body>


  <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
      <span class="login100-form-title p-b-37">

       <h3>SELAMAT DATANG DI SPK PEMILIHAN TEMPAT KOS
       </h3> <br>
       <h4>SILAHKAN LOGIN</h4>
     </span>

     <div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
      <form action="php/aksi.php" method="post"> 
        <input class="form-control" id="exampleInputEmail1" name="username" type="text" aria-describedby="emailHelp" placeholder="Enter email">
        <span class="focus-input100"></span>
      </div>

      <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
       <input class="form-control" id="exampleInputPassword1" name="password" type="password" placeholder="Password">
       <span class="focus-input100"></span>
     </div>

     <div class="container-login100-form-btn">
      <button class="login100-form-btn" type="submit" name="login">
        Sign In
      </button>
    </div>

    <div class="text-center p-t-57 p-b-20">
      <span class="txt1">
        Mau daftar ga nih ? 
      </span>
    </div>

    <div class="flex-c p-b-100">
      <a href="daftar.php" >Daftar disini dong  
      </a>



    </form>


  </div>
  <footer class="sticky-footer">
    <div class="container">
      <div class="text-center">
        <small>Copyright Mr.Limbo 2020</small>
      </div>
    </div>
  </footer>
</div>




<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>