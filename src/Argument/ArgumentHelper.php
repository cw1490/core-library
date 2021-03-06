<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Argument;

use DateTime;
use InvalidArgumentException;
use WBW\Library\Core\Argument\Exception\DateArgumentException;
use WBW\Library\Core\Argument\Exception\TimestampArgumentException;
use WBW\Library\Core\Argument\Helper\ArrayHelper;
use WBW\Library\Core\Argument\Helper\BooleanHelper;
use WBW\Library\Core\Argument\Helper\DateTimeHelper;
use WBW\Library\Core\Argument\Helper\DoubleHelper;
use WBW\Library\Core\Argument\Helper\FloatHelper;
use WBW\Library\Core\Argument\Helper\IntegerHelper;
use WBW\Library\Core\Argument\Helper\NumberHelper;
use WBW\Library\Core\Argument\Helper\ObjectHelper;
use WBW\Library\Core\Argument\Helper\ResourceHelper;
use WBW\Library\Core\Argument\Helper\StringHelper;
use WBW\Library\Core\Argument\Helper\TimestampHelper;

/**
 * Argument helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Argument
 */
class ArgumentHelper implements ArgumentInterface {

    /**
     * Convert a string value into type $type.
     *
     * @param string $value The string value.
     * @param int $type The type.
     * @param string $dateFormat The date format.
     * @return mixed Returns the value.
     * @throws InvalidArgumentException Throws an invalid argument exception.
     */
    public static function convert($value, $type, $dateFormat = null) {

        switch ($type) {

            case self::ARGUMENT_BOOLEAN:
                return BooleanHelper::parseString($value);

            case self::ARGUMENT_DATE:
                if (null === $dateFormat) {
                    throw new InvalidArgumentException("The date format is null");
                }
                $datetime = DateTime::createFromFormat($dateFormat, $value);
                if (false === $datetime) {
                    throw new DateArgumentException($value);
                }
                return $datetime;

            case self::ARGUMENT_DOUBLE:
                return DoubleHelper::parseString($value);

            case self::ARGUMENT_FLOAT:
                return FloatHelper::parseString($value);

            case self::ARGUMENT_INTEGER:
                return IntegerHelper::parseString($value);

            case self::ARGUMENT_STRING:
                return $value;

            case self::ARGUMENT_TIMESTAMP:
                if (null === $dateFormat) {
                    throw new InvalidArgumentException("The datetime format is null");
                }
                $datetime = DateTime::createFromFormat($dateFormat, $value);
                if (false === $datetime) {
                    throw new TimestampArgumentException($value);
                }
                return $datetime;
        }

        throw new InvalidArgumentException("The type \"{$type}\" is not implemented");
    }

    /**
     * Determines if the $value is of type $type.
     *
     * @param mixed $value The value.
     * @param int $type The type.
     * @return bool Returns true.
     * @throws InvalidArgumentException Throws an invalid argument exception.
     */
    public static function isTypeOf($value, $type) {

        switch ($type) {

            case self::ARGUMENT_ARRAY:
                ArrayHelper::isArray($value);
                return true;

            case self::ARGUMENT_BOOLEAN:
                BooleanHelper::isBoolean($value);
                return true;

            case self::ARGUMENT_DATE:
                DateTimeHelper::isDate($value);
                return true;

            case self::ARGUMENT_DOUBLE:
                DoubleHelper::isDouble($value);
                return true;

            case self::ARGUMENT_FLOAT:
                FloatHelper::isFloat($value);
                return true;

            case self::ARGUMENT_INTEGER:
                IntegerHelper::isInteger($value);
                return true;

            case self::ARGUMENT_NUMBER:
                NumberHelper::isNumber($value);
                return true;

            case self::ARGUMENT_OBJECT:
                ObjectHelper::isObject($value);
                return true;

            case self::ARGUMENT_RESOURCE:
                ResourceHelper::isResource($value);
                return true;

            case self::ARGUMENT_STRING:
                StringHelper::isString($value);
                return true;

            case self::ARGUMENT_TIMESTAMP:
                TimestampHelper::isTimestamp($value);
                return true;
        }

        throw new InvalidArgumentException("The type \"{$type}\" is not implemented");
    }
}
