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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereEntPiece1Trait;

/**
 * Lib critere ent piece1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereEntPiece1TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereEntPiece1() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece1() {

        $obj = new TestStringLibCritereEntPiece1Trait();

        $obj->setLibCritereEntPiece1("libCritereEntPiece1");
        $this->assertEquals("libCritereEntPiece1", $obj->getLibCritereEntPiece1());
    }
}