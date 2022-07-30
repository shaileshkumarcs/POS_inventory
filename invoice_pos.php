<?php


require('fpdf184/fpdf.php');

$pdf = new FPDF('P','mm',array(80, 200));

$pdf->addPage();
ob_end_clean();
$pdf->output();


?>