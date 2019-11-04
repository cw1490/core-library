<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolBoolean6Trait;

/**
 * Boolean6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolBoolean6TraitTest extends AbstractTestCase {

    /**
     * Tests the setBoolean6() method.
     *
     * @return void
     */
    public function testSetBoolean6() {

        $obj = new TestBoolBoolean6Trait();

        $obj->setBoolean6(true);
        $this->assertEquals(true, $obj->getBoolean6());
    }
}