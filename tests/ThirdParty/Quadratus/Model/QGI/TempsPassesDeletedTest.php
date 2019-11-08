<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\TempsPassesDeleted;

/**
 * Temps passes deleted test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class TempsPassesDeletedTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TempsPassesDeleted();

        $this->assertNull($obj->getContexte());
        $this->assertNull($obj->getDateSuppression());
        $this->assertNull($obj->getGUniqId());
        $this->assertNull($obj->getUser());
    }

    /**
     * Tests the setContexte() method.
     *
     * @return void
     */
    public function testSetContexte() {

        $obj = new TempsPassesDeleted();

        $obj->setContexte("contexte");
        $this->assertEquals("contexte", $obj->getContexte());
    }

    /**
     * Tests the setDateSuppression() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSuppression() {

        // Set a Date/time mock.
        $dateSuppression = new DateTime("2018-09-10");

        $obj = new TempsPassesDeleted();

        $obj->setDateSuppression($dateSuppression);
        $this->assertSame($dateSuppression, $obj->getDateSuppression());
    }

    /**
     * Tests the setGUniqId() method.
     *
     * @return void
     */
    public function testSetGUniqId() {

        $obj = new TempsPassesDeleted();

        $obj->setGUniqId("gUniqId");
        $this->assertEquals("gUniqId", $obj->getGUniqId());
    }

    /**
     * Tests the setUser() method.
     *
     * @return void
     */
    public function testSetUser() {

        $obj = new TempsPassesDeleted();

        $obj->setUser("user");
        $this->assertEquals("user", $obj->getUser());
    }
}
