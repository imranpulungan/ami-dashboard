<?php
require_once 'dep.php';
// ===================================
// --------------------- end template ---------------------------------


//----------------pembuatan Sheet--------------------
$objPHPExcel->createSheet();
$sheet0      = $objPHPExcel->setActiveSheetIndex(0);
//------------------ end pembuatan sheet-------------

//----------------------- Penamaan Sheet---------------------------
$sheet0->setTitle('1. COVER');
// ------------------ end penamaan sheet -----------------------------

// -------------------- Setting Dimension -------------------
// COLLUMN
$col08 = ['A', 'AY'];
$col18 = ['B', 'C', 'D', 'E', 'F', 'G', 'H', 'L', 'M', 'N', 'O', 'P', 'Q', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
$col33 = ['I', 'J', 'K', 'R', 'AA', 'AB', 'AC', 'AD', 'AE', 'AF', 'AG', 'AH', 'AI', 'AJ', 'AK', 'AL', 'AM', 'AN', 'AO', 'AP', 'AQ', 'AR', 'AS', 'AT', 'AU', 'AV', 'AW', 'AX'];

// col 0.8
for ($i = 0; $i < count($col08); $i++) {
    $sheet0->getColumnDimension($col08[$i])->setWidth(0.8);
}

// col 1.8
for ($i = 0; $i < count($col18); $i++) {
    $sheet0->getColumnDimension($col18[$i])->setWidth(1.8);
}

// col 3.3
for ($i = 0; $i < count($col33); $i++) {
    $sheet0->getColumnDimension($col33[$i])->setWidth(3.3);
}

// $sheet0->getColumnDimension('B')->setWidth(1.8);
// $sheet0->getColumnDimension('C')->setWidth(1.8);
// $sheet0->getColumnDimension('D')->setWidth(1.8);
// $sheet0->getColumnDimension('E')->setWidth(1.8);
// $sheet0->getColumnDimension('F')->setWidth(1.8);
// $sheet0->getColumnDimension('G')->setWidth(1.8);
// $sheet0->getColumnDimension('H')->setWidth(1.8);
// $sheet0->getColumnDimension('I')->setWidth(3.3);
// $sheet0->getColumnDimension('J')->setWidth(3.3);
// $sheet0->getColumnDimension('K')->setWidth(3.3);
// $sheet0->getColumnDimension('L')->setWidth(1.8);

// ROW
$sheet0->getRowDimension(1)->setRowHeight(5.5);
//-------------------------------Start Sheet Cover -----------------------


$baris0 = 2;
$baris0_mulai = $baris0;
$sheet0->setCellValue('B' . $baris0, 'Periode');
$sheet0->mergeCells('B' . $baris0 . ':I' . $baris0);
$sheet0->setCellValue('J' . $baris0, $data['dari'] . ' ~ ' . $data['sampai']);
$sheet0->mergeCells('J' . $baris0 . ':U' . $baris0);
$sheet0->setCellValue('V' . $baris0, 'Weekly Report SMT ACC');
$sheet0->getStyle('V' . $baris0 . ':AX' . $baris0)->applyFromArray($style);

$baris0 += 1;
$sheet0->setCellValue('B' . $baris0, 'Minggu Ke-');
$sheet0->mergeCells('B' . $baris0 . ':I' . $baris0);
$sheet0->setCellValue('J' . $baris0, '1');
$sheet0->mergeCells('J' . $baris0 . ':U' . $baris0);
$sheet0->getStyle('J' . $baris0 . ':U' . $baris0)->applyFromArray($horizontal_left);

$baris0 += 1;
$sheet0->setCellValue('B' . $baris0, 'No');
$sheet0->mergeCells('B' . $baris0 . ':I' . $baris0);
$sheet0->setCellValue('J' . $baris0, 'SMT-ME-WR-' . date('dmY'));
$sheet0->mergeCells('J' . $baris0 . ':U' . $baris0);

$baris0 += 1;
$sheet0->setCellValue('B' . $baris0, 'Dibuat Oleh');
$sheet0->mergeCells('B' . $baris0 . ':I' . $baris0);
$sheet0->setCellValue('J' . $baris0, getSession(('nama_personil')));
$sheet0->mergeCells('J' . $baris0 . ':U' . $baris0);

$sheet0->getStyle('B' . $baris0_mulai . ':AX' . $baris0)->getFont()->setSize(8);
$sheet0->getStyle('B' . $baris0_mulai . ':AX' . $baris0)->applyFromArray($font_style);
$sheet0->getStyle('B' . $baris0_mulai . ':AX' . $baris0)->applyFromArray($vertical_middle);
$sheet0->getStyle('B' . $baris0_mulai . ':AX' . $baris0)->applyFromArray($border_style);
$sheet0->mergeCells('V' . $baris0_mulai . ':AX' . $baris0);
$sheet0->getStyle('V' . $baris0_mulai . ':AX' . $baris0)->getFont()->setSize(18);

$baris0 += 2;
$baris0_kedua = $baris0;
$sheet0->setCellValue('B' . $baris0, 'I. Performance');

$baris0 += 1;
$sheet0->setCellValue('B' . $baris0, 'Item');
$sheet0->mergeCells('B' . $baris0 . ':Q' . ($baris0 + 1));
$sheet0->setCellValue('R' . $baris0, 'Unit');
$sheet0->mergeCells('R' . $baris0 . ':T' . ($baris0 + 1));
$sheet0->setCellValue('U' . $baris0, 'Monthly Target');
$sheet0->mergeCells('U' . $baris0 . ':X' . ($baris0 + 1));
$sheet0->setCellValue('Y' . $baris0, 'Weekly');
$sheet0->mergeCells('Y' . $baris0 . ':AM' . $baris0);
$sheet0->setCellValue('AN' . $baris0, 'Monthly Actual');
$sheet0->mergeCells('AN' . $baris0 . ':AQ' . ($baris0 + 1));
$sheet0->setCellValue('AR' . $baris0, 'Keterangan');
$sheet0->mergeCells('AR' . $baris0 . ':AX' . ($baris0 + 1));

$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($font_style);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($style);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($border_style);

$baris0 += 1;
$sheet0->setCellValue('Y' . $baris0, 'W1');
$sheet0->mergeCells('Y' . $baris0 . ':AA' . $baris0);
$sheet0->setCellValue('AB' . $baris0, 'W2');
$sheet0->mergeCells('AB' . $baris0 . ':AD' . $baris0);
$sheet0->setCellValue('AE' . $baris0, 'W3');
$sheet0->mergeCells('AE' . $baris0 . ':AG' . $baris0);
$sheet0->setCellValue('AH' . $baris0, 'W4');
$sheet0->mergeCells('AH' . $baris0 . ':AJ' . $baris0);
$sheet0->setCellValue('AK' . $baris0, 'W5');
$sheet0->mergeCells('AK' . $baris0 . ':AM' . $baris0);

$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($font_style);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($style);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($border_style);

$baris0 += 1;
$sheet0->setCellValue('B' . $baris0, 'Availability');
$sheet0->mergeCells('B' . $baris0 . ':Q' . $baris0);
$sheet0->setCellValue('R' . $baris0, '%');
$sheet0->mergeCells('R' . $baris0 . ':T' . $baris0);
$sheet0->setCellValue('U' . $baris0, '94');
$sheet0->mergeCells('U' . $baris0 . ':X' . $baris0);
$sheet0->setCellValue('Y' . $baris0, '97.19');
$sheet0->mergeCells('Y' . $baris0 . ':AA' . $baris0);
$sheet0->setCellValue('AB' . $baris0, '');
$sheet0->mergeCells('AB' . $baris0 . ':AD' . $baris0);
$sheet0->setCellValue('AE' . $baris0, '');
$sheet0->mergeCells('AE' . $baris0 . ':AG' . $baris0);
$sheet0->setCellValue('AH' . $baris0, '');
$sheet0->mergeCells('AH' . $baris0 . ':AJ' . $baris0);
$sheet0->setCellValue('AK' . $baris0, '');
$sheet0->mergeCells('AK' . $baris0 . ':AM' . $baris0);
$sheet0->setCellValue('AN' . $baris0, '97.19');
$sheet0->mergeCells('AN' . $baris0 . ':AQ' . $baris0);
$sheet0->setCellValue('AR' . $baris0, '16 ACC X 7 hari');
$sheet0->mergeCells('AR' . $baris0 . ':AX' . $baris0);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($border_style);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($border_style_hair_bottom);

$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($font_style);
$sheet0->getStyle('B' . $baris0 . ':Q' . $baris0)->applyFromArray($vertical_middle);
$sheet0->getStyle('R' . $baris0 . ':AX' . $baris0)->applyFromArray($style);
$sheet0->getStyle('B' . $baris0 . ':Q' . $baris0)->getFont()->setItalic(true);

$baris0 += 1;
$sheet0->setCellValue('B' . $baris0, 'Maintenance down time (Planned)');
$sheet0->mergeCells('B' . $baris0 . ':Q' . $baris0);
$sheet0->setCellValue('R' . $baris0, 'Hour');
$sheet0->mergeCells('R' . $baris0 . ':T' . $baris0);
$sheet0->setCellValue('U' . $baris0, '');
$sheet0->mergeCells('U' . $baris0 . ':X' . $baris0);
$sheet0->setCellValue('Y' . $baris0, '119.17');
$sheet0->mergeCells('Y' . $baris0 . ':AA' . $baris0);
$sheet0->setCellValue('AB' . $baris0, '');
$sheet0->mergeCells('AB' . $baris0 . ':AD' . $baris0);
$sheet0->setCellValue('AE' . $baris0, '');
$sheet0->mergeCells('AE' . $baris0 . ':AG' . $baris0);
$sheet0->setCellValue('AH' . $baris0, '');
$sheet0->mergeCells('AH' . $baris0 . ':AJ' . $baris0);
$sheet0->setCellValue('AK' . $baris0, '');
$sheet0->mergeCells('AK' . $baris0 . ':AM' . $baris0);
$sheet0->setCellValue('AN' . $baris0, '119.17');
$sheet0->mergeCells('AN' . $baris0 . ':AQ' . $baris0);
$sheet0->setCellValue('AR' . $baris0, '-');
$sheet0->mergeCells('AR' . $baris0 . ':AX' . $baris0);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($border_style);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($border_style_hair_top_bottom);

$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($font_style);
$sheet0->getStyle('B' . $baris0 . ':Q' . $baris0)->applyFromArray($vertical_middle);
$sheet0->getStyle('R' . $baris0 . ':AX' . $baris0)->applyFromArray($style);
$sheet0->getStyle('B' . $baris0 . ':Q' . $baris0)->getFont()->setItalic(true);

$baris0 += 1;
$sheet0->setCellValue('B' . $baris0, 'Maintenance down time (Unplanned)');
$sheet0->mergeCells('B' . $baris0 . ':Q' . $baris0);
$sheet0->setCellValue('R' . $baris0, 'Hour');
$sheet0->mergeCells('R' . $baris0 . ':T' . $baris0);
$sheet0->setCellValue('U' . $baris0, '');
$sheet0->mergeCells('U' . $baris0 . ':X' . $baris0);
$sheet0->setCellValue('Y' . $baris0, '72.08');
$sheet0->mergeCells('Y' . $baris0 . ':AA' . $baris0);
$sheet0->setCellValue('AB' . $baris0, '');
$sheet0->mergeCells('AB' . $baris0 . ':AD' . $baris0);
$sheet0->setCellValue('AE' . $baris0, '');
$sheet0->mergeCells('AE' . $baris0 . ':AG' . $baris0);
$sheet0->setCellValue('AH' . $baris0, '');
$sheet0->mergeCells('AH' . $baris0 . ':AJ' . $baris0);
$sheet0->setCellValue('AK' . $baris0, '');
$sheet0->mergeCells('AK' . $baris0 . ':AM' . $baris0);
$sheet0->setCellValue('AN' . $baris0, '72.08');
$sheet0->mergeCells('AN' . $baris0 . ':AQ' . $baris0);
$sheet0->setCellValue('AR' . $baris0, '-');
$sheet0->mergeCells('AR' . $baris0 . ':AX' . $baris0);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($border_style);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($border_style_hair_top_bottom);

$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($font_style);
$sheet0->getStyle('B' . $baris0 . ':Q' . $baris0)->applyFromArray($vertical_middle);
$sheet0->getStyle('R' . $baris0 . ':AX' . $baris0)->applyFromArray($style);
$sheet0->getStyle('B' . $baris0 . ':Q' . $baris0)->getFont()->setItalic(true);

$baris0 += 1;
$sheet0->setCellValue('B' . $baris0, 'Trouble Frequency');
$sheet0->mergeCells('B' . $baris0 . ':Q' . $baris0);
$sheet0->setCellValue('R' . $baris0, 'Times');
$sheet0->mergeCells('R' . $baris0 . ':T' . $baris0);
$sheet0->setCellValue('U' . $baris0, '');
$sheet0->mergeCells('U' . $baris0 . ':X' . $baris0);
$sheet0->setCellValue('Y' . $baris0, '52');
$sheet0->mergeCells('Y' . $baris0 . ':AA' . $baris0);
$sheet0->setCellValue('AB' . $baris0, '');
$sheet0->mergeCells('AB' . $baris0 . ':AD' . $baris0);
$sheet0->setCellValue('AE' . $baris0, '');
$sheet0->mergeCells('AE' . $baris0 . ':AG' . $baris0);
$sheet0->setCellValue('AH' . $baris0, '');
$sheet0->mergeCells('AH' . $baris0 . ':AJ' . $baris0);
$sheet0->setCellValue('AK' . $baris0, '');
$sheet0->mergeCells('AK' . $baris0 . ':AM' . $baris0);
$sheet0->setCellValue('AN' . $baris0, '52');
$sheet0->mergeCells('AN' . $baris0 . ':AQ' . $baris0);
$sheet0->setCellValue('AR' . $baris0, '-');
$sheet0->mergeCells('AR' . $baris0 . ':AX' . $baris0);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($border_style);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($border_style_hair_top_bottom);

$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($font_style);
$sheet0->getStyle('B' . $baris0 . ':Q' . $baris0)->applyFromArray($vertical_middle);
$sheet0->getStyle('R' . $baris0 . ':AX' . $baris0)->applyFromArray($style);
$sheet0->getStyle('B' . $baris0 . ':Q' . $baris0)->getFont()->setItalic(true);

$baris0 += 1;
$sheet0->setCellValue('B' . $baris0, 'MTBF');
$sheet0->mergeCells('B' . $baris0 . ':Q' . $baris0);
$sheet0->setCellValue('R' . $baris0, 'Hour');
$sheet0->mergeCells('R' . $baris0 . ':T' . $baris0);
$sheet0->setCellValue('U' . $baris0, '');
$sheet0->mergeCells('U' . $baris0 . ':X' . $baris0);
$sheet0->setCellValue('Y' . $baris0, '50.31');
$sheet0->mergeCells('Y' . $baris0 . ':AA' . $baris0);
$sheet0->setCellValue('AB' . $baris0, '');
$sheet0->mergeCells('AB' . $baris0 . ':AD' . $baris0);
$sheet0->setCellValue('AE' . $baris0, '');
$sheet0->mergeCells('AE' . $baris0 . ':AG' . $baris0);
$sheet0->setCellValue('AH' . $baris0, '');
$sheet0->mergeCells('AH' . $baris0 . ':AJ' . $baris0);
$sheet0->setCellValue('AK' . $baris0, '');
$sheet0->mergeCells('AK' . $baris0 . ':AM' . $baris0);
$sheet0->setCellValue('AN' . $baris0, '50.31');
$sheet0->mergeCells('AN' . $baris0 . ':AQ' . $baris0);
$sheet0->setCellValue('AR' . $baris0, '-');
$sheet0->mergeCells('AR' . $baris0 . ':AX' . $baris0);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($border_style);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($border_style_hair_top_bottom);

$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($font_style);
$sheet0->getStyle('B' . $baris0 . ':Q' . $baris0)->applyFromArray($vertical_middle);
$sheet0->getStyle('R' . $baris0 . ':AX' . $baris0)->applyFromArray($style);

$baris0 += 1;
$sheet0->setCellValue('B' . $baris0, 'MTTR');
$sheet0->mergeCells('B' . $baris0 . ':Q' . $baris0);
$sheet0->setCellValue('R' . $baris0, 'Hour');
$sheet0->mergeCells('R' . $baris0 . ':T' . $baris0);
$sheet0->setCellValue('U' . $baris0, '');
$sheet0->mergeCells('U' . $baris0 . ':X' . $baris0);
$sheet0->setCellValue('Y' . $baris0, '1.39');
$sheet0->mergeCells('Y' . $baris0 . ':AA' . $baris0);
$sheet0->setCellValue('AB' . $baris0, '');
$sheet0->mergeCells('AB' . $baris0 . ':AD' . $baris0);
$sheet0->setCellValue('AE' . $baris0, '');
$sheet0->mergeCells('AE' . $baris0 . ':AG' . $baris0);
$sheet0->setCellValue('AH' . $baris0, '');
$sheet0->mergeCells('AH' . $baris0 . ':AJ' . $baris0);
$sheet0->setCellValue('AK' . $baris0, '');
$sheet0->mergeCells('AK' . $baris0 . ':AM' . $baris0);
$sheet0->setCellValue('AN' . $baris0, '1.39');
$sheet0->mergeCells('AN' . $baris0 . ':AQ' . $baris0);
$sheet0->setCellValue('AR' . $baris0, '-');
$sheet0->mergeCells('AR' . $baris0 . ':AX' . $baris0);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($border_style);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($border_style_hair_top_bottom);

$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($font_style);
$sheet0->getStyle('B' . $baris0 . ':Q' . $baris0)->applyFromArray($vertical_middle);
$sheet0->getStyle('R' . $baris0 . ':AX' . $baris0)->applyFromArray($style);

$baris0 += 1;
$sheet0->setCellValue('B' . $baris0, 'PM Compliance');
$sheet0->mergeCells('B' . $baris0 . ':Q' . $baris0);
$sheet0->setCellValue('R' . $baris0, '%');
$sheet0->mergeCells('R' . $baris0 . ':T' . $baris0);
$sheet0->setCellValue('U' . $baris0, '');
$sheet0->mergeCells('U' . $baris0 . ':X' . $baris0);
$sheet0->setCellValue('Y' . $baris0, '101.64');
$sheet0->mergeCells('Y' . $baris0 . ':AA' . $baris0);
$sheet0->setCellValue('AB' . $baris0, '');
$sheet0->mergeCells('AB' . $baris0 . ':AD' . $baris0);
$sheet0->setCellValue('AE' . $baris0, '');
$sheet0->mergeCells('AE' . $baris0 . ':AG' . $baris0);
$sheet0->setCellValue('AH' . $baris0, '');
$sheet0->mergeCells('AH' . $baris0 . ':AJ' . $baris0);
$sheet0->setCellValue('AK' . $baris0, '');
$sheet0->mergeCells('AK' . $baris0 . ':AM' . $baris0);
$sheet0->setCellValue('AN' . $baris0, '101.64');
$sheet0->mergeCells('AN' . $baris0 . ':AQ' . $baris0);
$sheet0->setCellValue('AR' . $baris0, 'SAP + internal (cleaning, dll)');
$sheet0->mergeCells('AR' . $baris0 . ':AX' . $baris0);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($border_style);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($border_style_hair_top_bottom);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($border_style_bottom);

$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($font_style);
$sheet0->getStyle('B' . $baris0 . ':Q' . $baris0)->applyFromArray($vertical_middle);
$sheet0->getStyle('R' . $baris0 . ':AX' . $baris0)->applyFromArray($style);
$sheet0->getStyle('B' . $baris0 . ':Q' . $baris0)->getFont()->setItalic(true);

// $objRichText = new PHPExcel_RichText();
// $objRichText->createText('M');

// $objCubed = $objRichText->createTextRun('3');
// $objCubed->getFont()->setSuperScript(true);

// $objPHPExcel->getActiveSheet()->getCell('A18')->setValue($objRichText);
// GIVE IT STYLE
// $sheet0->getStyle('B' . $baris0 . ':J' . $baris0)->getFont()->setBold(true);


$baris0 += 2;
$baris0_ketiga = $baris0;
$sheet0->setCellValue('B' . $baris0, 'II.1. PM Work (with Spare Part');

$baris0 += 1;
$sheet0->setCellValue('B' . $baris0, 'Item');
$sheet0->mergeCells('B' . $baris0 . ':M' . ($baris0 + 1));
$sheet0->setCellValue('N' . $baris0, 'Unit');
$sheet0->mergeCells('N' . $baris0 . ':R' . ($baris0 + 1));
$sheet0->setCellValue('S' . $baris0, '2018');
$sheet0->mergeCells('S' . $baris0 . ':Z' . $baris0);
$sheet0->setCellValue('AA' . $baris0, '2019');
$sheet0->mergeCells('AA' . $baris0 . ':AH' . $baris0);
$sheet0->setCellValue('AI' . $baris0, '2020');
$sheet0->mergeCells('AI' . $baris0 . ':AP' . $baris0);
$sheet0->setCellValue('AQ' . $baris0, '2021');
$sheet0->mergeCells('AQ' . $baris0 . ':AX' . $baris0);

$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($font_style);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($style);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($border_style);

$baris0 += 1;
$sheet0->setCellValue('S' . $baris0, 'Shortage');
$sheet0->mergeCells('S' . $baris0 . ':V' . $baris0);
$sheet0->setCellValue('W' . $baris0, 'Complete');
$sheet0->mergeCells('W' . $baris0 . ':Z' . $baris0);
$sheet0->setCellValue('AA' . $baris0, 'Shortage');
$sheet0->mergeCells('AA' . $baris0 . ':AD' . $baris0);
$sheet0->setCellValue('AE' . $baris0, 'Complete');
$sheet0->mergeCells('AE' . $baris0 . ':AH' . $baris0);
$sheet0->setCellValue('AI' . $baris0, 'Shortage');
$sheet0->mergeCells('AI' . $baris0 . ':AL' . $baris0);
$sheet0->setCellValue('AM' . $baris0, 'Complete');
$sheet0->mergeCells('AM' . $baris0 . ':AP' . $baris0);
$sheet0->setCellValue('AQ' . $baris0, 'Shortage');
$sheet0->mergeCells('AQ' . $baris0 . ':AT' . $baris0);
$sheet0->setCellValue('Au' . $baris0, 'Complete');
$sheet0->mergeCells('Au' . $baris0 . ':AX' . $baris0);

$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($font_style);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($style);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($border_style);

$baris0 += 1;
$sheet0->setCellValue('B' . $baris0, 'Available');
$sheet0->mergeCells('B' . $baris0 . ':M' . $baris0);
$sheet0->setCellValue('N' . $baris0, 'Item');
$sheet0->mergeCells('N' . $baris0 . ':R' . $baris0);
$sheet0->setCellValue('S' . $baris0, '2');
$sheet0->mergeCells('S' . $baris0 . ':V' . $baris0);
$sheet0->setCellValue('W' . $baris0, '154');
$sheet0->mergeCells('W' . $baris0 . ':Z' . $baris0);
$sheet0->setCellValue('AA' . $baris0, '12');
$sheet0->mergeCells('AA' . $baris0 . ':AD' . $baris0);
$sheet0->setCellValue('AE' . $baris0, '74');
$sheet0->mergeCells('AE' . $baris0 . ':AH' . $baris0);
$sheet0->setCellValue('AI' . $baris0, '98');
$sheet0->mergeCells('AI' . $baris0 . ':AL' . $baris0);
$sheet0->setCellValue('AM' . $baris0, '37');
$sheet0->mergeCells('AM' . $baris0 . ':AP' . $baris0);
$sheet0->setCellValue('AQ' . $baris0, '143');
$sheet0->mergeCells('AQ' . $baris0 . ':AT' . $baris0);
$sheet0->setCellValue('Au' . $baris0, '25');
$sheet0->mergeCells('Au' . $baris0 . ':AX' . $baris0);

$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($border_style);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($border_style_hair_top_bottom);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($font_style);
$sheet0->getStyle('B' . $baris0 . ':Q' . $baris0)->applyFromArray($vertical_middle);
$sheet0->getStyle('N' . $baris0 . ':AX' . $baris0)->applyFromArray($style);

$baris0 += 1;
$sheet0->setCellValue('B' . $baris0, 'Execute');
$sheet0->mergeCells('B' . $baris0 . ':M' . $baris0);
$sheet0->setCellValue('N' . $baris0, 'Item');
$sheet0->mergeCells('N' . $baris0 . ':R' . $baris0);
$sheet0->setCellValue('S' . $baris0, '');
$sheet0->mergeCells('S' . $baris0 . ':V' . $baris0);
$sheet0->setCellValue('W' . $baris0, '148');
$sheet0->mergeCells('W' . $baris0 . ':Z' . $baris0);
$sheet0->setCellValue('AA' . $baris0, '');
$sheet0->mergeCells('AA' . $baris0 . ':AD' . $baris0);
$sheet0->setCellValue('AE' . $baris0, '65');
$sheet0->mergeCells('AE' . $baris0 . ':AH' . $baris0);
$sheet0->setCellValue('AI' . $baris0, '');
$sheet0->mergeCells('AI' . $baris0 . ':AL' . $baris0);
$sheet0->setCellValue('AM' . $baris0, '35');
$sheet0->mergeCells('AM' . $baris0 . ':AP' . $baris0);
$sheet0->setCellValue('AQ' . $baris0, '');
$sheet0->mergeCells('AQ' . $baris0 . ':AT' . $baris0);
$sheet0->setCellValue('Au' . $baris0, '19');
$sheet0->mergeCells('Au' . $baris0 . ':AX' . $baris0);

$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($border_style);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($border_style_hair_top_bottom);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($font_style);
$sheet0->getStyle('B' . $baris0 . ':Q' . $baris0)->applyFromArray($vertical_middle);
$sheet0->getStyle('N' . $baris0 . ':AX' . $baris0)->applyFromArray($style);
$sheet0->getStyle('B' . $baris0 . ':AX' . $baris0)->applyFromArray($border_style_bottom);

$baris0 += 2;

// Set all font and style
$sheet0->getStyle('B' . $baris0_kedua . ':AX' . $baris0)->getFont()->setSize(8);
$sheet0->getStyle('B' . $baris0_kedua . ':AX' . $baris0)->applyFromArray($font_style);

$sheet0->getStyle('A1:AY' . $baris0)->applyFromArray($border_style_outer_bold);

// Create Excel
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Perencanaan Kegiatan Tahunan.xlsx"');
$objWriter->save("php://output");
