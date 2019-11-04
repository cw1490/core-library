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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAutreSignatureDnaeTrait;

/**
 * Autre signature d n a e trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAutreSignatureDnaeTraitTest extends AbstractTestCase {

    /**
     * Tests the setAutreSignatureDnae() method.
     *
     * @return void
     */
    public function testSetAutreSignatureDnae() {

        $obj = new TestStringAutreSignatureDnaeTrait();

        $obj->setAutreSignatureDnae("autreSignatureDnae");
        $this->assertEquals("autreSignatureDnae", $obj->getAutreSignatureDnae());
    }
}