<?php
include 'fpdf.php';
include '../connection.php';

if (isset($_POST['cetak'])) {

  $periode = $_POST["periode"];

  // $cek = mysqli_query($conn, "SELECT * FROM tb_hasil WHERE periode = '$periode'") or die(mysqli_error($conn));


  $pdf = new FPDF();
  $pdf->AddPage();

  $pdf->Image('../assets/img/kop.png', null, null, 220, null, null, false);
  $pdf->Cell(190, 0.6, '', '0', '1', 'C', true);
  $pdf->Ln(5);

  $pdf->SetFont('Arial', 'B', 12);
  $pdf->Cell(100, 5, 'Daftar Klasifikasi Siswa Yang Menerima Bantuan Sosial dan Tidak', '0', '1', 'L', false);
  $pdf->Cell(110, 5, "Periode : $periode", '0', '1', 'L', false);
  $pdf->Ln(3);

  $pdf->SetFont('Arial', 'B', 10);
  $pdf->Cell(8, 6, 'No', 1, 0, 'C');
  $pdf->Cell(25, 6, 'NIS', 1, 0, 'C');
  $pdf->Cell(65, 6, 'Nama', 1, 0, 'C');
  $pdf->Cell(35, 6, 'Kelas', 1, 0, 'C');
  $pdf->Cell(0, 6, 'Keterangan', 1, 0, 'C');


  $no = 0;
  $sql = mysqli_query($conn, "SELECT * FROM tb_hasil WHERE periode = '$periode' ORDER BY kelas ASC, nama ASC");

  if (mysqli_num_rows($sql) == 0) {
    $pdf->Ln(6);
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(0, 6, 'Tidak Ada Data', 1, 0, 'C');

    $pdf->Ln(20);

    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(150, 5, 'Mengetahui,', '0', '1', 'R', false);
    $pdf->Ln(2);
    $pdf->Cell(169, 5, 'Kepala Sekolah SMKS PGRI Pandaan', '0', '1', 'R', false);
    $pdf->Ln(20);
    $pdf->Cell(169, 5, 'MOKHAMAD ARI WIBOWO,S.KOM', '0', '1', 'R', false);

    $pdf->Output();
  } else {

    while ($data = mysqli_fetch_array($sql)) {

      if ($data['keterangan'] == 'Mendapatkan Bantuan') {
        $ket = 'Mendapatkan Bantuan';
      } else {
        $ket = 'Tidak Mendapatkan Bantuan';
      }

      $no++;
      $pdf->Ln(6);
      $pdf->SetFont('Arial', '', 10);
      $pdf->Cell(8, 6, $no, 1, 0, 'C');
      $pdf->Cell(25, 6, $data['nis'], 1, 0, 'C');
      $pdf->Cell(65, 6, $data['nama'], 1, 0, 'C');
      $pdf->Cell(35, 6, $data['kelas'], 1, 0, 'C');
      $pdf->Cell(0, 6, $ket, 1, 0, 'C');
    }
    $pdf->Ln(20);

    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(150, 5, 'Mengetahui,', '0', '1', 'R', false);
    $pdf->Ln(2);
    $pdf->Cell(169, 5, 'Kepala Sekolah SMKS PGRI Pandaan', '0', '1', 'R', false);
    $pdf->Ln(20);
    $pdf->Cell(169, 5, 'MOKHAMAD ARI WIBOWO,S.KOM', '0', '1', 'R', false);

    $pdf->Output();
  }
}
