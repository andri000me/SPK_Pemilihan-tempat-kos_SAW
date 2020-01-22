
<?php
 $conn = mysqli_connect("localhost", "root", "hacked200613", "laptop");

require('fpdf/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,7,'Laporan Data Pembelian ',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'Peroide 1 Januari - 31 Desember 2018',0,1,'C');


$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,6,'Kode Transaksi',1,0);
$pdf->Cell(53,6,'Nama Admin',1,0);
$pdf->Cell(45,6,'Nama Barang',1,0);
$pdf->Cell(46,6,'Tipe',1,0);
$pdf->Cell(15,6,'Jumlah',1,1);

$pdf->SetFont('Arial','',10);



$tbldetail = mysqli_query($conn, "SELECT * FROM Lpembelian ");
while ($row = mysqli_fetch_array($tbldetail)){
$pdf->Cell(30,6,$row['id_pembelian'],1,0);
$pdf->Cell(53,6,$row['nama_admin'],1,0);
$pdf->Cell(45,6,$row['nama_barang'],1,0);
$pdf->Cell(46,6,$row['tipe'],1,0);
$pdf->Cell(15,6,$row['jumlah'],1,1);
}
$pdf->Output();
?>
