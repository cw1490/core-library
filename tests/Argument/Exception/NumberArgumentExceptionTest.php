<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Argument\Exception;

use WBW\Library\Core\Argument\Exception\NumberArgumentException;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Number argument exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Argument\Exception
 */
class NumberArgumentExceptionTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $ex = new NumberArgumentException("exception");

        $res = 'The argument "exception" is not a number';
        $this->assertEquals($res, $ex->getMessage());
    }
}
