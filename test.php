<?php

/**
 * @name test
 */

require_once 'src/autoload.php';

use pitozoo\ReadPdf\ReadPdf;

## time
$timeStr = date('Y-m-d H:i:s');


## initiate FPDI
$pdf = new ReadPdf();

## source && pageCount
$pageCount = $pdf->setSourceFile("source/2800-yidejia.pdf");

## 中文字体 文字大小 文字颜色
$pdf->AddGBFont('simhei', '黑体');
$pdf->SetFont('simhei', '', 11);
$pdf->SetTextColor(21, 21, 21);

## loop
for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {

  ## 1. import - add - use
  $tplId = $pdf->importPage($pageNo);
  $pdf->AddPage();
  $pdf->useImportedPage($tplId, ['adjustPageSize' => true]);

  ## 5. 在不同页面里输出不同的内容
  switch ($pageNo) {
    case 1:

      $textX = 10;
      $textY = 10;
      $pdf->SetXY($textX, $textY);
      $msg = '第一页' . $timeStr;
      $writeText = iconv("utf-8", "gbk", $msg);
      $pdf->Write(0, $writeText);

      break;

    case 2:

      $textX = 10;
      $textY = 10;
      $pdf->SetXY($textX, $textY);
      $pdf->Write(0, 'second xxxxxx');

      break;
  }

}


## 导出为pdf
$savePath = __DIR__ . '/source/';
$savePdfName = 'new.pdf';
$pdf->Output('F', $savePdfName);

## 直接浏览器里输出为 pdf
// $pdf->Output( );         





