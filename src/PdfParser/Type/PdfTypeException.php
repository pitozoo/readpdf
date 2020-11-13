<?php

/**
 * package for readpdf
 *
 * @package   ReadPdf
 * 
 * 
 */

namespace ReadPdf\PdfParser\Type;

use ReadPdf\PdfParser\PdfParserException;

/**
 * Exception class for pdf type classes
 */
class PdfTypeException extends PdfParserException
{
    /**
     * @var int
     */
    const NO_NEWLINE_AFTER_STREAM_KEYWORD = 0x0601;
}
