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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\HistoPaieAbsences;

/**
 * Histo paie absences test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class HistoPaieAbsencesTest extends AbstractTestCase {

    /**
     * Tests the setCodeAbsPaie() method.
     *
     * @return void
     */
    public function testSetCodeAbsPaie() {

        $obj = new HistoPaieAbsences();

        $obj->setCodeAbsPaie("codeAbsPaie");
        $this->assertEquals("codeAbsPaie", $obj->getCodeAbsPaie());
    }

    /**
     * Tests the setCodeAbsence() method.
     *
     * @return void
     */
    public function testSetCodeAbsence() {

        $obj = new HistoPaieAbsences();

        $obj->setCodeAbsence("codeAbsence");
        $this->assertEquals("codeAbsence", $obj->getCodeAbsence());
    }

    /**
     * Tests the setCodeCollaboValid() method.
     *
     * @return void
     */
    public function testSetCodeCollaboValid() {

        $obj = new HistoPaieAbsences();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new HistoPaieAbsences();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new HistoPaieAbsences();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setDateDebutAbs() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebutAbs() {

        // Set a Date/time mock.
        $dateDebutAbs = new DateTime("2018-09-10");

        $obj = new HistoPaieAbsences();

        $obj->setDateDebutAbs($dateDebutAbs);
        $this->assertSame($dateDebutAbs, $obj->getDateDebutAbs());
    }

    /**
     * Tests the setDateFinAbs() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinAbs() {

        // Set a Date/time mock.
        $dateFinAbs = new DateTime("2018-09-10");

        $obj = new HistoPaieAbsences();

        $obj->setDateFinAbs($dateFinAbs);
        $this->assertSame($dateFinAbs, $obj->getDateFinAbs());
    }

    /**
     * Tests the setDateValidationSynchro() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationSynchro() {

        // Set a Date/time mock.
        $dateValidationSynchro = new DateTime("2018-09-10");

        $obj = new HistoPaieAbsences();

        $obj->setDateValidationSynchro($dateValidationSynchro);
        $this->assertSame($dateValidationSynchro, $obj->getDateValidationSynchro());
    }

    /**
     * Tests the setDureeAbsence() method.
     *
     * @return void
     */
    public function testSetDureeAbsence() {

        $obj = new HistoPaieAbsences();

        $obj->setDureeAbsence(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeAbsence());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new HistoPaieAbsences();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setNbJoursAbs() method.
     *
     * @return void
     */
    public function testSetNbJoursAbs() {

        $obj = new HistoPaieAbsences();

        $obj->setNbJoursAbs(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJoursAbs());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new HistoPaieAbsences();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setUniqId() method.
     *
     * @return void
     */
    public function testSetUniqId() {

        $obj = new HistoPaieAbsences();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Tests the setUniqIdSynchro() method.
     *
     * @return void
     */
    public function testSetUniqIdSynchro() {

        $obj = new HistoPaieAbsences();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new HistoPaieAbsences();

        $this->assertNull($obj->getCodeAbsPaie());
        $this->assertNull($obj->getCodeAbsence());
        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getDateDebutAbs());
        $this->assertNull($obj->getDateFinAbs());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getDureeAbsence());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getNbJoursAbs());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getUniqId());
        $this->assertNull($obj->getUniqIdSynchro());
    }
}
