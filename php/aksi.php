<?php
include 'koneksi.php';


// if (isset($_GET['id_user']) {
//   $id = $_GET['id_user'];
//   mysqli_query($conn, "DELETE FROM user WHERE kode = '$id'");
//
//   header('user.php');
// }
if (isset($_POST['tambah'])) {
  $id = rand(999,90000);
  $nama_kategori= $_POST['nama_kategori'];
  $nama= $_POST['nama_barang'];
  $tipe= $_POST['tipe'];
  $harga= $_POST['harga_jual'];
  $jumlah= $_POST['jumlah'];
  $total = $harga * $jumlah;

  $perintah = "SELECT * FROM Dpenjualan WHERE nama_kategori = '$nama_kategori' AND tipe = '$tipe'";
   $hasil = mysqli_query($conn,$perintah);
   $row = mysqli_fetch_array($hasil);
   if ($row['nama_kategori'] == $nama_kategori AND $row['tipe'] == $tipe) {

     mysqli_query($conn, "UPDATE Dpenjualan SET
        jumlah='$jumlah' WHERE  nama_kategori = '$nama_kategori' AND tipe = '$tipe'");
         header("Location:../Tpenjualan.php");
 }else {
   mysqli_query($conn, "INSERT INTO Dpenjualan (id_dummy, nama_kategori, nama, tipe, harga, jumlah, total) VALUES (
     '$id','$nama_kategori','$nama','$tipe','$harga','$jumlah','$total')");

 header("Location:../Tpenjualan.php");
 }



} elseif (isset($_POST['totalpembayaran'])) {

  $idtransaksi = rand(999,90000);
  $nama = $_POST['nama'];
  $namacustomer = $_POST['namacustomer'];
  //$namacustomer = "maseko";
  $tipe = $_POST['tipe'];
  $jumlah = $_POST['jumlah'];
  $harga = $_POST['harga'];
  $total = $_POST['total'];
  $tanggal = date("Y/m/d");
  $totalpembayaran = $_POST['totalpembayarancus'];
 $x = 0;
  $jumlah_dipilih = count($nama);

//mysqli_query($conn,"INSERT INTO item (id_item,id_transaksi,nama_item,tipe,harga_item,jumlah_item,total) values('$id','$idtransaksi','$nama[$x]','$tipe[$x]','$harga[$x]','$jumlah[$x]','$total[$x]')");
  for($x=0;$x<$jumlah_dipilih;$x++){
  //  echo $nama[$x] .$tipe[$x].$jumlah[$x].$harga[$x].$total[$x]. '<br>';
  $id = rand(999,9000) . $x;
//echo $jumlah_dipilih;
  mysqli_query($conn,"INSERT INTO item (id_item,id_transaksi,nama_item,tipe,harga_item,jumlah_item,total) values('$id','$idtransaksi','$nama[$x]','$tipe[$x]','$harga[$x]','$jumlah[$x]','$total[$x]')");
//  echo $id."   ". $nama[$x]."   " .$tipe[$x]."   ".$jumlah[$x]."   ".$harga[$x]."   ".$total[$x]. '<br>';

  $perintah = "SELECT * FROM barang WHERE nama_barang = '$nama[$x]' AND tipe = '$tipe[$x]'";
  $hasil = mysqli_query($conn,$perintah);
  $row = mysqli_fetch_array($hasil);

  $stokawal = $row['stok'];
  $sisastok = $stokawal - $jumlah[$x];

  mysqli_query($conn,"UPDATE barang SET stok='$sisastok' WHERE nama_barang = '$nama[$x]' AND tipe = '$tipe[$x]'");


  }

mysqli_query($conn,"INSERT INTO Tpenjualan (id_transaksi,nama,total,tanggal) VALUES('$idtransaksi','$namacustomer','$totalpembayaran','$tanggal')");

}





else {

  $username = $_POST['username'];
  $password = $_POST['password'];

  $perintah = "select * from user WHERE username = '$username' AND password = '$password'";
   $hasil = mysqli_query($conn,$perintah);
   $row = mysqli_fetch_array($hasil);
   if ($row['username'] == $username AND $row['password'] == $password) {
   session_start(); // memulai fungsi session
   $_SESSION['username'] = $username;
   $_SESSION['nama_user'] = $row['nama_user'];
   header("location:../dashboard.php"); // jika berhasil login, maka masuk ke file home.php
   }
   else {
   echo "Gagal Masuk"; // jika gagal, maka muncul teks gagal masuk
   }

  //  $data = [
  //    "kategori" => $_POST['kategori'],
  //    "nama" => $_POST['nama']
  //  ];
   //
  //  $data = [
  //    "kategori" => [
  //      "ASUS", "TOSHIBA"
  //    ],
  //    "nama" => [
  //
  //    ]
  //  ]
  //  $data = json_encode($data);
  //  json_decode()
}

//SELECT COUNT(nama_kolom) FROM nama_table




 ?>
