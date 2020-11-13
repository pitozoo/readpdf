<?php

/**
 * package for readpdf
 *
 * @package   pitozoo\ReadPdf
 * 
 * 
 */

namespace pitozoo\ReadPdf;

/**
 * Class FpdfTpl
 *
 * This class adds a templating feature to FPDF.
 */
class FpdfTpl extends PdfChinese
{
  use FpdfTplTrait;
}
