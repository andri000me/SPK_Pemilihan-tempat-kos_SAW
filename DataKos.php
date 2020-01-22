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
  <title>Admin - Kos</title>
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
          <a class="nav-link" href="datanilaipreferensi.php">
            <i class="fa fa-fw fa-code-fork"></i>
            <span class="nav-link-text">Data Nilai Preferensi</span>
          </a>
        </li>

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Data Master</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="DataKos.php">Data kos</a>
            </li>
            <li>
              <a href="user.php">Data Kriteria</a>
            </li>
            <li>
              <a href="dataalternatif.php">Data alternatif</a>
            </li>
            <li>
              <a href="user.php">Data User</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Rating</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti" >
            <li>
              <a href="lihatsemuadata.php">Lihat Semua Data</a>
            </li>
            <li>
              <a href="peratingan.php">Peratingan</a>
            </li>
            <li>
              <a href="tambahdata.php">Tambah Data</a>
            </li>
          </ul>
        </li>
       

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Laporan</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages" >
            <li>
              <a href="Tpenjualan.php">Nilai Alternatif Kriteria</a>
            </li>
            <li>
              <a href="Tpenjualan.php">Normalisasi R</a>
            </li>
            <li>
              <a href="Tpenjualan.php">Hasil Akhir</a>
            </li>
          </ul>
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
        <li class="breadcrumb-item active">Data Master</li>
        <li class="breadcrumb-item active">Data Kos</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Masukkan / Edit Data Kos</div>
        <div class="card-body">
          <div class="card-body">
          <div class="table-responsive">

            <form action="DataKos.php" method="post"><center>
           <?php
         //  echo '<form action="user.php" method="get">';

           if (isset($_GET['ganti'])) {
              $id = $_GET['ganti'];
             // $id = 222;
             // $kode = "K01";

             $results = mysqli_query($conn, "SELECT * FROM barang WHERE id_barang = '$id'");

           while ($row = mysqli_fetch_array($results)) { ?>

             <div class="col-md-6">

               <input type="text" hidden="hidden" name="id_barang" value="<?php echo $row['id_barang']; ?>">


             </div> <br>

             <div class="col-md-6">
               <label for="exampleInputLastName">Gender</label>
               <?php  $resultss = mysqli_query($conn, "SELECT * FROM kategori");  ?>
               <select class="form-control" id="exampleInputLastName" name="id_kategori">
                 <?php while ($rows = mysqli_fetch_array($resultss)) { ?>
                 <option value="<?php echo $rows['id_kategori']; ?>"> <?php echo $rows['nama_kategori'];?> </option>
               <?php } ?>
               </select>
               <!-- <input class="form-control" id="exampleInputLastName" name="id_kategori" value="" type="text" aria-describedby="nameHelp" placeholder="Masukkan Kategori"> -->

             </div> <br>

               <div class="col-md-6">
                 <label for="exampleInputLastName">Alamat</label>
                 <input class="form-control" id="exampleInputLastName" name="nama_barang" value="<?php echo $row['nama_barang']; ?>" type="text" aria-describedby="nameHelp" placeholder="Masukkan Password">

               </div> <br>

               <div class="col-md-6">
                 <label for="exampleInputLastName">Harga</label>
                 <input class="form-control" id="exampleInputLastName" name="tipe" value="<?php echo $row['tipe']; ?>" type="text" aria-describedby="nameHelp" placeholder="Masukkan Kategori">

               </div> <br>

               <div class="col-md-6">
                 <label for="exampleInputLastName">Fasilitas</label>
                 <input class="form-control" id="exampleInputLastName" name="stok" value="<?php echo $row['stok']; ?>" type="text" aria-describedby="nameHelp" placeholder="Masukkan Kategori">

               </div> <br>
<!-- 
               <div class="col-md-6">
                 <label for="exampleInputLastName">Harga Beli</label>
                 <input class="form-control" id="exampleInputLastName" name="harga_beli" value="<?php echo $row['harga_beli']; ?>" type="text" aria-describedby="nameHelp" placeholder="Masukkan Kategori">

               </div> <br>

               <div class="col-md-6">
                 <label for="exampleInputLastName">Harga Jual</label>
                 <input class="form-control" id="exampleInputLastName" name="harga_jual" value="<?php echo $row['harga_jual']; ?>" type="text" aria-describedby="nameHelp" placeholder="Masukkan Kategori">

               </div> <br> -->




               <hr>
               <div class="col-md-6">
                 <input type="submit" class="btn btn-warning " name="ubah" value="Simpan Perubahan">
                 <input type="submit" class="btn btn-danger " name="batal" value="Batal">

               </div>

<?php }}



 { ?>

<form  action="barang.php" method="post"> <center>
  <!-- <div class="col-md-6">
    <label for="exampleInputLastName">Nama Barang</label>

    <input class="form-control" id="exampleInputLastName" name="nama_barang"  type="text" aria-describedby="nameHelp" placeholder="Masukkan Nama Barang">

  </div> <br> -->

  <div class="col-md-6">
    <label for="exampleInputLastName">Gender :</label>
    <?php    $results = mysqli_query($conn, "SELECT * FROM kategori");  ?>
    <select class="form-control" id="exampleInputLastName" name="id_kategori">
      <?php while ($row = mysqli_fetch_array($results)) { ?>
      <option value="<?php echo $row['id_kategori']; ?>"> <?php echo $row['nama_kategori'];?> </option>
    <?php } ?>
    </select>
    <!-- <input class="form-control" id="exampleInputLastName" name="id_kategori"  type="text" aria-describedby="nameHelp" placeholder="Masukkan Kategori"> -->

  </div> <br>

    <div class="col-md-6">
      <label for="exampleInputLastName">Alamat :</label>
      <input class="form-control" id="exampleInputLastName" name="nama_barang"  type="text" aria-describedby="nameHelp" placeholder="Masukkan Alamat">

    </div> <br>

    <div class="col-md-6">
      <label for="exampleInputLastName">Harga :</label>
      <input class="form-control" id="exampleInputLastName" name="tipe"  type="text" aria-describedby="nameHelp" placeholder="Masukkan Harga">

    </div> <br>

    <div class="col-md-6">
      <label for="exampleInputLastName">Fasilitas :</label>
      <input class="form-control" id="exampleInputLastName" name="stok"  type="text" aria-describedby="nameHelp" placeholder="Tambahkan Fasilitas">

    </div> <br>

 <!--    <div class="col-md-6">
   <label for="exampleInputLastName">Harga Beli :</label>
   <input class="form-control" id="exampleInputLastName" name="harga_beli"  type="text" aria-describedby="nameHelp" placeholder="Masukkan Harga Beli">
 
 </div> <br>
 
 <div class="col-md-6">
   <label for="exampleInputLastName">Harga Jual </label>
   <input class="form-control" id="exampleInputLastName" name="harga_jual"  type="text" aria-describedby="nameHelp" placeholder="Masukkan Harga Jual">
 
 </div> <br> -->

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
        <i class="fa fa-table"></i> Data Table Kos</div>
      <div class="card-body">
        <div class="card-body">
        <div class="table-responsive">
          <?php   $results = mysqli_query($conn, "SELECT  k.id_kategori ,nama_kategori, id_barang, nama_barang, tipe, stok, harga_beli, harga_jual FROM kategori k
                                    JOIN barang pn USING(id_kategori);");?>
            <form  action="barang.php" method="get">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Id Kos</th>
                        <th>Gender</th>
                        <th>Alamat</th>
                        <th>Harga</th>
                        <th>Fasilitas</th>
                        <!-- <th>Harga Beli</th>
                        <th>Harga Jual</th> -->
                        <th>Aksi</th>

                      </tr>
                    </thead>
                    <!-- <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </tfoot> -->
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($results)) { ?>
                      <tr>
                        <td><?php echo $row['id_barang']; ?></td>
                        <td><?php echo $row['nama_kategori']; ?></td>
                        <td><?php echo $row['nama_barang']; ?></td>
                        <td><?php echo $row['tipe']; ?></td>
                        <td><?php echo $row['stok']; ?></td>
                     <!--    <td>Rp. <?php echo $row['harga_beli']; ?> ,-</td>
                     <td>Rp. <?php echo $row['harga_jual']; ?> ,-</td> -->

                        <td><a class="btn btn-warning" href="DataKos.php?ganti=<?php echo $row['id_barang']; ?>">Ubah</a>
                            <a class="btn btn-danger" href="DataKos.php?id_barang=<?php echo $row['id_barang']; ?>">Hapus</a>
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
if (isset($_GET['id_barang'])) {
  $id = $_GET['id_barang'];
  mysqli_query($conn, "DELETE FROM barang WHERE id_barang = '$id'");

echo '<META HTTP-EQUIV="Refresh" Content="0; URL=DataKos.php">';
}elseif (isset($_POST['simpan'])) {
  $id = rand(999,90000);
  $id_kategori = $_POST['id_kategori'];
  $nama = $_POST['nama_barang'];
  $tipe = $_POST['tipe'];
  $stok = $_POST['stok'];
  $harga_beli = $_POST['harga_beli'];
  $harga_jual = $_POST['harga_jual'];
$date = date("Y/m/d");
  // mysqli_query($conn, "INSERT INTO barang VALUES (
  //   '$id','$id_kategori','$nama','$tipe','$stok','$harga_beli','$harga_jual')");

  mysqli_query($conn, "INSERT INTO barang (id_barang, id_kategori, nama_barang, tipe, stok, harga_beli, harga_jual, tanggal) VALUES (
    '$id','$id_kategori','$nama','$tipe','$stok','$harga_beli','$harga_jual','$date')");
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=DataKos.php">';
}elseif (isset($_POST['ubah'])) {
  $id = $_POST['id_barang'];
  $id_kategori = $_POST['id_kategori'];
  $nama = $_POST['nama_barang'];
  $tipe = $_POST['tipe'];
  $stok = $_POST['stok'];
  $harga_beli = $_POST['harga_beli'];
  $harga_jual = $_POST['harga_jual'];

  mysqli_query($conn, "UPDATE barang SET id_kategori='$id_kategori',
    nama_barang='$nama',  tipe='$tipe', stok='$stok', harga_beli='$harga_beli', harga_jual='$harga_jual' WHERE id_barang='$id'");
      echo '<META HTTP-EQUIV="Refresh" Content="0; URL=DataKos.php">';

}} ?>
