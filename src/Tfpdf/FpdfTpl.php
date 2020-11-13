<?php

/**
 * package for readpdf
 *
 * @package   ReadPdf
 * 
 * 
 */

namespace ReadPdf\Tfpdf;


use ReadPdf\FpdfTplTrait;

/**
 * Class FpdfTpl
 *
 * We need to change some access levels and implement the setPageFormat() method to bring back compatibility to tFPDF.
 */
class FpdfTpl extends \tFPDF
{
    use FpdfTplTrait;
}
