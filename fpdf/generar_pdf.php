<?php
include 'conexion.php';
require 'fpdf/fpdf.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

$pdf->Cell(0, 10, 'Reporte de Compras', 0, 1, 'C');
$pdf->Ln(10);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 10, 'Nombre', 1);
$pdf->Cell(20, 10, 'DNI', 1);
$pdf->Cell(40, 10, 'Producto', 1);
$pdf->Cell(30, 10, 'P. Unitario', 1);
$pdf->Cell(20, 10, 'Cantidad', 1);
$pdf->Cell(30, 10, 'P. Total', 1);
$pdf->Ln();

$pdf->SetFont('Arial', '', 12);

$sql = "SELECT * FROM compras";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(30, 10, $row['nombre'], 1);
        $pdf->Cell(20, 10, $row['dni'], 1);
        $pdf->Cell(40, 10, $row['producto'], 1);
        $pdf->Cell(30, 10, number_format($row['precio_unitario'], 2), 1);
        $pdf->Cell(20, 10, $row['cantidad'], 1);
        $pdf->Cell(30, 10, number_format($row['precio_total'], 2), 1);
        $pdf->Ln();
    }
} else {
    $pdf->Cell(0, 10, 'No hay registros.', 1, 1, 'C');
}

$conn->close();
$pdf->Output();
?>
