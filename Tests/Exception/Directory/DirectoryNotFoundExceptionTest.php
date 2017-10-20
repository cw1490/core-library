<?php

/*
 * This file is part of the WBWCoreLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\Directory;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\Directory\DirectoryNotFoundException;

/**
 * Directory not found exception test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\Directory
 * @final
 */
final class DirectoryNotFoundExceptionTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the __construct() method.
     */
    public function testConstruct() {

        $ex = new DirectoryNotFoundException("");

        $res = "The directory \"\" is not found";
        $this->assertEquals($res, $ex->getMessage(), "The method getMessage() does not return the expected string");
    }

}