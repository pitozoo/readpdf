<?php

/**
 * package for readpdf
 *
 * @package   pitozoo\ReadPdf
 * 
 * 
 */

namespace pitozoo\ReadPdf\PdfParser\Filter;

use pitozoo\ReadPdf\PdfParser\PdfParserException;

/**
 * Exception for filters
 */
class FilterException extends PdfParserException
{
    const UNSUPPORTED_FILTER = 0x0201;

    const NOT_IMPLEMENTED = 0x0202;
}
