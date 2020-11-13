<?php

/**
 * package for readpdf
 *
 * @package   pitozoo\ReadPdf
 * 
 * 
 */

namespace pitozoo\ReadPdf\Tfpdf;

use pitozoo\ReadPdf\FpdfTplTrait;

/**
 * Class FpdfTpl
 *
 * We need to change some access levels and implement the setPageFormat() method to bring back compatibility to tFPDF.
 */
class FpdfTpl extends \tFPDF
{
    use FpdfTplTrait;
}
