<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\OcrLab\Model;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\OcrLad\Model\Page;

/**
 * Page test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\ThirdParty\OcrLab\Model
 */
class PageTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Page();

        $this->assertNull($obj->getHeight());
        $this->assertNull($obj->getResolution());
        $this->assertNull($obj->getRotation());
        $this->assertNull($obj->getTag());
        $this->assertNull($obj->getWidth());
    }

    /**
     * Tests the setResolution() method.
     *
     * @return void
     */
    public function testSetResolution() {

        $obj = new Page();

        $obj->setResolution(300);
        $this->assertEquals(300, $obj->getResolution());
    }

    /**
     * Tests the setRotation() method.
     *
     * @return void
     */
    public function testSetRotation() {

        $obj = new Page();

        $obj->setRotation(90);
        $this->assertEquals(90, $obj->getRotation());
    }

    /**
     * Tests the setTag() method.
     *
     * @return void
     */
    public function testSetTag() {

        $obj = new Page();

        $obj->setTag(0);
        $this->assertEquals(0, $obj->getTag());
    }
}