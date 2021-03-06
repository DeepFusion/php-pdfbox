<?php
/*
 * This file is part of php-pdfbox.
 *
 * (c) Stephan Wentz <stephan@wentz.it>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace Pdfbox\Exception;

/**
 * Pdfbox input file missing exception.
 */
final class InputFileMissingException extends LogicException
{
    public static function create(): self
    {
        return new self('Input file missing.');
    }
}
