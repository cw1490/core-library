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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMtJRtt2007Trait;

/**
 * Mt j rtt2007 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMtJRtt2007TraitTest extends AbstractTestCase {

    /**
     * Tests the setMtJRtt2007() method.
     *
     * @return void
     */
    public function testSetMtJRtt2007() {

        $obj = new TestFloatMtJRtt2007Trait();

        $obj->setMtJRtt2007(10.092018);
        $this->assertEquals(10.092018, $obj->getMtJRtt2007());
    }
}