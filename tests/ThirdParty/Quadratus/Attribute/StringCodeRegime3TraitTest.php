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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRegime3Trait;

/**
 * Code regime3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRegime3TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRegime3() method.
     *
     * @return void
     */
    public function testSetCodeRegime3() {

        $obj = new TestStringCodeRegime3Trait();

        $obj->setCodeRegime3("codeRegime3");
        $this->assertEquals("codeRegime3", $obj->getCodeRegime3());
    }
}