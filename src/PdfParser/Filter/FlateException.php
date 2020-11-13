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
 * Exception for flate filter class
 */
class FlateException extends FilterException
{
    /**
     * @var integer
     */
    const NO_ZLIB = 0x0401;

    /**
     * @var integer
     */
    const DECOMPRESS_ERROR = 0x0402;
}
