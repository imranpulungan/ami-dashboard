<?php
require_once 'dep.php';
// ===================================
// --------------------- end template ---------------------------------

function cols($rows, $pure = false)
{
    $col = ['D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'N', 'O'];
    $colArray = [];
    for ($i = 0; $i < count($col); $i++) {
        array_push($colArray, $col[$i] . $rows);
    }
    if ($pure) {
        return $col;
    }
    return $colArray;
}

//----------------pembuatan Sheet--------------------
$objPHPExcel->createSheet();
$sheet0      = $objPHPExcel->setActiveSheetIndex(0);
//------------------ end pembuatan sheet-------------

//----------------------- Penamaan Sheet---------------------------
$sheet0->setTitle('PM Compliance Report');

$sheet0->getColumnDimension('A')->setWidth(0.8);
$sheet0->getColumnDimension('B')->setWidth(13);
$sheet0->getColumnDimension('C')->setWidth(35);
$sheet0->getRowDimension(1)->setRowHeight(5.5);
$sheet0->getRowDimension(2)->setRowHeight(30);

$baris0 = 2;
$baris0_mulai = $baris0;
$sheet0->setCellValue('B' . $baris0, 'SMT-ACC');
$sheet0->mergeCells('B' . $baris0 . ':C' . $baris0);
$sheet0->setCellValue('D' . $baris0, 'JAN');
$sheet0->setCellValue('E' . $baris0, 'FEB');
$sheet0->setCellValue('F' . $baris0, 'MAR');
$sheet0->setCellValue('G' . $baris0, 'APR');
$sheet0->setCellValue('H' . $baris0, 'MAY');
$sheet0->setCellValue('I' . $baris0, 'JUN');
$sheet0->setCellValue('J' . $baris0, 'JUL');
$sheet0->setCellValue('K' . $baris0, 'AUG');
$sheet0->setCellValue('L' . $baris0, 'SEP');
$sheet0->setCellValue('M' . $baris0, 'OCT');
$sheet0->setCellValue('N' . $baris0, 'NOV');
$sheet0->setCellValue('O' . $baris0, 'DEC');
$sheet0->setCellValue('P' . $baris0, 'TOTAL');
setCellBackColor($sheet0, 'B' . $baris0_mulai . ':P' . $baris0, '0070C0');
setCellColor($sheet0, 'B' . $baris0_mulai . ':P' . $baris0, 'FFFFFF');

// ========================================================================================================
// MO Without s/p
// ========================================================================================================
$baris0 += 1;
$sheet0->setCellValue('B' . $baris0, 'MO Without S/P');
$sheet0->mergeCells('B' . $baris0 . ':B' . ($baris0 + 7));
$sheet0->setCellValue('C' . $baris0, 'Comply');

$baris0_mo_start = $baris0;
$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    $sheet0->setCellValue($colSheet[$i], 15);
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");
// $sheet0->setCellValue('P' . $baris0, "=SUM(" . $colSheet[0] . ":" . $colSheet[count($colSheet) - 1] . ")");


$baris0 += 1;
$sheet0->setCellValue('C' . $baris0, 'On Time');

$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    $sheet0->setCellValue($colSheet[$i], 25);
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");

$baris0 += 1;
$sheet0->setCellValue('C' . $baris0, 'Not Comply');

$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    $sheet0->setCellValue($colSheet[$i], 25);
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");

$baris0 += 1;
$sheet0->setCellValue('C' . $baris0, 'Execution');

$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    $sheet0->setCellValue($colSheet[$i], 25);
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");

$baris0 += 1;
$sheet0->setCellValue('C' . $baris0, 'Pending');

$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    $sheet0->setCellValue($colSheet[$i], 25);
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");

$baris0 += 1;
$sheet0->setCellValue('C' . $baris0, 'Sub Total');

$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    // $sheet0->setCellValue($colSheet[$i], '=SUM(D3:D7)');
    $sheet0->setCellValue($colSheet[$i], '=SUM(' . cols($baris0, true)[$i] . $baris0_mo_start . ':' . cols($baris0, true)[$i] . ($baris0 - 1) . ')');
    // $sheet0->setCellValueExplicit($colSheet[$i], '=SUM(' . cols($baris0, true)[$i] . $baris0_mo_start . ':' . cols($baris0, true)[$i] . ($baris0 - 1) . ')', PHPExcel_Cell_DataType::TYPE_FORMULA);
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");

$baris0 += 1;
$sheet0->setCellValue('C' . $baris0, 'PM Compliance');

$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    $sheet0->setCellValue($colSheet[$i], '=IFERROR(ROUND(((' . cols($baris0, true)[$i] . $baris0_mo_start . '/' . cols($baris0, true)[$i] . ($baris0 - 1) . ')*100), 2),"-")');
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");

$baris0 += 1;
$sheet0->setCellValue('C' . $baris0, 'On Time Rate');

$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    $sheet0->setCellValue($colSheet[$i], 25);
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");


// ===============================================================================================================
// MO With S/P
// ===============================================================================================================

$baris0 += 1;
$sheet0->setCellValue('B' . $baris0, 'MO With S/P');
$sheet0->mergeCells('B' . $baris0 . ':B' . ($baris0 + 7));
$sheet0->setCellValue('C' . $baris0, 'Comply');

$baris0_mo_sp_start = $baris0;
$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    $sheet0->setCellValue($colSheet[$i], 15);
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");
// $sheet0->setCellValue('P' . $baris0, "=SUM(" . $colSheet[0] . ":" . $colSheet[count($colSheet) - 1] . ")");


$baris0 += 1;
$sheet0->setCellValue('C' . $baris0, 'On Time');

$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    $sheet0->setCellValue($colSheet[$i], 25);
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");

$baris0 += 1;
$sheet0->setCellValue('C' . $baris0, 'Not Comply');

$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    $sheet0->setCellValue($colSheet[$i], 25);
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");

$baris0 += 1;
$sheet0->setCellValue('C' . $baris0, 'Execution');

$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    $sheet0->setCellValue($colSheet[$i], 25);
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");

$baris0 += 1;
$sheet0->setCellValue('C' . $baris0, 'Pending');

$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    $sheet0->setCellValue($colSheet[$i], 25);
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");

$baris0 += 1;
$sheet0->setCellValue('C' . $baris0, 'Sub Total');

$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    // $sheet0->setCellValue($colSheet[$i], '=SUM(D3:D7)');
    $sheet0->setCellValue($colSheet[$i], '=SUM(' . cols($baris0, true)[$i] . ($baris0 - 2) . ':' . cols($baris0, true)[$i] . ($baris0 - 1) . ')');
    // $sheet0->setCellValueExplicit($colSheet[$i], '=SUM(' . cols($baris0, true)[$i] . $baris0_mo_start . ':' . cols($baris0, true)[$i] . ($baris0 - 1) . ')', PHPExcel_Cell_DataType::TYPE_FORMULA);
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");

$baris0 += 1;
$sheet0->setCellValue('C' . $baris0, 'PM Compliance');

$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    $sheet0->setCellValue($colSheet[$i], '=IFERROR(ROUND(((' . cols($baris0, true)[$i] . ($baris0_mo_sp_start) . '/' . cols($baris0, true)[$i] . ($baris0 - 1) . ')*100), 2),"-")');
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");

$baris0 += 1;
$sheet0->setCellValue('C' . $baris0, 'On Time Rate');

$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    $sheet0->setCellValue($colSheet[$i], '=IFERROR(ROUND(((' . cols($baris0, true)[$i] . ($baris0_mo_sp_start + 1) . '/' . cols($baris0, true)[$i] . ($baris0 - 2) . ')*100), 2),"-")');
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");

// ===============================================================================================================
// Total Semua MO (Non shortage only)
// ===============================================================================================================

$baris0 += 1;
$sheet0->setCellValue('B' . $baris0, 'Total Semua MO (Non- Shortage Only)');
$sheet0->mergeCells('B' . $baris0 . ':B' . ($baris0 + 5));
$sheet0->setCellValue('C' . $baris0, 'Executed');

$baris0_all_mo_no_start = $baris0;
$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    $sheet0->setCellValue($colSheet[$i], 15);
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");

$baris0 += 1;
$sheet0->setCellValue('C' . $baris0, 'Pending');

$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    $sheet0->setCellValue($colSheet[$i], 25);
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");

$baris0 += 1;
$sheet0->setCellValue('C' . $baris0, 'Total');

$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    $sheet0->setCellValue($colSheet[$i], 25);
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");

$baris0 += 1;
$sheet0->setCellValue('C' . $baris0, 'Execution Rate');

$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    $sheet0->setCellValue($colSheet[$i], '=IFERROR(ROUND(((' . cols($baris0, true)[$i] . ($baris0_all_mo_no_start) . '/' . cols($baris0, true)[$i] . ($baris0 - 1) . ')*100), 2),"-")');
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");

$baris0 += 1;
$sheet0->setCellValue('C' . $baris0, 'PM Compliance W/O S/P Shortage');

$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    $sheet0->setCellValue($colSheet[$i], '=IFERROR(ROUND((((' . cols($baris0, true)[$i] . ($baris0_mo_start) . '+' . cols($baris0, true)[$i] . ($baris0_mo_sp_start) . ')/(' . cols($baris0, true)[$i] . ($baris0_mo_start + 5) . '+' . cols($baris0, true)[$i] . ($baris0_mo_sp_start + 5) . '))*100), 2),"-")');
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");

$baris0 += 1;
$sheet0->setCellValue('C' . $baris0, 'On Time Rate Total');

$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    $sheet0->setCellValue($colSheet[$i], '=IFERROR(ROUND((((' . cols($baris0, true)[$i] . ($baris0_mo_start + 1) . '+' . cols($baris0, true)[$i] . ($baris0_mo_sp_start + 1) . ')/(' . cols($baris0, true)[$i] . ($baris0_mo_start + 5) . '+' . cols($baris0, true)[$i] . ($baris0_mo_sp_start + 5) . '))*100), 2),"-")');
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");


// ===============================================================================================================
// Total Semua MO
// ===============================================================================================================

$baris0 += 1;
$sheet0->setCellValue('B' . $baris0, 'Total Semua MO');
$sheet0->mergeCells('B' . $baris0 . ':B' . ($baris0 + 2));
$sheet0->setCellValue('C' . $baris0, 'S/P Shortage at this month');

$baris0_all_mo_start = $baris0;
$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    $sheet0->setCellValue($colSheet[$i], 15);
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");
// $sheet0->setCellValue('P' . $baris0, "=SUM(" . $colSheet[0] . ":" . $colSheet[count($colSheet) - 1] . ")");


$baris0 += 1;
$sheet0->setCellValue('C' . $baris0, 'S/P Shortage acumulation');

$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    $sheet0->setCellValue($colSheet[$i], 25);
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");

$baris0 += 1;
$sheet0->setCellValue('C' . $baris0, 'PM Compliance Total With S/P Shortage');

$colSheet = cols($baris0);
for ($i = 0; $i < count($colSheet); $i++) {
    $sheet0->setCellValue($colSheet[$i], '=IFERROR(ROUND((((' . cols($baris0, true)[$i] . ($baris0_mo_start) . '+' . cols($baris0, true)[$i] . ($baris0_mo_sp_start) . ')/(' . cols($baris0, true)[$i] . ($baris0_mo_start + 5) . '+' . cols($baris0, true)[$i] . ($baris0_mo_sp_start + 5) . '+' . cols($baris0, true)[$i] . ($baris0_all_mo_start) . '))*100), 2),"-")');
}
$sheet0->setCellValue('P' . $baris0, "=SUM(D" . $baris0 . ":O" . $baris0 . ")");

// Style
$sheet0->getStyle('B' . $baris0_mulai . ':P' . $baris0)->applyFromArray($font_style);
$sheet0->getStyle('B' . $baris0_mulai . ':C' . $baris0)->applyFromArray($font_bold);
$sheet0->getStyle('B' . $baris0_mulai . ':P' . $baris0)->applyFromArray($style);
$sheet0->getStyle('C' . $baris0_mulai . ':C' . $baris0)->applyFromArray($horizontal_left);
$sheet0->getStyle('B' . $baris0_mulai . ':P' . $baris0)->applyFromArray($border_style);

// Create Excel
$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
// // $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->setPreCalculateFormulas(true);
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="PM Compliance Report.xlsx"');
$objWriter->save("php://output");
