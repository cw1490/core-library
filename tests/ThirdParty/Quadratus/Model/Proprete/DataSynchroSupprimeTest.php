<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\DataSynchroSupprime;

/**
 * Data synchro supprime test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class DataSynchroSupprimeTest extends AbstractTestCase {

    /**
     * Tests the setTypeData() method.
     *
     * @return void
     */
    public function testSetTypeData() {

        $obj = new DataSynchroSupprime();

        $obj->setTypeData("typeData");
        $this->assertEquals("typeData", $obj->getTypeData());
    }

    /**
     * Tests the setUniqIdBlocage() method.
     *
     * @return void
     */
    public function testSetUniqIdBlocage() {

        $obj = new DataSynchroSupprime();

        $obj->setUniqIdBlocage("uniqIdBlocage");
        $this->assertEquals("uniqIdBlocage", $obj->getUniqIdBlocage());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new DataSynchroSupprime();

        $this->assertNull($obj->getTypeData());
        $this->assertNull($obj->getUniqIdBlocage());
    }
}
