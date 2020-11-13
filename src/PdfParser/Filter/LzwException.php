<?php

/**
 * package for readpdf
 *
 * @package   ReadPdf
 * 
 * 
 */

namespace ReadPdf\PdfParser\Filter;

/**
 * Exception for LZW filter class
 */
class LzwException extends FilterException
{
    /**
     * @var integer
     */
    const LZW_FLAVOUR_NOT_SUPPORTED = 0x0501;
}
