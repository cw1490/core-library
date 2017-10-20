<?php

/*
 * This file is part of the WBWCoreLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Argument;

use Exception;
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Argument\ArgumentInterface;
use WBW\Library\Core\Argument\ArgumentValidator;
use WBW\Library\Core\Exception\Argument\ArrayArgumentException;
use WBW\Library\Core\Exception\Argument\BooleanArgumentException;
use WBW\Library\Core\Exception\Argument\DateArgumentException;
use WBW\Library\Core\Exception\Argument\DoubleArgumentException;
use WBW\Library\Core\Exception\Argument\FloatArgumentException;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Exception\Argument\IntegerArgumentException;
use WBW\Library\Core\Exception\Argument\NumberArgumentException;
use WBW\Library\Core\Exception\Argument\ObjectArgumentException;
use WBW\Library\Core\Exception\Argument\ResourceArgumentException;
use WBW\Library\Core\Exception\Argument\StringArgumentException;
use WBW\Library\Core\Exception\Argument\TimestampArgumentException;

/**
 * Argument validator test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Argument
 * @final
 */
final class ArgumentValidatorTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the isValid() method.
     *
     * @return void
     */
    public function testIsValid() {

        try {
            ArgumentValidator::isValid([], -18);
        } catch (Exception $ex) {
            $this->assertInstanceOf(IllegalArgumentException::class, $ex, "The method isValid() does not throw the expected exception");
            $this->assertEquals("The type \"-18\" is not implemented", $ex->getMessage(), "The method getMessage() does not return the expecetd string");
        }

        $rsc = fopen(getcwd() . "/Tests/Argument/ArgumentValidatorTest.php", "r");

        $this->assertTrue(ArgumentValidator::isValid([], ArgumentInterface::TYPE_ARRAY), "The method isValid() does not return the expected value with an array");
        $this->assertTrue(ArgumentValidator::isValid(true, ArgumentInterface::TYPE_BOOLEAN), "The method isValid() does not return the expected value with a boolean");
        $this->assertTrue(ArgumentValidator::isValid("2017-10-20", ArgumentInterface::TYPE_DATE), "The method isValid() does not return the expected value with a date");
        $this->assertTrue(ArgumentValidator::isValid(0.1, ArgumentInterface::TYPE_DOUBLE), "The method isValid() does not return the expected value with a double");
        $this->assertTrue(ArgumentValidator::isValid(1.0, ArgumentInterface::TYPE_FLOAT), "The method isValid() does not return the expected value with a float");
        $this->assertTrue(ArgumentValidator::isValid(1, ArgumentInterface::TYPE_INTEGER), "The method isValid() does not return the expected value with an integer");
        $this->assertTrue(ArgumentValidator::isValid(2, ArgumentInterface::TYPE_NUMBER), "The method isValid() does not return the expected value with a number");
        $this->assertTrue(ArgumentValidator::isValid($this, ArgumentInterface::TYPE_OBJECT), "The method isValid() does not return the expected value with an object");
        $this->assertTrue(ArgumentValidator::isValid($rsc, ArgumentInterface::TYPE_RESOURCE), "The method isValid() does not return the expected value with a resource");
        $this->assertTrue(ArgumentValidator::isValid("", ArgumentInterface::TYPE_STRING), "The method isValid() does not return the expected value with a string");
        $this->assertTrue(ArgumentValidator::isValid("2017-10-20 15:41:10", ArgumentInterface::TYPE_TIMESTAMP), "The method isValid() does not return the expected value with a timestamp");

        try {
            ArgumentValidator::isValid(null, ArgumentInterface::TYPE_ARRAY);
        } catch (Exception $ex) {
            $this->assertInstanceOf(ArrayArgumentException::class, $ex, "The method isValid() does not throw the expected exception");
            $this->assertEquals("The argument \"\" is not an array", $ex->getMessage(), "The method getMessage() does not return the expecetd string");
        }

        try {
            ArgumentValidator::isValid(null, ArgumentInterface::TYPE_BOOLEAN);
        } catch (Exception $ex) {
            $this->assertInstanceOf(BooleanArgumentException::class, $ex, "The method isValid() does not throw the expected exception");
            $this->assertEquals("The argument \"\" is not a boolean", $ex->getMessage(), "The method getMessage() does not return the expecetd string");
        }

        try {
            ArgumentValidator::isValid(null, ArgumentInterface::TYPE_DATE);
        } catch (Exception $ex) {
            $this->assertInstanceOf(DateArgumentException::class, $ex, "The method isValid() does not throw the expected exception");
            $this->assertEquals("The argument \"\" is not a date", $ex->getMessage(), "The method getMessage() does not return the expecetd string");
        }

        try {
            ArgumentValidator::isValid(null, ArgumentInterface::TYPE_DOUBLE);
        } catch (Exception $ex) {
            $this->assertInstanceOf(DoubleArgumentException::class, $ex, "The method isValid() does not throw the expected exception");
            $this->assertEquals("The argument \"\" is not a double", $ex->getMessage(), "The method getMessage() does not return the expecetd string");
        }

        try {
            ArgumentValidator::isValid(null, ArgumentInterface::TYPE_FLOAT);
        } catch (Exception $ex) {
            $this->assertInstanceOf(FloatArgumentException::class, $ex, "The method isValid() does not throw the expected exception");
            $this->assertEquals("The argument \"\" is not a float", $ex->getMessage(), "The method getMessage() does not return the expecetd string");
        }

        try {
            ArgumentValidator::isValid(null, ArgumentInterface::TYPE_INTEGER);
        } catch (Exception $ex) {
            $this->assertInstanceOf(IntegerArgumentException::class, $ex, "The method isValid() does not throw the expected exception");
            $this->assertEquals("The argument \"\" is not an integer", $ex->getMessage(), "The method getMessage() does not return the expecetd string");
        }

        try {
            ArgumentValidator::isValid(null, ArgumentInterface::TYPE_NUMBER);
        } catch (Exception $ex) {
            $this->assertInstanceOf(NumberArgumentException::class, $ex, "The method isValid() does not throw the expected exception");
            $this->assertEquals("The argument \"\" is not a number", $ex->getMessage(), "The method getMessage() does not return the expecetd string");
        }

        try {
            ArgumentValidator::isValid(null, ArgumentInterface::TYPE_OBJECT);
        } catch (Exception $ex) {
            $this->assertInstanceOf(ObjectArgumentException::class, $ex, "The method isValid() does not throw the expected exception");
            $this->assertEquals("The argument \"\" is not an object", $ex->getMessage(), "The method getMessage() does not return the expecetd string");
        }

        try {
            ArgumentValidator::isValid(null, ArgumentInterface::TYPE_RESOURCE);
        } catch (Exception $ex) {
            $this->assertInstanceOf(ResourceArgumentException::class, $ex, "The method isValid() does not throw the expected exception");
            $this->assertEquals("The argument \"\" is not a resource", $ex->getMessage(), "The method getMessage() does not return the expecetd string");
        }

        try {
            ArgumentValidator::isValid(null, ArgumentInterface::TYPE_STRING);
        } catch (Exception $ex) {
            $this->assertInstanceOf(StringArgumentException::class, $ex, "The method isValid() does not throw the expected exception");
            $this->assertEquals("The argument \"\" is not a string", $ex->getMessage(), "The method getMessage() does not return the expecetd string");
        }

        try {
            ArgumentValidator::isValid(null, ArgumentInterface::TYPE_TIMESTAMP);
        } catch (Exception $ex) {
            $this->assertInstanceOf(TimestampArgumentException::class, $ex, "The method isValid() does not throw the expected exception");
            $this->assertEquals("The argument \"\" is not a timestamp", $ex->getMessage(), "The method getMessage() does not return the expecetd string");
        }
    }

}