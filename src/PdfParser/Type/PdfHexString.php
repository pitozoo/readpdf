<?php

/**
 * package for readpdf
 *
 * @package   pitozoo\ReadPdf
 * 
 * 
 */

namespace pitozoo\ReadPdf\PdfParser\Type;

use pitozoo\ReadPdf\PdfParser\StreamReader;

/**
 * Class representing a hexadecimal encoded PDF string object
 */
class PdfHexString extends PdfType
{
    /**
     * Parses a hexadecimal string object from the stream reader.
     *
     * @param StreamReader $streamReader
     * @return bool|self
     */
    public static function parse(StreamReader $streamReader)
    {
        $bufferOffset = $streamReader->getOffset();

        while (true) {
            $buffer = $streamReader->getBuffer(false);
            $pos = \strpos($buffer, '>', $bufferOffset);
            if ($pos === false) {
                if (!$streamReader->increaseLength()) {
                    return false;
                }
                continue;
            }

            break;
        }

        $result = \substr($buffer, $bufferOffset, $pos - $bufferOffset);
        $streamReader->setOffset($pos + 1);

        $v = new self();
        $v->value = $result;

        return $v;
    }

    /**
     * Helper method to create an instance.
     *
     * @param string $string The hex encoded string.
     * @return self
     */
    public static function create($string)
    {
        $v = new self();
        $v->value = $string;

        return $v;
    }

    /**
     * Ensures that the passed value is a PdfHexString instance.
     *
     * @param mixed $hexString
     * @return self
     * @throws PdfTypeException
     */
    public static function ensure($hexString)
    {
        return PdfType::ensureType(self::class, $hexString, 'Hex string value expected.');
    }
}
