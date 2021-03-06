<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\CaisseAttestation;

/**
 * Caisse attestation test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class CaisseAttestationTest extends AbstractTestCase {

    /**
     * Tests the setCollaborateur() method.
     *
     * @return void
     */
    public function testSetCollaborateur() {

        $obj = new CaisseAttestation();

        $obj->setCollaborateur("collaborateur");
        $this->assertEquals("collaborateur", $obj->getCollaborateur());
    }

    /**
     * Tests the setDateAcquisition() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAcquisition() {

        // Set a Date/time mock.
        $dateAcquisition = new DateTime("2018-09-10");

        $obj = new CaisseAttestation();

        $obj->setDateAcquisition($dateAcquisition);
        $this->assertSame($dateAcquisition, $obj->getDateAcquisition());
    }

    /**
     * Tests the setDateApplication() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateApplication() {

        // Set a Date/time mock.
        $dateApplication = new DateTime("2018-09-10");

        $obj = new CaisseAttestation();

        $obj->setDateApplication($dateApplication);
        $this->assertSame($dateApplication, $obj->getDateApplication());
    }

    /**
     * Tests the setDateAttestation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAttestation() {

        // Set a Date/time mock.
        $dateAttestation = new DateTime("2018-09-10");

        $obj = new CaisseAttestation();

        $obj->setDateAttestation($dateAttestation);
        $this->assertSame($dateAttestation, $obj->getDateAttestation());
    }

    /**
     * Tests the setDateCreation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation() {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new CaisseAttestation();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Tests the setInfoFichier() method.
     *
     * @return void
     */
    public function testSetInfoFichier() {

        $obj = new CaisseAttestation();

        $obj->setInfoFichier("infoFichier");
        $this->assertEquals("infoFichier", $obj->getInfoFichier());
    }

    /**
     * Tests the setLicence() method.
     *
     * @return void
     */
    public function testSetLicence() {

        $obj = new CaisseAttestation();

        $obj->setLicence("licence");
        $this->assertEquals("licence", $obj->getLicence());
    }

    /**
     * Tests the setNomResponsable() method.
     *
     * @return void
     */
    public function testSetNomResponsable() {

        $obj = new CaisseAttestation();

        $obj->setNomResponsable("nomResponsable");
        $this->assertEquals("nomResponsable", $obj->getNomResponsable());
    }

    /**
     * Tests the setNomVille() method.
     *
     * @return void
     */
    public function testSetNomVille() {

        $obj = new CaisseAttestation();

        $obj->setNomVille("nomVille");
        $this->assertEquals("nomVille", $obj->getNomVille());
    }

    /**
     * Tests the setNumVersion() method.
     *
     * @return void
     */
    public function testSetNumVersion() {

        $obj = new CaisseAttestation();

        $obj->setNumVersion("numVersion");
        $this->assertEquals("numVersion", $obj->getNumVersion());
    }

    /**
     * Tests the setOrdinateur() method.
     *
     * @return void
     */
    public function testSetOrdinateur() {

        $obj = new CaisseAttestation();

        $obj->setOrdinateur("ordinateur");
        $this->assertEquals("ordinateur", $obj->getOrdinateur());
    }

    /**
     * Tests the setOrigine() method.
     *
     * @return void
     */
    public function testSetOrigine() {

        $obj = new CaisseAttestation();

        $obj->setOrigine("origine");
        $this->assertEquals("origine", $obj->getOrigine());
    }

    /**
     * Tests the setPrenomResponsable() method.
     *
     * @return void
     */
    public function testSetPrenomResponsable() {

        $obj = new CaisseAttestation();

        $obj->setPrenomResponsable("prenomResponsable");
        $this->assertEquals("prenomResponsable", $obj->getPrenomResponsable());
    }

    /**
     * Tests the setRaisonSocialeDistri() method.
     *
     * @return void
     */
    public function testSetRaisonSocialeDistri() {

        $obj = new CaisseAttestation();

        $obj->setRaisonSocialeDistri("raisonSocialeDistri");
        $this->assertEquals("raisonSocialeDistri", $obj->getRaisonSocialeDistri());
    }

    /**
     * Tests the setRaisonSocialeSociete() method.
     *
     * @return void
     */
    public function testSetRaisonSocialeSociete() {

        $obj = new CaisseAttestation();

        $obj->setRaisonSocialeSociete("raisonSocialeSociete");
        $this->assertEquals("raisonSocialeSociete", $obj->getRaisonSocialeSociete());
    }

    /**
     * Tests the setUniqId() method.
     *
     * @return void
     */
    public function testSetUniqId() {

        $obj = new CaisseAttestation();

        $obj->setUniqId(10);
        $this->assertEquals(10, $obj->getUniqId());
    }

    /**
     * Tests the setUtilisateur() method.
     *
     * @return void
     */
    public function testSetUtilisateur() {

        $obj = new CaisseAttestation();

        $obj->setUtilisateur("utilisateur");
        $this->assertEquals("utilisateur", $obj->getUtilisateur());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new CaisseAttestation();

        $this->assertNull($obj->getCollaborateur());
        $this->assertNull($obj->getDateAcquisition());
        $this->assertNull($obj->getDateApplication());
        $this->assertNull($obj->getDateAttestation());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getInfoFichier());
        $this->assertNull($obj->getLicence());
        $this->assertNull($obj->getNomResponsable());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNumVersion());
        $this->assertNull($obj->getOrdinateur());
        $this->assertNull($obj->getOrigine());
        $this->assertNull($obj->getPrenomResponsable());
        $this->assertNull($obj->getRaisonSocialeDistri());
        $this->assertNull($obj->getRaisonSocialeSociete());
        $this->assertNull($obj->getUniqId());
        $this->assertNull($obj->getUtilisateur());
    }
}
