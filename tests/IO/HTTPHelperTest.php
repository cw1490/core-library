<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\IO;

use WBW\Library\Core\IO\HTTPHelper;
use WBW\Library\Core\Tests\Cases\AbstractCoreFrameworkTestCase;

/**
 * HTTP utility test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\IO
 * @final
 */
final class HTTPHelperTest extends AbstractCoreFrameworkTestCase {

    /**
     * Tests the getHTTPMethods() method.
     *
     * @return void
     */
    public function testGetHTTPMethods() {

        $res = HTTPHelper::getHTTPMethods();
        $this->assertCount(7, $res);
    }

    /**
     * Tests the getHTTPStatus() method.
     *
     * @return void
     */
    public function testGetHTTPStatus() {

        $res = HTTPHelper::getHTTPStatus();
        $this->assertCount(57, $res);
    }

}
