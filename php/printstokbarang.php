<?php
require('fpdf/fpdf.php');


 // intance object dan memberikan pengaturan halaman PDF
 $pdf = new FPDF('l','mm','A5');

 // membuat halaman baru
 $pdf->AddPage();
 // setting jenis font yang akan digunakan
 $pdf->SetFont('Arial','B',16);
 // mencetak string
 $pdf->Cell(190,7,'Laporan Data Detail ',0,1,'C');
 $pdf->SetFont('Arial','B',12);
 $pdf->Cell(190,7,'Peroide 1 Januari - 31 Desember 2018',0,1,'C');

 // Memberikan space kebawah agar tidak terlalu rapat
 $pdf->Cell(10,7,'',0,1);
 $pdf->SetFont('Arial','B',10);
 $pdf->Cell(20,6,'Id Barang',1,0);
 $pdf->Cell(50,6,'Id Kategori',1,0);
 $pdf->Cell(27,6,'Nama',1,0);
 $pdf->Cell(25,6,'Tipe',1,0);
 $pdf->Cell(27,6,'Stok',1,0);
 $pdf->Cell(27,6,'Harga',1,1);

 $pdf->SetFont('Arial','',10);

 // include 'koneksi.php';
 // $tbldetail = mysqli_query($conn, "select * from barang");
 // while ($row = mysqli_fetch_array($tbldetail)){
 // $pdf->Cell(20,6,$row['id_barang'],1,0);
 // $pdf->Cell(50,6,$row['id_kategori'],1,0);
 // $pdf->Cell(27,6,$row['nama_barang'],1,0);
 // $pdf->Cell(25,6,$row['tipe'],1,0);
 // $pdf->Cell(27,6,$row['stok'],1,0);
//}

$pdf->Output();
?>
