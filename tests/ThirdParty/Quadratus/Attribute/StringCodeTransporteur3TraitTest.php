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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeTransporteur3Trait;

/**
 * Code transporteur3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeTransporteur3TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeTransporteur3() method.
     *
     * @return void
     */
    public function testSetCodeTransporteur3() {

        $obj = new TestStringCodeTransporteur3Trait();

        $obj->setCodeTransporteur3("codeTransporteur3");
        $this->assertEquals("codeTransporteur3", $obj->getCodeTransporteur3());
    }
}