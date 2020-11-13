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
 * Interface for filters
 */
interface FilterInterface
{
    /**
     * Decode a string.
     *
     * @param string $data The input string
     * @return string
     */
    public function decode($data);
}
