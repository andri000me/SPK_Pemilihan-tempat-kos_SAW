<?php
include 'koneksi.php';
 session_start(); // memulai session
   mysqli_query($conn, "DELETE FROM Dpenjualan");
 session_destroy(); // menghapus session
 header("location:../index.php"); // mengambalikan ke form_login.php
 ?>
