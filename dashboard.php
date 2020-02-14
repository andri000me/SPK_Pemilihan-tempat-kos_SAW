

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
    <title>Admin - Dashboard</title>
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
      <a class="navbar-brand" href="dashboard.php"><?php echo $_SESSION['nama_user']; ?></a>
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
<?php } ?>


            </nav>
            <div class="content-wrapper">
              <div class="container-fluid">
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">My Dashboard</li>
                </ol>

                <div class="page-header">
                  <h3 style="text-align:center"> SPK Pemilihan Tempat Kos </h3>  
                </div>
                <div class="entry-content">
                  <p> SPK Pemilihan Tempat Kos adalah sistem keputusan untuk memilih tempat kos yang berada di sekitar kampus Universitas Dinamika Surabaya dengan mengambil sampel kos yang ada di mamikos dan juga olx dengan total 20 kos.</p>
                  <h5> Di website ini sendiri memiliki beberapa fitur yaitu : </h5>
                  <p> 1. Data Kriteria
                   <br>2. Alternatif dan juga hasil alternatif
                   <br>3. Data User
                   <br>3. Perhitungan
                   <br>
                   <h6>Berikut adalah tempat kos yang telah di survey yang berada tidak jauh dari kampus universitas dinamika</h6></p>  
                </div>
                

