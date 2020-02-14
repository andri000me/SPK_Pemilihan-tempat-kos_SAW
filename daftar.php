</head>
<body>
	<?php

	require_once("php/koneksi.php");

	if(isset($_POST['daftar'])){

    // filter data yang diinputkan
		$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
		$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
		$password = password_hash($_POST["password"], PASSWORD_DEFAULT);


    // menyiapkan query
		$sql = "INSERT INTO user (nama_user, username, password) 
		VALUES (:nama_user :username, :password, :password)";
		$stmt = $db->prepare($sql);

    // bind parameter ke query
		$params = array(
			":name" => $name,
			":username" => $username,
			":password" => $password
		);

    // eksekusi query untuk menyimpan ke database
		$saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
		if($saved) header("Location: index.php");
	}

	?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
				<span class="login100-form-title p-b-37">
					<title>Register Pesbuk</title>
					<head>
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
					<body class="bg-light">
						<span class="login100-form-title p-b-37">

							<h4>SILAHKAN DAFTAR</h4>
						</span>

						<div class="container mt-20">
							<div class="row">
								<div class="col-md-19">


									<form action="daftar.php" method="POST">

										<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username">
											<input class="form-control" id="exampleInputEmail1" name="Nama Lengkap" type="text" aria-describedby="emailHelp" placeholder="Enter Nama">
											<span class="focus-input100"></span>
										</div>

										<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter username">
											<input class="form-control" id="exampleInputPassword1" name="Username" type="username" placeholder="username">
											<span class="focus-input100"></span>
										</div>

										<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter email">
											<input class="form-control" id="exampleInputEmail1" name="email" type="email" placeholder="email">
											<span class="focus-input100"></span>
										</div>

										<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
											<input class="form-control" id="exampleInputPassword1" name="password" type="password" placeholder="Password">
											<span class="focus-input100"></span>
										</div>


										<input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />
										<a href="index.php" type="kembali" class="btn btn btn-block" name="kembali" value="kembali">Menu Login</a>

										<p>Sudah punya akun? <a href="index.php">Login di sini</a></p>

									</form>

								</div>


							</div>
						</div>

					</body>
					</html>