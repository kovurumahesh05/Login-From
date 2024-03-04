
<?php
// Include PHPExcel library (PHPExcel is used in this example)
require_once 'PHPExcel/PHPExcel.php';

// Load the Excel file
$excelFile = 'excel.xlsx';
$objPHPExcel = PHPExcel_IOFactory::load($excelFile);

// Get the first sheet
$sheet = $objPHPExcel->getActiveSheet();

// Loop through rows (assuming data starts from row 2, adjust as needed)
foreach ($sheet->getRowIterator(2) as $row) {
    // Assuming columns are in A, B, C, and D
    $data = [
        'column1' => $sheet->getCell('A' . $row->getRowIndex())->getValue(),
        'column2' => $sheet->getCell('B' . $row->getRowIndex())->getValue(),
        'column3' => $sheet->getCell('C' . $row->getRowIndex())->getValue(),
        'column4' => $sheet->getCell('D' . $row->getRowIndex())->getValue(),
    ];

    // Process the data as needed (e.g., display or perform operations)
    echo "Row ". $row->getRowIndex() . ": " . implode(', ', $data) . "<br>";
}
?>