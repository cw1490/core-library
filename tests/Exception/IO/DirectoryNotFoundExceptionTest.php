<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\IO;

use WBW\Library\Core\Exception\IO\DirectoryNotFoundException;
use WBW\Library\Core\Tests\Cases\AbstractCoreFrameworkTestCase;

/**
 * Directory not found exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\IO
 * @final
 */
final class DirectoryNotFoundExceptionTest extends AbstractCoreFrameworkTestCase {

    /**
     * Tests the __construct() method.
     */
    public function testConstruct() {

        $ex = new DirectoryNotFoundException("exception");

        $res = "The directory \"exception\" is not found";
        $this->assertEquals($res, $ex->getMessage());
    }

}