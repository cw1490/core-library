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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNomReq8Trait;

/**
 * Nom req8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNomReq8TraitTest extends AbstractTestCase {

    /**
     * Tests the setNomReq8() method.
     *
     * @return void
     */
    public function testSetNomReq8() {

        $obj = new TestStringNomReq8Trait();

        $obj->setNomReq8("nomReq8");
        $this->assertEquals("nomReq8", $obj->getNomReq8());
    }
}