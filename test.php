<?php

/**
 * 
 */


require_once 'src/autoload.php';



use setasign\Fpdi\Fpdi;

## initiate FPDI
$pdf = new Fpdi();

## source && pageCount
$pageCount = $pdf->setSourceFile( "source/2800-yidejia.pdf" );

## 中文
$pdf->AddGBFont( 'simhei' , '黑体' );



## loop
for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
	
	## 1. import
	$tplId = $pdf->importPage( $pageNo );

	## 2. add new page
	$pdf->AddPage();

	## 3. use
	$pdf->useImportedPage( $tplId , ['adjustPageSize' => true] );

	## 4. write
	$pdf->SetFont( 'Helvetica' );
	$pdf->SetTextColor(255, 0, 0);

	## 5. 在不同页面里输出不同的内容 
	switch ($pageNo) {
		case 1:
			$pdf->SetXY(30, 30);
			$pdf->Write(0, '第一页');
			break;
		
		case 2:
			$pdf->SetXY(30, 30);
			$pdf->Write(0, 'second xxxxxx');
			break;
	}

}

// var_dump( __FILE__ );
// var_dump( __DIR__ );
// exit();

## 直接浏览器里输出为 pdf
$savePath = __DIR__ . '/source/';
$savePdfName = 'test.pdf';
// $pdf->Output( 'F' , $savePdfName );         
$pdf->Output( );         


## 或者可以处理为 导出为pdf



