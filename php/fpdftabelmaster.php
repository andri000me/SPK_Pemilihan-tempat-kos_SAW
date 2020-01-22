<?php
 require('fpdf.php');

 // intance object dan memberikan pengaturan halaman PDF
 $pdf = new FPDF('l','mm','A5');

 // membuat halaman baru
 $pdf->AddPage();
 // setting jenis font yang akan digunakan
 $pdf->SetFont('Arial','B',16);
 // mencetak string
 $pdf->Cell(190,7,'Laporan Data Master ',0,1,'C');
 $pdf->SetFont('Arial','B',12);
 $pdf->Cell(190,7,'Peroide 1 Januari - 31 Desember 2018',0,1,'C');

 // Memberikan space kebawah agar tidak terlalu rapat
 $pdf->Cell(10,7,'',0,1);

 $pdf->SetFont('Arial','B',10);
 $pdf->Cell(20,6,'Kode',1,0);
 $pdf->Cell(50,6,'Tanggal',1,0);
 $pdf->Cell(27,6,'Supplier',1,0);
 $pdf->Cell(25,6,'Alamat',1,0);
 $pdf->Cell(27,6,'Telpon',1,0);
 $pdf->Cell(27,6,'Total',1,1);

 $pdf->SetFont('Arial','',10);

 include 'koneksi.php';
 $tblmaster = mysqli_query($conn, "select * from tblmaster");
 while ($row = mysqli_fetch_array($tblmaster)){
 $pdf->Cell(20,6,$row['kodetr'],1,0);
 $pdf->Cell(50,6,$row['tanggal'],1,0);
 $pdf->Cell(27,6,$row['supplier'],1,0);
 $pdf->Cell(25,6,$row['alamat'],1,0);
 $pdf->Cell(27,6,$row['telpon'],1,0);
 $pdf->Cell(27,6,$row['total'],1,1);
}

$pdf->Output();
?>
