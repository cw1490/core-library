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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\TypeMissions;

/**
 * Type missions test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class TypeMissionsTest extends AbstractTestCase {

    /**
     * Tests the setArticle() method.
     *
     * @return void
     */
    public function testSetArticle() {

        $obj = new TypeMissions();

        $obj->setArticle("article");
        $this->assertEquals("article", $obj->getArticle());
    }

    /**
     * Tests the setCentreAnalytique() method.
     *
     * @return void
     */
    public function testSetCentreAnalytique() {

        $obj = new TypeMissions();

        $obj->setCentreAnalytique("centreAnalytique");
        $this->assertEquals("centreAnalytique", $obj->getCentreAnalytique());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new TypeMissions();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCodeFamille() method.
     *
     * @return void
     */
    public function testSetCodeFamille() {

        $obj = new TypeMissions();

        $obj->setCodeFamille("codeFamille");
        $this->assertEquals("codeFamille", $obj->getCodeFamille());
    }

    /**
     * Tests the setCodeResponsable() method.
     *
     * @return void
     */
    public function testSetCodeResponsable() {

        $obj = new TypeMissions();

        $obj->setCodeResponsable("codeResponsable");
        $this->assertEquals("codeResponsable", $obj->getCodeResponsable());
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

        $obj = new TypeMissions();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Tests the setDateModification() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModification() {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new TypeMissions();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Tests the setDecalageFermetureAuto() method.
     *
     * @return void
     */
    public function testSetDecalageFermetureAuto() {

        $obj = new TypeMissions();

        $obj->setDecalageFermetureAuto(10);
        $this->assertEquals(10, $obj->getDecalageFermetureAuto());
    }

    /**
     * Tests the setDecalageFermetureAutoJours() method.
     *
     * @return void
     */
    public function testSetDecalageFermetureAutoJours() {

        $obj = new TypeMissions();

        $obj->setDecalageFermetureAutoJours(10);
        $this->assertEquals(10, $obj->getDecalageFermetureAutoJours());
    }

    /**
     * Tests the setDecalageOuvertureAuto() method.
     *
     * @return void
     */
    public function testSetDecalageOuvertureAuto() {

        $obj = new TypeMissions();

        $obj->setDecalageOuvertureAuto(10);
        $this->assertEquals(10, $obj->getDecalageOuvertureAuto());
    }

    /**
     * Tests the setDescriptif() method.
     *
     * @return void
     */
    public function testSetDescriptif() {

        $obj = new TypeMissions();

        $obj->setDescriptif("descriptif");
        $this->assertEquals("descriptif", $obj->getDescriptif());
    }

    /**
     * Tests the setDescriptifRtf() method.
     *
     * @return void
     */
    public function testSetDescriptifRtf() {

        $obj = new TypeMissions();

        $obj->setDescriptifRtf("descriptifRtf");
        $this->assertEquals("descriptifRtf", $obj->getDescriptifRtf());
    }

    /**
     * Tests the setFermetureAuto() method.
     *
     * @return void
     */
    public function testSetFermetureAuto() {

        $obj = new TypeMissions();

        $obj->setFermetureAuto(true);
        $this->assertEquals(true, $obj->getFermetureAuto());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new TypeMissions();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setMoisOuvertureAuto() method.
     *
     * @return void
     */
    public function testSetMoisOuvertureAuto() {

        $obj = new TypeMissions();

        $obj->setMoisOuvertureAuto(10);
        $this->assertEquals(10, $obj->getMoisOuvertureAuto());
    }

    /**
     * Tests the setOrdre() method.
     *
     * @return void
     */
    public function testSetOrdre() {

        $obj = new TypeMissions();

        $obj->setOrdre(10);
        $this->assertEquals(10, $obj->getOrdre());
    }

    /**
     * Tests the setRecurrente() method.
     *
     * @return void
     */
    public function testSetRecurrente() {

        $obj = new TypeMissions();

        $obj->setRecurrente(true);
        $this->assertEquals(true, $obj->getRecurrente());
    }

    /**
     * Tests the setTachesGroupe() method.
     *
     * @return void
     */
    public function testSetTachesGroupe() {

        $obj = new TypeMissions();

        $obj->setTachesGroupe("tachesGroupe");
        $this->assertEquals("tachesGroupe", $obj->getTachesGroupe());
    }

    /**
     * Tests the setTransfertCentre() method.
     *
     * @return void
     */
    public function testSetTransfertCentre() {

        $obj = new TypeMissions();

        $obj->setTransfertCentre(true);
        $this->assertEquals(true, $obj->getTransfertCentre());
    }

    /**
     * Tests the setTypeCentre() method.
     *
     * @return void
     */
    public function testSetTypeCentre() {

        $obj = new TypeMissions();

        $obj->setTypeCentre("typeCentre");
        $this->assertEquals("typeCentre", $obj->getTypeCentre());
    }

    /**
     * Tests the setTypeCompteur() method.
     *
     * @return void
     */
    public function testSetTypeCompteur() {

        $obj = new TypeMissions();

        $obj->setTypeCompteur(true);
        $this->assertEquals(true, $obj->getTypeCompteur());
    }

    /**
     * Tests the setTypeResponsable() method.
     *
     * @return void
     */
    public function testSetTypeResponsable() {

        $obj = new TypeMissions();

        $obj->setTypeResponsable("typeResponsable");
        $this->assertEquals("typeResponsable", $obj->getTypeResponsable());
    }

    /**
     * Tests the setTypeVisuTaches() method.
     *
     * @return void
     */
    public function testSetTypeVisuTaches() {

        $obj = new TypeMissions();

        $obj->setTypeVisuTaches("typeVisuTaches");
        $this->assertEquals("typeVisuTaches", $obj->getTypeVisuTaches());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new TypeMissions();

        $this->assertNull($obj->getArticle());
        $this->assertNull($obj->getCentreAnalytique());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeFamille());
        $this->assertNull($obj->getCodeResponsable());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDecalageFermetureAuto());
        $this->assertNull($obj->getDecalageFermetureAutoJours());
        $this->assertNull($obj->getDecalageOuvertureAuto());
        $this->assertNull($obj->getDescriptif());
        $this->assertNull($obj->getDescriptifRtf());
        $this->assertNull($obj->getFermetureAuto());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMoisOuvertureAuto());
        $this->assertNull($obj->getOrdre());
        $this->assertNull($obj->getRecurrente());
        $this->assertNull($obj->getTachesGroupe());
        $this->assertNull($obj->getTransfertCentre());
        $this->assertNull($obj->getTypeCentre());
        $this->assertNull($obj->getTypeCompteur());
        $this->assertNull($obj->getTypeResponsable());
        $this->assertNull($obj->getTypeVisuTaches());
    }
}
