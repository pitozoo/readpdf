<?php

/**
 * package for readpdf
 *
 * @package   ReadPdf
 * 
 * 
 */

namespace ReadPdf\PdfParser\Type;

use ReadPdf\PdfParser\CrossReference\CrossReferenceException;
use ReadPdf\PdfParser\PdfParser;
use ReadPdf\PdfParser\PdfParserException;

/**
 * A class defining a PDF data type
 */
class PdfType
{
    /**
     * Resolves a PdfType value to its value.
     *
     * This method is used to evaluate indirect and direct object references until a final value is reached.
     *
     * @param PdfType $value
     * @param PdfParser $parser
     * @param bool $stopAtIndirectObject
     * @return PdfType
     * @throws CrossReferenceException
     * @throws PdfParserException
     */
    public static function resolve(PdfType $value, PdfParser $parser, $stopAtIndirectObject = false)
    {
        if ($value instanceof PdfIndirectObject) {
            if ($stopAtIndirectObject === true) {
                return $value;
            }

            return self::resolve($value->value, $parser, $stopAtIndirectObject);
        }

        if ($value instanceof PdfIndirectObjectReference) {
            return self::resolve($parser->getIndirectObject($value->value), $parser, $stopAtIndirectObject);
        }

        return $value;
    }

    /**
     * Ensure that a value is an instance of a specific PDF type.
     *
     * @param string $type
     * @param PdfType $value
     * @param string $errorMessage
     * @return mixed
     * @throws PdfTypeException
     */
    protected static function ensureType($type, $value, $errorMessage)
    {
        if (!($value instanceof $type)) {
            throw new PdfTypeException(
                $errorMessage,
                PdfTypeException::INVALID_DATA_TYPE
            );
        }

        return $value;
    }

    /**
     * The value of the PDF type.
     *
     * @var mixed
     */
    public $value;
}