<form action="perhitungan.php" method="post" name="pilihkos">
                <table border="1" cellpadding="10" cellspacing="1">
                  <tr>      
                    <td>
                      <a href="https://mamikos.com/room/kost-surabaya-kost-putri-murah-kost-semolowaru-indah-sukolilo-surabaya" target="_blank"><img alt="kos1.jpg" src="gambar/kos1.jpg" width="170" title="Title Gambar1" text-color="black" /> 
                        KOS PUTRI <br>
                        1. Harga    : Rp.600.000 <br> 
                        2. Alamat   : Semolowaru Indah Surabaya <br>
                      3. Fasilitas: kamar, wi-fi, lemari, meja belajar, tempat parkir motor</a>
                      <input type="checkbox" name="1" value="1" class="form-control">
                    </td>      
                    <td><a href="https://mamikos.com/room/kost-surabaya-kost-putra-murah-kost-147-merr-rungkut-surabaya-1 " target="_blank"><img alt="" src="gambar/kos2.jpg" width="170" title="Title Gambar 2" />
                      KOS PRIA <br>
                      1. Harga    : Rp.850.000 <br> 
                      2. Alamat   : Merr Rungkut Surabaya <br>
                    3. Fasilitas: kamar, wi-fi, kamar mandi, closet jongkok</a>
                    <input type="checkbox" name="2" value="2" class="form-control">
                  </td>  
                  <td><a href="https://mamikos.com/room/kost-surabaya-kost-campur-eksklusif-kost-griya-semampir-pusat-kota-surabaya" target="_blank"><img alt="gambar2" src="gambar/kos3.jpg" width="170" title="Title Gambar 3" />
                    KOS CAMPUR <br>
                    1. Harga    : Rp.1.000.000 <br> 
                    2. Alamat   : Semampir Pusat Surabaya <br>
                  3. Fasilitas: kamar, wi-fi, AC, Kamar mandi dalam, tempat parkir motor</a>
                  <input type="checkbox" name="3" value="3" class="form-control">
                </td>  
                <td><a href="https://mamikos.com/room/kost-surabaya-kost-putra-murah-kost-semampir-tengah-sukolilo-surabaya" target="_blank"><img alt="gambar2" src="gambar/kos4.jpg" width="170" title="Title Gambar 2" />
                 KOS PUTRA <br>
                 1. Harga    : Rp.500.000 <br> 
                 2. Alamat   : Semampir Tengah Sukolilo Surabaya <br>
               3. Fasilitas: Akses kunci, kasur, kamar mandi luar</a>
               <input type="checkbox" name="4" value="4" class="form-control">
             </td>  
             <td><a href="https://mamikos.com/room/kost-surabaya-kost-putri-murah-kost-semampir-selatan-iii-sukolilo-surabaya-1" target="_blank"><img alt="gambar2" src="gambar/kos5.jpg" width="170" title="Title Gambar 2" />
               KOS PUTRI <br>
               1. Harga    : Rp.425.000 <br> 
               2. Alamat   : Semampir Selatan III Sukolilo Surabaya <br>
             3. Fasilitas: kamar mandi luar, kasur</a>
             <input type="checkbox" name="5" value="5" class="form-control">
           </td>  
         </tr>
         <tr>          
          <td><a href="https://mamikos.com/room/kost-surabaya-kost-campur-murah-kost-kendalsari-pratama-rungkut-surabaya-1" target="_blank"><img alt="gambar3=" src="gambar/kos6.jpg" width="170" title="Title Gambar 4"/></a>
            KOS CAMPUR <br>
            1. Harga    : Rp.500.000 <br> 
            2. Alamat   : Kendalsari Pratama Rungkut Surabaya <br>
          3. Fasilitas: kamar mandi luar, kasur, akses kunci 24 jam</a>
          <input type="checkbox" name="6" value="6" class="form-control">
        </td>
          <td><a href="https://mamikos.com/room/kost-surabaya-kost-putri-murah-kost-semampir-selatan-iii-sukolilo-surabaya-1" target="_blank"><img alt="gambar2" src="gambar/kos5.jpg" width="170" title="Title Gambar 2" /></a>
           KOS CAMPUR <br>
           1. Harga    : Rp.425.000 <br> 
           2. Alamat   : Semampir Selatan III Skolilo Surabaya Surabaya <br>
           3. Fasilitas: kamar mandi luar, kasur 
           <input type="checkbox" name="7" value="7" class="form-control">
         </td>  
       </td>     
       <td><a href="https://mamikos.com/room/kost-surabaya-kost-campur-eksklusif-kost-87-rungkut-sukolilo-surabaya-1 " target="_blank"><img alt="gambar4" src="gambar/kos7.jpg" width="170" title="Title Gambar 5" /></a>
        KOS CAMPUR <br>
        1. Harga    : Rp.1.000.000 <br> 
        2. Alamat   : Rungkut Sukolilo Surabaya <br>
      3. Fasilitas: Kasur, Wi-fi, kamar mandi dalam, kasur, akses kunci 24 jam</a>
      <input type="checkbox" name="8" value="8" class="form-control">
    </td>
    <td><a href="https://mamikos.com/room/kost-surabaya-kost-campur-murah-kost-pak-triyoso-rungkut-surabaya-1" target="_blank"><img alt="gambar2" src="gambar/kos8.jpg" width="170" title="Title Gambar 6" /></a>
      KOS CAMPUR <br>
      1. Harga    : Rp.500.000 <br> 
      2. Alamat   : Rungkut Surabaya <br>
      3. Fasilitas: kamar mandi luar 
      <input type="checkbox" name="9" value="9" class="form-control">
    </td>    
    <td><a href="https://mamikos.com/room/kost-kost-putri-murah-kost-putri-mother-julias-merr-pondok-nirwana-surabaya " target="_blank"><img alt="gambar2" src="gambar/kos9.jpg" width="170" title="Title Gambar 2" /></a>
      KOS PUTRI <br>
      1. Harga    : Rp.450.000 <br> 
      2. Alamat   : Merr Pondok Nirwana Surabaya <br>
      3. Fasilitas: kamar mandi luar, kloset jongkok, Kasur
      <input type="checkbox" name="10" value="10" class="form-control">
    </td>    
  </tr>
  <tr>     
    <td><a href="https://www.olx.co.id/item/kost-wanita-kedung-baruk-iid-767351796" target="_blank"><img alt="gambar5" alt="gambar5" src="gambar/kos11.jpg" width="170" title="title Gambar 7"/></a>
      KOS WANITA <br>
      1. Harga    : Rp.500.000 <br> 
      2. Alamat   : Jl. Kedung Baruk No 109 Belakang Samator dan Novotel <br>
      3. Fasilitas: Kasur, kloset duduk, lemari
      <input type="checkbox" name="11" value="11" class="form-control">
    </td>     
    <td><a href="https://www.olx.co.id/item/kost-rungkut-tengah-surabaya-murah-iid-754372531/" target="_blank"><img alt="gambar6" src="gambar/kos12.jpg" width="170" title="Title Gambar 8" /></a>
      KOS CEWEK <br>
      1. Harga    : Rp.600.000 <br> 
      2. Alamat   : Jl.Rungkut Tengah No.10 RT01/RW03 SURABAYA,60293 <br>
      3. Fasilitas: Wi-fi, kamar mandi luar, lemari baju
      <input type="checkbox" name="12" value="12" class="form-control">
    </td>  
    <td><a href="https://www.olx.co.id/item/kost-bebas-24jam-surabaya-timur-merr-rungkut-iid-755595106 " target="_blank"><img alt="gambar2" src="gambar/kos13.jpg" width="120" title="Title Gambar 9" /></a>
      KOS CEWEK <br>
      1. Harga    : Rp.850.000 <br> 
      2. Alamat   : Jalan Wonorejo Timur Blok C - Gang Santai No 147 Surabaya <br>
      3. Fasilitas: Wi-fi, dapur, parkir motor, bebas 24jam
      <input type="checkbox" name="13" value="13" class="form-control">
    </td>  
    <td><a href="https://www.olx.co.id/item/tersedia-kamar-kost-pria-dekat-kampus-upn-iid-751113847" target="_blank"><img alt="gambar2" src="gambar/kos14.jpg" width="170" title="Title Gambar 2" /></a>
      KOS COWOK <br>
      1. Harga    : Rp.425.000 <br> 
      2. Alamat   : Medokan Sawah Timur V No.2 <br>
      3. Fasilitas: Wi-fi, kamar mandi, parkir motor, bebas 24jam
      <input type="checkbox" name="14" value="14" class="form-control">
    </td>  
    <td><a href="https://www.olx.co.id/item/kost-rungkut-mapan-wanita-iid-756826438" target="_blank"><img alt="gambar2" src="gambar/kos15.jpg" width="170" title="Title Gambar 2" /></a>
      KOS COWOK <br>
      1. Harga    : Rp.750.000 <br> 
      2. Alamat   : Rungkut mapan tengah<br>
      3. Fasilitas: Wi-fi, kamar mandi, kulkas, AC
      <input type="checkbox" name="15" value="15" class="form-control">
    </td>  
  </tr>
  <tr>     
    <td><a href="https://www.olx.co.id/item/kost-pasutri-rungkut-iid-530646056" target="_blank"><img alt="gambar5" alt="gambar5" src="gambar/kos16.jpg" width="170" title="title Gambar 7"/></a>
      KOS PASUTRI <br>
      1. Harga    : Rp.600.000 <br> 
      2. Alamat   : Kutisari utara V no 9<br>
      3. Fasilitas: Wi-fi, kamar mandi, kulkas, Kipas angin
      <input type="checkbox" name="16" value="16" class="form-control">
    </td>     
    <td><a href="https://www.olx.co.id/item/kost-putri-stie-perbanas-stikom-mangrove-iph-man-iid-757412602/" target="_blank"><img alt="gambar6" src="gambar/kos17.php" width="160" title="Title Gambar 8" /></a>
      KOS PUTRI <br>
      1. Harga    : Rp.300.000 <br> 
      2. Alamat   : Jl. Wonorejo gang lang-gar no 7. Rungkut surabaya<br>
      3. Fasilitas: Kasur, Lemari, meja, dapur bersama, kulkas bersama
      <input type="checkbox" name="17" value="17" class="form-control">
    </td>  
    <td><a href="https://www.olx.co.id/item/terima-kost-mhswakrywan-iid-755386762" target="_blank"><img alt="gambar2" src="gambar/kos18.jpg" width="170" title="Title Gambar 9" /></a>
      KOS PUTRI <br>
      1. Harga    : Rp.300.000 <br> 
      2. Alamat   : Jl. Wonorejo gang lang-gar no 7. Rungkut surabaya<br>
      3. Fasilitas: Kasur, Lemari, meja, dapur bersama, kulkas bersama
      <input type="checkbox" name="18" value="18" class="form-control">
    </td>  
    <td><a href="https://www.olx.co.id/item/kost-surabaya-timur-rungkut-putra-iid-765249127" target="_blank"><img alt="gambar2" src="gambar/kos19.php" width="170" title="Title Gambar 2" /></a>
      KOS PUTRA <br>
      1. Harga    : Rp.500.000 <br> 
      2. Alamat   : Penjaringan Sari<br>
      3. Fasilitas: Parkir Motor,4 kamar mandi, dapur 
      <input type="checkbox" name="19" value="19" class="form-control">
    </td>  
    <td><a href="https://www.olx.co.id/item/terima-kost-pasutrikaryawan-iid-764307359" target="_blank"><img alt="gambar2" src="gambar/kos20.jpg" width="120" title="Title Gambar 2" /></a>
      <br>KOS KARYAWAN/PASUTRI <br>
      1. Harga    : Rp.600.000 <br> 
      2. Alamat   : Jl.perumahan gunung anyar ikip B 75<br>
      3. Fasilitas: kamar mandi dalam, lingkungan aman
      <input type="checkbox" name="20" value="20" class="form-control">
    </td>  
  </tr>
</table>
</div>
<button type="submit" class="btn btn-primary" name="pilihkos">Cari Kandidat</button>
</form>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->
<footer class="sticky-footer">
  <div class="container">
    <div class="text-center">
      <small>Copyright © Syifaul Fuadi 2020
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
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>


<?php } ?>
