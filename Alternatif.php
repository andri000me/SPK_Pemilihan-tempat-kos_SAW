<?php
include 'php/koneksi.php';
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
    <title>Admin - data nilai alternatif</title>
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
      <a class="navbar-brand" href="dashboard.php">SPK Pemilihan Tempat Kos</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
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
                  <li class="breadcrumb-item active">Data Alternatif</li>
                </ol>
                <!-- Example DataTables Card-->
                <div class="card mb-3">
                  <div class="card-header">
                    <i class="fa fa-table"></i> Masukkan / Edit Data Kos</div>
                    <div class="card-body">
                      <div class="card-body">
                        <div class="table-responsive">

                          <form action="Alternatif.php" method="post"><center>
                           <?php
         //  echo '<form action="user.php" method="get">';

                           if (isset($_GET['ganti'])) {
                            $id = $_GET['ganti'];
             // $id = 222;
             // $kode = "K01";

                            $results = mysqli_query($conn, "SELECT * FROM dataalternatif WHERE id_alternatif = '$id'");

                            while ($row = mysqli_fetch_array($results)) { ?>

                             <div class="col-md-6">

                               <input type="text" hidden="hidden" name="id_alternatif" value="<?php echo $row['id_alternatif']; ?>">


                             </div> <br>


                             <div class="col-md-6">
                               <label for="exampleInputLastName">Nama Alternatif</label>
                               <input class="form-control" id="exampleInputLastName" name="nama_alternatif" value="<?php echo $row['nama_alternatif']; ?>" type="text" aria-describedby="nameHelp" placeholder="Masukkan Nama">

                             </div> <br>

                             <div class="col-md-6">
                               <label for="exampleInputLastName">Hasil Alternatif</label>
                               <input class="form-control" id="exampleInputLastName" name="hasil_alternatif" value="<?php echo $row['hasil_alternatif']; ?>" type="text" aria-describedby="nameHelp" placeholder="Masukkan Hasil">

                             </div>
                             <div class="col-md-6">
                               <label for="exampleInputLastName">Harga</label>
                               <input class="form-control" id="exampleInputLastName" name="harga" value="<?php echo $row['harga']; ?>" type="text" aria-describedby="nameHelp" placeholder="Masukkan harga">

                             </div>
                             <div class="col-md-6">
                               <label for="exampleInputLastName">Alamat</label>
                               <input class="form-control" id="exampleInputLastName" name="alamat" value="<?php echo $row['alamat']; ?>" type="text" aria-describedby="nameHelp" placeholder="Masukkan Alamat">

                             </div>
                             <div class="col-md-6">
                               <label for="exampleInputLastName">Fasilitas</label>
                               <input class="form-control" id="exampleInputLastName" name="fasilitas" value="<?php echo $row['fasilitas']; ?>" type="text" aria-describedby="nameHelp" placeholder="Masukkan fasilitas">

                             </div>
                          </div>
                          <hr>
                          <div class="col-md-6">
                           <input type="submit" class="btn btn-warning " name="ubah" value="Simpan Perubahan">
                           <input type="submit" class="btn btn-danger " name="batal" value="Batal">

                         </div>

                       <?php }}


                       else
                         { ?>

                          <form  action="Alternatif.php" method="post"> <center>
                          </div> <br>

                          <div class="col-md-6">
                            <label for="exampleInputLastName">Nama Alternatif  :</label>
                            <input class="form-control" name="nama_alternatif"  type="text" aria-describedby="nameHelp" placeholder="Masukkan Nama">

                          </div> <br>

                          <div class="col-md-6">
                            <label for="exampleInputLastName">Hasil Alternatif :</label>
                            <input class="form-control" name="hasil_alternatif"  type="text" aria-describedby="nameHelp" placeholder="Masukkan Hasil">

                          </div> <br>

                          <div class="col-md-6">
                            <label for="exampleInputLastName">Harga :</label>
                            <input class="form-control" name="harga"  type="text" aria-describedby="nameHelp" placeholder="Masukkan harga">

                          </div> <br>

                          <div class="col-md-6">
                            <label for="exampleInputLastName">Alamat :</label>
                            <input class="form-control" name="alamat"  type="text" aria-describedby="nameHelp" placeholder="Masukkan Alamat">

                          </div> <br>

                          <div class="col-md-6">
                            <label for="exampleInputLastName">Fasilitas :</label>
                            <input class="form-control" name="fasilitas"  type="text" aria-describedby="nameHelp" placeholder="Masukkan Fasilitas">

                          </div> <br>

                      <div class="col-md-6">
                        <input type="submit" class="btn btn-success " name="simpan" value="Simpan">
                        <input type="submit" class="btn btn-danger " name="batal" value="Batal">

                      </div>

                    </form>
                  <?php } ?>

                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-table"></i> Data Table Alternatif</div>
              <div class="card-body">
                <div class="card-body">
                  <div class="table-responsive">
                    <form  action="Alternatif.php" method="get">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Id Alternatif</th>
                            <th>Nama Alternatif</th>
                            <th>Hasil Alternatif</th>
                            <th>Harga</th>
                            <th>Alamat</th>
                            <th>Fasilitas</th>
                            <th>Aksi</th>

                          </tr>
                        </thead>
                        <?php 
                        $results = mysqli_query($conn, "SELECT * FROM dataalternatif ");

                        while ($row = mysqli_fetch_array($results)) { ?>
                          <tr>
                            <td><?php echo $row['id_alternatif']; ?></td>
                            <td><?php echo $row['nama_alternatif']; ?></td>
                            <td><?php echo $row['hasil_alternatif']; ?></td>
                            <td><?php echo $row['harga'];?></td>
                            <td><?php echo $row['alamat'];?></td>
                            <td><?php echo $row['fasilitas'];?></td>


                            <td><a class="btn btn-warning" href="Alternatif.php?ganti=<?php echo $row['id_alternatif']; ?>">Ubah</a>
                              <a class="btn btn-danger" href="Alternatif.php?id_alternatif=<?php echo $row['id_alternatif']; ?>">Hapus</a>
                            </td>
                          <?php } ?>
                        </tbody>
                      </table>
                    </form>
                  </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
              </div>
            </div>
            <!-- /.container-fluid-->
            <!-- /.content-wrapper-->
            <footer class="sticky-footer">
              <div class="container">
                <div class="text-center">
                  <small>Copyright © Your Website 2019</small>
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
        if (isset($_GET['id_alternatif'])) {
          $id = $_GET['id_alternatif'];
          mysqli_query($conn, "DELETE FROM dataalternatif WHERE id_alternatif = $id");

          echo '<META HTTP-EQUIV="Refresh" Content="0; URL=Alternatif.php">';
        }elseif (isset($_POST['simpan'])) {
 // $id = rand(999,90000);
          $nama_alternatif = $_POST['nama_alternatif'];
          $hasil_alternatif = $_POST['hasil_alternatif'];
          $harga = $_POST['harga'];
          $alamat = $_POST['alamat'];
          $fasilitas = $_POST['fasilitas'];

          mysqli_query($conn, "INSERT INTO dataalternatif VALUES (NULL,'$nama_alternatif','$hasil_alternatif')");
          echo '<META HTTP-EQUIV="Refresh" Content="0; URL=Alternatif.php">';
        }elseif (isset($_POST['ubah'])) {
          $id = $_POST['id_alternatif'];
          $nama_alternatif = $_POST['nama_alternatif'];
          $hasil_alternatif = $_POST['hasil_alternatif'];
          $harga = $_POST['harga'];
          $alamat = $_POST['alamat'];
          $fasilitas = $_POST['fasilitas'];

          mysqli_query($conn, "UPDATE dataalternatif SET nama_alternatif='$nama_alternatif',  hasil_alternatif='$hasil_alternatif', harga='$harga',alamat='$alamat', fasilitas='$fasilitas' WHERE id_alternatif=$id");
          echo '<META HTTP-EQUIV="Refresh" Content="0; URL=Alternatif.php">';

        }} ?>
