# README.md


+ 地址
https://packagist.org/packages/pitozoo/readpdf

+ 命令:     

```bash
composer require pitozoo/readpdf
```


演示: 

```php
## 通过 composer 安装了
require_once 'vendor/autoload.php';


## time
$timeStr = date('Y-m-d H:i:s');


## initiate FPDI
$pdf = new \ReadPdf\ReadPdf();

## source && pageCount
$pageCount = $pdf->setSourceFile( "test.pdf" );

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
      ## 假设这是第1页的内容
      ## textX  textY 被写入文字的 X Y 坐标
      $textX = 10;
      $textY = 10;
      $pdf->SetXY($textX, $textY);
      $msg = 'test第一页的内容xxx :' . $timeStr;
      $writeText = iconv("utf-8", "gbk", $msg);
      $pdf->Write(0, $writeText);

      break;

    case 2:
      ## 假设这是第2页的内容
      ## textX  textY 被写入文字的 X Y 坐标
      $textX = 10;
      $textY = 20;
      $pdf->SetXY($textX, $textY);
      $pdf->Write(0, '第二页大xxx内容second page xxxxxx');

      break;
  }

}

## 直接浏览器里输出为 pdf
// $pdf->Output( );         



## 导出为pdf
var_dump( $timeStr );
$savePdfName = 'new.pdf';
$pdf->Output( 'F', $savePdfName );

```