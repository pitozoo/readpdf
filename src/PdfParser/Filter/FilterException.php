<?php

/**
 * package for readpdf
 *
 * @package   ReadPdf
 * 
 * 
 */

namespace ReadPdf\PdfParser\Filter;

use ReadPdf\PdfParser\PdfParserException;

/**
 * Exception for filters
 */
class FilterException extends PdfParserException
{
    const UNSUPPORTED_FILTER = 0x0201;

    const NOT_IMPLEMENTED = 0x0202;
}
