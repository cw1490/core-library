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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\LignesAttestationExtras;

/**
 * Lignes attestation extras test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class LignesAttestationExtrasTest extends AbstractTestCase {

    /**
     * Tests the setDateDebut() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebut() {

        // Set a Date/time mock.
        $dateDebut = new DateTime("2018-09-10");

        $obj = new LignesAttestationExtras();

        $obj->setDateDebut($dateDebut);
        $this->assertSame($dateDebut, $obj->getDateDebut());
    }

    /**
     * Tests the setDateFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFin() {

        // Set a Date/time mock.
        $dateFin = new DateTime("2018-09-10");

        $obj = new LignesAttestationExtras();

        $obj->setDateFin($dateFin);
        $this->assertSame($dateFin, $obj->getDateFin());
    }

    /**
     * Tests the setMontantIccp() method.
     *
     * @return void
     */
    public function testSetMontantIccp() {

        $obj = new LignesAttestationExtras();

        $obj->setMontantIccp(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantIccp());
    }

    /**
     * Tests the setMontantIpe() method.
     *
     * @return void
     */
    public function testSetMontantIpe() {

        $obj = new LignesAttestationExtras();

        $obj->setMontantIpe(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantIpe());
    }

    /**
     * Tests the setMontantPrecompte() method.
     *
     * @return void
     */
    public function testSetMontantPrecompte() {

        $obj = new LignesAttestationExtras();

        $obj->setMontantPrecompte(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantPrecompte());
    }

    /**
     * Tests the setNbHeureTrav() method.
     *
     * @return void
     */
    public function testSetNbHeureTrav() {

        $obj = new LignesAttestationExtras();

        $obj->setNbHeureTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureTrav());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new LignesAttestationExtras();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumeroAttestation() method.
     *
     * @return void
     */
    public function testSetNumeroAttestation() {

        $obj = new LignesAttestationExtras();

        $obj->setNumeroAttestation("numeroAttestation");
        $this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new LignesAttestationExtras();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setSalaireBrut() method.
     *
     * @return void
     */
    public function testSetSalaireBrut() {

        $obj = new LignesAttestationExtras();

        $obj->setSalaireBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireBrut());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new LignesAttestationExtras();

        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getMontantIccp());
        $this->assertNull($obj->getMontantIpe());
        $this->assertNull($obj->getMontantPrecompte());
        $this->assertNull($obj->getNbHeureTrav());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getSalaireBrut());
    }
}
