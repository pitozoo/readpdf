<?php

/**
 * package for readpdf
 *
 * @package   ReadPdf
 * 
 * 
 */
namespace ReadPdf;

/**
 * Class FpdfTpl
 *
 * This class adds a templating feature to FPDF.
 */
class FpdfTpl extends PdfChinese
{
  use FpdfTplTrait;
}
