<?php

session_start();
if (empty($_SESSION['username'])) {
 header("location:index.php"); // jika belum login, maka dikembalikan ke file form_login.php
} else {?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin - Perhitungan</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="dashboard.php">SPK PEMILIHAN TEMPAT KOS</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php

      if (($_SESSION['level']) == "admin") {

        ?> 
        <div class="collapse navbar-collapse" id="navbarResponsive">


          <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
              <a class="nav-link" href="dashboard.php">
                <i class="fa fa-fw fa-dashboard"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu">
              <a class="nav-link" href="DataKriteria.php">
                <i class="fa fa-fw fa-code-fork"></i>
                <span class="nav-link-text">Data Kriteria</span>
              </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-list-ul"></i>
                <span class="nav-link-text">Alternatif</span>
              </a>
              <ul class="sidenav-second-level collapse" id="collapseComponents">
                <li>
                  <a href="Alternatif.php">Alternatif</a>
                </li>
                <li>
                  <a href="NilaiAlternatif.php">Nilai Alternatif</a>
                </li>
              </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu">
              <a class="nav-link" href="User.php">
                <i class="fa fa-fw fa-lock"></i>
                <span class="nav-link-text">Data User</span>
              </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu">
              <a class="nav-link" href="Perhitungan.php">
                <i class="fa fa-fw fa-sitemap"></i>
                <span class="nav-link-text">Perhitungan</span>
              </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu">
              <a class="nav-link" href="kesimpulan.php">
                <i class="fa fa-fw fa-sitemap"></i>
                <span class="nav-link-text">kesimpulan</span>
              </a>
            </li>
          </ul>



          <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
              <a class="nav-link text-center" id="sidenavToggler">
                <i class="fa fa-fw fa-angle-left"></i>
              </a>
            </li>
          </ul>
        </div>





        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-envelope"></i>
              <span class="d-lg-none">Messages
                <span class="badge badge-pill badge-primary">12 New</span>
              </span>
              <span class="indicator text-primary d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="messagesDropdown">
              <h6 class="dropdown-header">New Messages:</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>David Miller</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>Jane Smith</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>John Doe</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item small" href="#">View all messages</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-bell"></i>
              <span class="d-lg-none">Alerts
                <span class="badge badge-pill badge-warning">6 New</span>
              </span>
              <span class="indicator text-warning d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="alertsDropdown">
              <h6 class="dropdown-header">New Alerts:</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-success">
                  <strong>
                    <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                  </span>
                  <span class="small float-right text-muted">11:21 AM</span>
                  <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <span class="text-danger">
                    <strong>
                      <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
                    </span>
                    <span class="small float-right text-muted">11:21 AM</span>
                    <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <span class="text-success">
                      <strong>
                        <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                      </span>
                      <span class="small float-right text-muted">11:21 AM</span>
                      <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#">View all alerts</a>
                  </div>
                </li>
                <li class="nav-item">
                  <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
                      <input class="form-control" type="text" placeholder="Search for...">
                      <span class="input-group-append">
                        <button class="btn btn-warning" type="button">
                          <i class="fa fa-search"></i>
                        </button>
                      </span>
                    </div>
                  </form>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                  </li>

                </ul>
              </div>

            <?php }elseif(($_SESSION['level']) == "user") {

              ?> <div class="collapse navbar-collapse" id="navbarResponsive">


                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="dashboard.php">
                      <i class="fa fa-fw fa-dashboard"></i>
                      <span class="nav-link-text">Dashboard</span>
                    </a>
                  </li>


                  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                      <i class="fa fa-fw fa-list-ul"></i>
                      <span class="nav-link-text">Alternatif</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseComponents">
                      <li>
                        <a href="alternatif_user.php">Alternatif</a>
                      </li>
                      <li>
                        <a href="NilaiAlternatif.php">Nilai Alternatif</a>
                      </li>
                    </ul>
                  </li>



                  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu">
                    <a class="nav-link" href="Perhitungan.php">
                      <i class="fa fa-fw fa-sitemap"></i>
                      <span class="nav-link-text">Perhitungan</span>
                    </a>
                  </li>

                  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu">
                    <a class="nav-link" href="kesimpulan.php">
                      <i class="fa fa-fw fa-sitemap"></i>
                      <span class="nav-link-text">kesimpulan</span>
                    </a>
                  </li>
                </ul>




                <ul class="navbar-nav sidenav-toggler">
                  <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                      <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                  </li>
                </ul>


                <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-fw fa-envelope"></i>
                      <span class="d-lg-none">Messages
                        <span class="badge badge-pill badge-primary">12 New</span>
                      </span>
                      <span class="indicator text-success d-none d-lg-block">
                        <i class="fa fa-fw fa-circle"></i>
                      </span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                      <h6 class="dropdown-header">New Messages:</h6>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">
                        <strong>David Miller</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">
                        <strong>Jane Smith</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">
                        <strong>John Doe</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item small" href="#">View all messages</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-fw fa-bell"></i>
                      <span class="d-lg-none">Alerts
                        <span class="badge badge-pill badge-warning">6 New</span>
                      </span>
                      <span class="indicator text-danger d-none d-lg-block">
                        <i class="fa fa-fw fa-circle"></i>
                      </span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                      <h6 class="dropdown-header">New Alerts:</h6>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">
                        <span class="text-success">
                          <strong>
                            <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                          </span>
                          <span class="small float-right text-muted">11:21 AM</span>
                          <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                          <span class="text-danger">
                            <strong>
                              <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
                            </span>
                            <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">
                            <span class="text-success">
                              <strong>
                                <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                              </span>
                              <span class="small float-right text-muted">11:21 AM</span>
                              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item small" href="#">View all alerts</a>
                          </div>
                        </li>
                        <li class="nav-item">
                          <form class="form-inline my-2 my-lg-0 mr-lg-2">
                            <div class="input-group">
                              <input class="form-control" type="text" placeholder="Search for...">
                              <span class="input-group-append">
                                <button class="btn btn-warning" type="button">
                                  <i class="fa fa-search"></i>
                                </button>
                              </span>
                            </div>
                          </form>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                          </li>
                        </ul>
                      </div>
                    </nav>
                    <div class="content-wrapper">
                      <div class="container-fluid">
                        <!-- Breadcrumbs-->
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item">
                            <a href="dashboard.php">Dashboard</a>
                          </li>
                          <li class="breadcrumb-item active">Kesimpulan</li>
                        </ol>
                        <!-- Example DataTables Card-->

                        <div class="card mb-3">
                          <div class="card-header">
                            <i class="fa fa-table"></i> Kesimpulan</div>
                            <div class="card-body">
                              <div class="card-body">
                                <div class="table-responsive">

                                  <table class="table table-bordered" id="dataTablex" width="100%" cellspacing="0">
                                    <h3>Kesimpulan dari program ini adalah ketika ada peminat kos yang sedang memilih beberapa kos di dahsboard diantaranya yaitu :
                                      <h3>1. Kos Putri Semolowaru.<br>
                                        2. Kos Campur Semampir.<br>
                                      3. dan Kos Putri semolowaru.</h3> 
                                      <h3> Dengan menggunakan metode SAW dengan hasil yang dirangkingkan, maka program menyarankan dapat memilih K0s Putri Semolowaru. karena perhitungan sudah sesuai dengan data kriteria yang telah di tentukan. </h3>

                                    </table>
                                  </div>
                                </div>
                                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                              </div>
                            </div>
                            <footer class="sticky-footer">
                              <div class="container">
                                <div class="text-center">
                                  <small>Copyright © Your Website 2018</small>
                                </div>
                              </div>
                            </footer>
                            <!-- Scroll to Top Button-->
                            <a class="scroll-to-top rounded" href="#page-top">
                              <i class="fa fa-angle-up"></i>
                            </a>
                            <!-- Logout Modal-->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">×</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                                  <div class="modal-footer">
                                    <button class="btn btn-warning" type="button" data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-danger" href="php/logout.php">Logout</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Bootstrap core JavaScript-->
                            <script src="vendor/jquery/jquery.min.js"></script>
                            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                            <!-- Core plugin JavaScript-->
                            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
                            <!-- Page level plugin JavaScript-->
                            <script src="vendor/datatables/jquery.dataTables.js"></script>
                            <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
                            <!-- Custom scripts for all pages-->
                            <script src="js/sb-admin.min.js"></script>
                            <!-- Custom scripts for this page-->
                            <script src="js/sb-admin-datatables.min.js"></script>
                          </div>
                        </body>

                        </html>


                        <?php


                        if (isset($_GET['id_user'])) {
                          $id = $_GET['id_user'];
                          mysqli_query($conn, "DELETE FROM user WHERE id_user = $id");


                          echo '<META HTTP-EQUIV="Refresh" Content="0; URL=user.php">';
                        }elseif (isset($_POST['simpan'])) {
 // $id = rand(999,90000);
                          $nama = $_POST['nama_user'];
                          $username = $_POST['username'];
                          $password = $_POST['password'];

                          $sql = "INSERT INTO user VALUES (
                          NULL,'$nama','$username','$password','admin')";
                          $cek = mysqli_query($conn, $sql);

                          if ($cek) {
                           echo '<META HTTP-EQUIV="Refresh" Content="0; URL=user.php">';
                           echo $cek;
                         }  else {
                          echo "Error";
                        }

                      }
                      elseif (isset($_POST['ubah'])) {
                        $id = $_POST['id_user'];
                        $nama = $_POST['nama_user'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $sql = "UPDATE user SET nama_user='$nama', username='$username', password='$password' WHERE id_user=$id";
                        mysqli_query($conn, $sql);
                        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=user.php">';

                      } }
                      ?>
                    <?php } ?>

