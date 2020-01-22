
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
$pdf->Cell(50,6,'Nama Admin',1,0);
$pdf->Cell(40,6,'Nama Barang',1,0);
$pdf->Cell(35,6,'Tipe',1,0);
$pdf->Cell(18,6,'Jumlah',1,1);

$pdf->SetFont('Arial','',10);

$id = $_GET['print'];

$tbldetail = mysqli_query($conn, "SELECT * FROM Lpembelian WHERE id_pembelian='$id' ");
while ($row = mysqli_fetch_array($tbldetail)){
$pdf->Cell(30,6,$row['id_pembelian'],1,0);
$pdf->Cell(50,6,$row['nama_admin'],1,0);
$pdf->Cell(40,6,$row['nama_barang'],1,0);
$pdf->Cell(35,6,$row['tipe'],1,0);
$pdf->Cell(18,6,$row['jumlah'],1,1);
}
$pdf->Output();
?>
