<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Formations;

/**
 * Formations test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class FormationsTest extends AbstractTestCase {

    /**
     * Tests the setActive() method.
     *
     * @return void
     */
    public function testSetActive() {

        $obj = new Formations();

        $obj->setActive(true);
        $this->assertEquals(true, $obj->getActive());
    }

    /**
     * Tests the setDescription() method.
     *
     * @return void
     */
    public function testSetDescription() {

        $obj = new Formations();

        $obj->setDescription("description");
        $this->assertEquals("description", $obj->getDescription());
    }

    /**
     * Tests the setId() method.
     *
     * @return void
     */
    public function testSetId() {

        $obj = new Formations();

        $obj->setId("id");
        $this->assertEquals("id", $obj->getId());
    }

    /**
     * Tests the setLienDocument() method.
     *
     * @return void
     */
    public function testSetLienDocument() {

        $obj = new Formations();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests the setLieu() method.
     *
     * @return void
     */
    public function testSetLieu() {

        $obj = new Formations();

        $obj->setLieu("lieu");
        $this->assertEquals("lieu", $obj->getLieu());
    }

    /**
     * Tests the setNbHFormation() method.
     *
     * @return void
     */
    public function testSetNbHFormation() {

        $obj = new Formations();

        $obj->setNbHFormation(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHFormation());
    }

    /**
     * Tests the setNbhDiFPrisW() method.
     *
     * @return void
     */
    public function testSetNbhDiFPrisW() {

        $obj = new Formations();

        $obj->setNbhDiFPrisW(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhDiFPrisW());
    }

    /**
     * Tests the setNbhDifPrisHorsW() method.
     *
     * @return void
     */
    public function testSetNbhDifPrisHorsW() {

        $obj = new Formations();

        $obj->setNbhDifPrisHorsW(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhDifPrisHorsW());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new Formations();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setOrganisme() method.
     *
     * @return void
     */
    public function testSetOrganisme() {

        $obj = new Formations();

        $obj->setOrganisme("organisme");
        $this->assertEquals("organisme", $obj->getOrganisme());
    }

    /**
     * Tests the setPeriodeDeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDeb() {

        // Set a Date/time mock.
        $periodeDeb = new DateTime("2018-09-10");

        $obj = new Formations();

        $obj->setPeriodeDeb($periodeDeb);
        $this->assertSame($periodeDeb, $obj->getPeriodeDeb());
    }

    /**
     * Tests the setPeriodeFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeFin() {

        // Set a Date/time mock.
        $periodeFin = new DateTime("2018-09-10");

        $obj = new Formations();

        $obj->setPeriodeFin($periodeFin);
        $this->assertSame($periodeFin, $obj->getPeriodeFin());
    }

    /**
     * Tests the setTypeFormation() method.
     *
     * @return void
     */
    public function testSetTypeFormation() {

        $obj = new Formations();

        $obj->setTypeFormation(10);
        $this->assertEquals(10, $obj->getTypeFormation());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new Formations();

        $this->assertNull($obj->getActive());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getLieu());
        $this->assertNull($obj->getNbHFormation());
        $this->assertNull($obj->getNbhDifPrisHorsW());
        $this->assertNull($obj->getNbhDiFPrisW());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getOrganisme());
        $this->assertNull($obj->getPeriodeDeb());
        $this->assertNull($obj->getPeriodeFin());
        $this->assertNull($obj->getTypeFormation());
    }
}
