<?php

/*
 * This file is part of the WBWCoreLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\Argument;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\Argument\ResourceArgumentException;

/**
 * Resource argument exception test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\Argument
 * @final
 */
final class ResourceArgumentExceptionTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $ex = new ResourceArgumentException("");

        $res = "The argument \"\" is not a resource";
        $this->assertEquals($res, $ex->getMessage(), "The method getMessage() does not return the expected string");
    }

}