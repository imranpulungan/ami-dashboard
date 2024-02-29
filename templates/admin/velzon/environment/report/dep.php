<?php

$objPHPExcel = new PHPExcel();

// ------------------------- style template -------------------------
$style = array(
    'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        'rotation'   => 0,
        'wrap'       => true
    )
);

$vertical_middle = array(
    'alignment' => array(
        'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        'rotation'   => 0,
    )
);

$horizontal_left = array(
    'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
        'rotation'   => 0,
    )
);

$font_style = array(
    'font'  => array(
        'name'  => 'Arial'
    )
);

$font_bold = array(
    'font'  => array(
        'bold'  => true
    )
);
// ===================================
// BORDER STYLE
// ===================================
$border_style = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN,
            'color' => array('rgb' => '000000')
        )
    )
);

$border_style_bold = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_MEDIUM,
            'color' => array('rgb' => '000000')
        )
    )
);

$border_style_hair = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_HAIR,
            'color' => array('rgb' => '000000')
        )
    )
);

$border_style_hair_bottom = array(
    'borders' => array(
        'bottom' => array(
            'style' => PHPExcel_Style_Border::BORDER_HAIR,
            'color' => array('rgb' => '000000')
        )
    )
);

$border_style_hair_top_bottom = array(
    'borders' => array(
        'top' => array(
            'style' => PHPExcel_Style_Border::BORDER_HAIR,
            'color' => array('rgb' => '000000')
        ),
        'bottom' => array(
            'style' => PHPExcel_Style_Border::BORDER_HAIR,
            'color' => array('rgb' => '000000')
        )
    )
);

$border_style_outer_bold = array(
    'borders' => array(
        'left' => array(
            'style' => PHPExcel_Style_Border::BORDER_MEDIUM,
            'color' => array('rgb' => '000000')
        ),
        'right' => array(
            'style' => PHPExcel_Style_Border::BORDER_MEDIUM,
            'color' => array('rgb' => '000000')
        ),
        'top' => array(
            'style' => PHPExcel_Style_Border::BORDER_MEDIUM,
            'color' => array('rgb' => '000000')
        ),
        'bottom' => array(
            'style' => PHPExcel_Style_Border::BORDER_MEDIUM,
            'color' => array('rgb' => '000000')
        )
    )
);

$border_style_rigth = array(
    'borders' => array(
        'right' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN,
            'color' => array('rgb' => '000000')
        )
    )
);

$border_style_rigth_bold = array(
    'borders' => array(
        'right' => array(
            'style' => PHPExcel_Style_Border::BORDER_MEDIUM,
            'color' => array('rgb' => '000000')
        )
    )
);

$border_style_left = array(
    'borders' => array(
        'left' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN,
            'color' => array('rgb' => '000000')
        )
    )
);

$border_style_left_right = array(
    'borders' => array(
        'left' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN,
            'color' => array('rgb' => '000000')
        ),
        'right' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN,
            'color' => array('rgb' => '000000')
        )
    )
);

$border_style_bottom = array(
    'borders' => array(
        'bottom' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN,
            'color' => array('rgb' => '000000')
        )
    )
);
// ===================================

// ===================================
// BORDER NONE
// ===================================
$border_style_none = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_NONE,
        )
    )
);

$border_style_none_bottom = array(
    'borders' => array(
        'bottom' => array(
            'style' => PHPExcel_Style_Border::BORDER_NONE,
        )
    )
);

$border_style_none_top = array(
    'borders' => array(
        'top' => array(
            'style' => PHPExcel_Style_Border::BORDER_NONE,
        )
    )
);

$border_style_none_left = array(
    'borders' => array(
        'left' => array(
            'style' => PHPExcel_Style_Border::BORDER_NONE,
        )
    )
);

$border_style_none_right = array(
    'borders' => array(
        'rigth' => array(
            'style' => PHPExcel_Style_Border::BORDER_NONE,
        )
    )
);

function SetCellBackColor($sheet, $cells, $color)
{
    $sheet->getStyle($cells)->getFill()->applyFromArray(array(
        'type' => PHPExcel_Style_Fill::FILL_SOLID,
        'startcolor' => array(
            'rgb' => $color
        )
    ));
}

function SetCellColor($sheet, $cells, $color)
{
    $sheet->getStyle($cells)->getFont()->getColor()->applyFromArray(
        array(
            'rgb' => $color
        )
    );
}
