<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Argument\Helper;

use WBW\Library\Core\Argument\Exception\NumberArgumentException;

/**
 * Number helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Argument\Helper
 */
class NumberHelper {

    /**
     * Determines if a value is a number.
     *
     * @param mixed $value The value.
     * @return void
     * @throws NumberArgumentException Throws a Number argument exception if the value is not of expected type.
     */
    public static function isNumber($value) {
        if (false === is_numeric($value)) {
            throw new NumberArgumentException($value);
        }
    }
}
