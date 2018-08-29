<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\Reflection;

use WBW\Library\Core\Exception\Reflection\ClassNotFoundException;
use WBW\Library\Core\Tests\Cases\AbstractCoreFrameworkTestCase;

/**
 * Class not found exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\Reflection
 * @final
 */
final class ClassNotFoundExceptionTest extends AbstractCoreFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $ex = new ClassNotFoundException("exception");

        $res = "The class \"exception\" is not found";
        $this->assertEquals($res, $ex->getMessage());
    }

}
