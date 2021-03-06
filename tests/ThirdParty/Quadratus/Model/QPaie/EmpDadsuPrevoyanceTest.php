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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EmpDadsuPrevoyance;

/**
 * Emp dadsu prevoyance test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDadsuPrevoyanceTest extends AbstractTestCase {

    /**
     * Tests the setCodeAffilSecu() method.
     *
     * @return void
     */
    public function testSetCodeAffilSecu() {

        $obj = new EmpDadsuPrevoyance();

        $obj->setCodeAffilSecu("codeAffilSecu");
        $this->assertEquals("codeAffilSecu", $obj->getCodeAffilSecu());
    }

    /**
     * Tests the setDateAncienBranche() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAncienBranche() {

        // Set a Date/time mock.
        $dateAncienBranche = new DateTime("2018-09-10");

        $obj = new EmpDadsuPrevoyance();

        $obj->setDateAncienBranche($dateAncienBranche);
        $this->assertSame($dateAncienBranche, $obj->getDateAncienBranche());
    }

    /**
     * Tests the setDateAncienCollege() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAncienCollege() {

        // Set a Date/time mock.
        $dateAncienCollege = new DateTime("2018-09-10");

        $obj = new EmpDadsuPrevoyance();

        $obj->setDateAncienCollege($dateAncienCollege);
        $this->assertSame($dateAncienCollege, $obj->getDateAncienCollege());
    }

    /**
     * Tests the setDateAncienPoste() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAncienPoste() {

        // Set a Date/time mock.
        $dateAncienPoste = new DateTime("2018-09-10");

        $obj = new EmpDadsuPrevoyance();

        $obj->setDateAncienPoste($dateAncienPoste);
        $this->assertSame($dateAncienPoste, $obj->getDateAncienPoste());
    }

    /**
     * Tests the setNbEnfants() method.
     *
     * @return void
     */
    public function testSetNbEnfants() {

        $obj = new EmpDadsuPrevoyance();

        $obj->setNbEnfants("nbEnfants");
        $this->assertEquals("nbEnfants", $obj->getNbEnfants());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new EmpDadsuPrevoyance();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPremDateEntree() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPremDateEntree() {

        // Set a Date/time mock.
        $premDateEntree = new DateTime("2018-09-10");

        $obj = new EmpDadsuPrevoyance();

        $obj->setPremDateEntree($premDateEntree);
        $this->assertSame($premDateEntree, $obj->getPremDateEntree());
    }

    /**
     * Tests the setRangNaissance() method.
     *
     * @return void
     */
    public function testSetRangNaissance() {

        $obj = new EmpDadsuPrevoyance();

        $obj->setRangNaissance("rangNaissance");
        $this->assertEquals("rangNaissance", $obj->getRangNaissance());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new EmpDadsuPrevoyance();

        $this->assertNull($obj->getCodeAffilSecu());
        $this->assertNull($obj->getDateAncienBranche());
        $this->assertNull($obj->getDateAncienCollege());
        $this->assertNull($obj->getDateAncienPoste());
        $this->assertNull($obj->getNbEnfants());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPremDateEntree());
        $this->assertNull($obj->getRangNaissance());
    }
}
