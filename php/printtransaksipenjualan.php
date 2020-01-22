
<?php
 $conn = mysqli_connect("localhost", "root", "hacked200613", "laptop");

require('fpdf/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,7,'Harsono Elektronik',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'Jl. Kusuma Bangsa, Surabaya.',0,1,'C');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(190,7,'Tlp. 089-607-244-544',0,1,'C');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(190,7,'============================================================================================',0,1);

$pdf->SetFont('Arial','',12);
$pdf->Cell(35,7,'Nama Customer  :',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(30,7,'Maseko',0,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(19,7,'Id Transaksi  :',0,0);
$pdf->Cell(30,7,'123456789',0,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(15,7,'Tanggal  :',0,0);
$pdf->Cell(30,7,'02-02-2018',0,1);
$pdf->Cell(190,7,'===================================================================================================================',0,1);


//colom tabel
$pdf->SetFont('Arial','',12);
$pdf->Cell(15,7,'No :',0,0);
$pdf->Cell(50,7,'Nama Item',0,0);
$pdf->Cell(20,7,'Jumlah',0,0);
$pdf->Cell(30,7,'Harga',0,0);
$pdf->Cell(30,7,'Total',0,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(190,7,'===================================================================================================================',0,1);

//isi item
$pdf->SetFont('Arial','',12);
$pdf->Cell(15,7,'1',0,0);
$pdf->Cell(50,7,'Asus ROG G30X',0,0);
$pdf->Cell(20,7,'2',0,0);
$pdf->Cell(30,7,'10.000.000',0,0);
$pdf->Cell(30,7,'20.000.000',0,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(190,7,'===================================================================================================================',0,1);

//pembayaran
$pdf->SetFont('Arial','B',12);
$pdf->Cell(100,7,'',0,0);
$pdf->Cell(15,7,'Total :',0,0);
$pdf->Cell(15,7,'20.000.000',0,1);
$pdf->Cell(100,7,'',0,0);
$pdf->Cell(15,7,'Tunai :',0,0);
$pdf->Cell(15,7,'20.000.000',0,1);





$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,6,'Kode Transaksi',1,0);
$pdf->Cell(50,6,'Nama Admin',1,0);
$pdf->Cell(40,6,'Nama Barang',1,0);
$pdf->Cell(35,6,'Tipe',1,0);
$pdf->Cell(18,6,'Jumlah',1,1);

$pdf->SetFont('Arial','',10);

$id = $_GET['print'];

$tbldetail = mysqli_query($conn, "SELECT * FROM Tpenjualan WHERE id_transaksi='$id' ");
while ($row = mysqli_fetch_array($tbldetail)){
$pdf->Cell(30,6,$row['id_transaksi'],1,0);
$pdf->Cell(50,6,$row['nama_admin'],1,0);
$pdf->Cell(40,6,$row['nama_barang'],1,0);
$pdf->Cell(35,6,$row['tipe'],1,0);
$pdf->Cell(18,6,$row['jumlah'],1,1);
}
$pdf->Output();
?>
