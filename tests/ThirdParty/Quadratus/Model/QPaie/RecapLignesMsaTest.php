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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\RecapLignesMsa;

/**
 * Recap lignes msa test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class RecapLignesMsaTest extends AbstractTestCase {

    /**
     * Tests the setAdresseMsa() method.
     *
     * @return void
     */
    public function testSetAdresseMsa() {

        $obj = new RecapLignesMsa();

        $obj->setAdresseMsa("adresseMsa");
        $this->assertEquals("adresseMsa", $obj->getAdresseMsa());
    }

    /**
     * Tests the setCCollect() method.
     *
     * @return void
     */
    public function testSetCCollect() {

        $obj = new RecapLignesMsa();

        $obj->setCCollect("cCollect");
        $this->assertEquals("cCollect", $obj->getCCollect());
    }

    /**
     * Tests the setCodeActivite() method.
     *
     * @return void
     */
    public function testSetCodeActivite() {

        $obj = new RecapLignesMsa();

        $obj->setCodeActivite("codeActivite");
        $this->assertEquals("codeActivite", $obj->getCodeActivite());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new RecapLignesMsa();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeUnite() method.
     *
     * @return void
     */
    public function testSetCodeUnite() {

        $obj = new RecapLignesMsa();

        $obj->setCodeUnite("codeUnite");
        $this->assertEquals("codeUnite", $obj->getCodeUnite());
    }

    /**
     * Tests the setDateReglement() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateReglement() {

        // Set a Date/time mock.
        $dateReglement = new DateTime("2018-09-10");

        $obj = new RecapLignesMsa();

        $obj->setDateReglement($dateReglement);
        $this->assertSame($dateReglement, $obj->getDateReglement());
    }

    /**
     * Tests the setEffectifCice() method.
     *
     * @return void
     */
    public function testSetEffectifCice() {

        $obj = new RecapLignesMsa();

        $obj->setEffectifCice(10);
        $this->assertEquals(10, $obj->getEffectifCice());
    }

    /**
     * Tests the setFaitA() method.
     *
     * @return void
     */
    public function testSetFaitA() {

        $obj = new RecapLignesMsa();

        $obj->setFaitA("faitA");
        $this->assertEquals("faitA", $obj->getFaitA());
    }

    /**
     * Tests the setFaitLe() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFaitLe() {

        // Set a Date/time mock.
        $faitLe = new DateTime("2018-09-10");

        $obj = new RecapLignesMsa();

        $obj->setFaitLe($faitLe);
        $this->assertSame($faitLe, $obj->getFaitLe());
    }

    /**
     * Tests the setFinPer() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinPer() {

        // Set a Date/time mock.
        $finPer = new DateTime("2018-09-10");

        $obj = new RecapLignesMsa();

        $obj->setFinPer($finPer);
        $this->assertSame($finPer, $obj->getFinPer());
    }

    /**
     * Tests the setIntituleCodeUnite() method.
     *
     * @return void
     */
    public function testSetIntituleCodeUnite() {

        $obj = new RecapLignesMsa();

        $obj->setIntituleCodeUnite("intituleCodeUnite");
        $this->assertEquals("intituleCodeUnite", $obj->getIntituleCodeUnite());
    }

    /**
     * Tests the setListeServices() method.
     *
     * @return void
     */
    public function testSetListeServices() {

        $obj = new RecapLignesMsa();

        $obj->setListeServices("listeServices");
        $this->assertEquals("listeServices", $obj->getListeServices());
    }

    /**
     * Tests the setMtCsg() method.
     *
     * @return void
     */
    public function testSetMtCsg() {

        $obj = new RecapLignesMsa();

        $obj->setMtCsg(10);
        $this->assertEquals(10, $obj->getMtCsg());
    }

    /**
     * Tests the setMtCsgrdsrrImp() method.
     *
     * @return void
     */
    public function testSetMtCsgrdsrrImp() {

        $obj = new RecapLignesMsa();

        $obj->setMtCsgrdsrrImp(10);
        $this->assertEquals(10, $obj->getMtCsgrdsrrImp());
    }

    /**
     * Tests the setMtCsgrdsrrNonImp() method.
     *
     * @return void
     */
    public function testSetMtCsgrdsrrNonImp() {

        $obj = new RecapLignesMsa();

        $obj->setMtCsgrdsrrNonImp(10);
        $this->assertEquals(10, $obj->getMtCsgrdsrrNonImp());
    }

    /**
     * Tests the setMtElemCalcul57() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul57() {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul57(10);
        $this->assertEquals(10, $obj->getMtElemCalcul57());
    }

    /**
     * Tests the setMtElemCalcul58() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul58() {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul58(10);
        $this->assertEquals(10, $obj->getMtElemCalcul58());
    }

    /**
     * Tests the setMtElemCalcul59() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul59() {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul59(10);
        $this->assertEquals(10, $obj->getMtElemCalcul59());
    }

    /**
     * Tests the setMtElemCalcul60() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul60() {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul60(10);
        $this->assertEquals(10, $obj->getMtElemCalcul60());
    }

    /**
     * Tests the setMtElemCalcul61() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul61() {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul61(10);
        $this->assertEquals(10, $obj->getMtElemCalcul61());
    }

    /**
     * Tests the setMtElemCalcul62() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul62() {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul62(10);
        $this->assertEquals(10, $obj->getMtElemCalcul62());
    }

    /**
     * Tests the setMtElemCalcul63() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul63() {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul63(10);
        $this->assertEquals(10, $obj->getMtElemCalcul63());
    }

    /**
     * Tests the setMtElemCalcul65() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul65() {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul65(10);
        $this->assertEquals(10, $obj->getMtElemCalcul65());
    }

    /**
     * Tests the setMtElemCalcul66() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul66() {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul66(10);
        $this->assertEquals(10, $obj->getMtElemCalcul66());
    }

    /**
     * Tests the setMtElemCalcul67() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul67() {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul67(10);
        $this->assertEquals(10, $obj->getMtElemCalcul67());
    }

    /**
     * Tests the setMtElemCalcul68() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul68() {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul68(10);
        $this->assertEquals(10, $obj->getMtElemCalcul68());
    }

    /**
     * Tests the setMtElemCalcul69() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul69() {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul69(10);
        $this->assertEquals(10, $obj->getMtElemCalcul69());
    }

    /**
     * Tests the setMtElemCalcul70() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul70() {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul70(10);
        $this->assertEquals(10, $obj->getMtElemCalcul70());
    }

    /**
     * Tests the setMtElemCalcul71() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul71() {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul71(10);
        $this->assertEquals(10, $obj->getMtElemCalcul71());
    }

    /**
     * Tests the setMtElemCalcul72() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul72() {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul72(10);
        $this->assertEquals(10, $obj->getMtElemCalcul72());
    }

    /**
     * Tests the setMtElemCalcul73() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul73() {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul73(10);
        $this->assertEquals(10, $obj->getMtElemCalcul73());
    }

    /**
     * Tests the setMtElemCalcul74() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul74() {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul74(10);
        $this->assertEquals(10, $obj->getMtElemCalcul74());
    }

    /**
     * Tests the setMtElemCalcul75() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul75() {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul75(10);
        $this->assertEquals(10, $obj->getMtElemCalcul75());
    }

    /**
     * Tests the setMtElemCalcul76() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul76() {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul76(10);
        $this->assertEquals(10, $obj->getMtElemCalcul76());
    }

    /**
     * Tests the setMtElemCalcul77() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul77() {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul77(10);
        $this->assertEquals(10, $obj->getMtElemCalcul77());
    }

    /**
     * Tests the setMtElemCalcul78() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul78() {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul78(10);
        $this->assertEquals(10, $obj->getMtElemCalcul78());
    }

    /**
     * Tests the setMtElemCalcul79() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul79() {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul79(10);
        $this->assertEquals(10, $obj->getMtElemCalcul79());
    }

    /**
     * Tests the setMtElemCalcul97() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul97() {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul97(10);
        $this->assertEquals(10, $obj->getMtElemCalcul97());
    }

    /**
     * Tests the setMtElemCalcul98() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul98() {

        $obj = new RecapLignesMsa();

        $obj->setMtElemCalcul98(10);
        $this->assertEquals(10, $obj->getMtElemCalcul98());
    }

    /**
     * Tests the setMtTcp() method.
     *
     * @return void
     */
    public function testSetMtTcp() {

        $obj = new RecapLignesMsa();

        $obj->setMtTcp(10);
        $this->assertEquals(10, $obj->getMtTcp());
    }

    /**
     * Tests the setPerDebCice() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerDebCice() {

        // Set a Date/time mock.
        $perDebCice = new DateTime("2018-09-10");

        $obj = new RecapLignesMsa();

        $obj->setPerDebCice($perDebCice);
        $this->assertSame($perDebCice, $obj->getPerDebCice());
    }

    /**
     * Tests the setPerFinCice() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerFinCice() {

        // Set a Date/time mock.
        $perFinCice = new DateTime("2018-09-10");

        $obj = new RecapLignesMsa();

        $obj->setPerFinCice($perFinCice);
        $this->assertSame($perFinCice, $obj->getPerFinCice());
    }

    /**
     * Tests the setPeriodeDecla() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDecla() {

        // Set a Date/time mock.
        $periodeDecla = new DateTime("2018-09-10");

        $obj = new RecapLignesMsa();

        $obj->setPeriodeDecla($periodeDecla);
        $this->assertSame($periodeDecla, $obj->getPeriodeDecla());
    }

    /**
     * Tests the setPersonneContact() method.
     *
     * @return void
     */
    public function testSetPersonneContact() {

        $obj = new RecapLignesMsa();

        $obj->setPersonneContact("personneContact");
        $this->assertEquals("personneContact", $obj->getPersonneContact());
    }

    /**
     * Tests the setPremMois() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPremMois() {

        // Set a Date/time mock.
        $premMois = new DateTime("2018-09-10");

        $obj = new RecapLignesMsa();

        $obj->setPremMois($premMois);
        $this->assertSame($premMois, $obj->getPremMois());
    }

    /**
     * Tests the setSalariesDe() method.
     *
     * @return void
     */
    public function testSetSalariesDe() {

        $obj = new RecapLignesMsa();

        $obj->setSalariesDe("salariesDe");
        $this->assertEquals("salariesDe", $obj->getSalariesDe());
    }

    /**
     * Tests the setSelectionService() method.
     *
     * @return void
     */
    public function testSetSelectionService() {

        $obj = new RecapLignesMsa();

        $obj->setSelectionService("selectionService");
        $this->assertEquals("selectionService", $obj->getSelectionService());
    }

    /**
     * Tests the setSiren() method.
     *
     * @return void
     */
    public function testSetSiren() {

        $obj = new RecapLignesMsa();

        $obj->setSiren("siren");
        $this->assertEquals("siren", $obj->getSiren());
    }

    /**
     * Tests the setSiret() method.
     *
     * @return void
     */
    public function testSetSiret() {

        $obj = new RecapLignesMsa();

        $obj->setSiret("siret");
        $this->assertEquals("siret", $obj->getSiret());
    }

    /**
     * Tests the setSuiviPar() method.
     *
     * @return void
     */
    public function testSetSuiviPar() {

        $obj = new RecapLignesMsa();

        $obj->setSuiviPar("suiviPar");
        $this->assertEquals("suiviPar", $obj->getSuiviPar());
    }

    /**
     * Tests the setTelPersonne() method.
     *
     * @return void
     */
    public function testSetTelPersonne() {

        $obj = new RecapLignesMsa();

        $obj->setTelPersonne("telPersonne");
        $this->assertEquals("telPersonne", $obj->getTelPersonne());
    }

    /**
     * Tests the setTriDeclMsa() method.
     *
     * @return void
     */
    public function testSetTriDeclMsa() {

        $obj = new RecapLignesMsa();

        $obj->setTriDeclMsa("triDeclMsa");
        $this->assertEquals("triDeclMsa", $obj->getTriDeclMsa());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new RecapLignesMsa();

        $this->assertNull($obj->getAdresseMsa());
        $this->assertNull($obj->getCCollect());
        $this->assertNull($obj->getCodeActivite());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeUnite());
        $this->assertNull($obj->getDateReglement());
        $this->assertNull($obj->getEffectifCice());
        $this->assertNull($obj->getFaitA());
        $this->assertNull($obj->getFaitLe());
        $this->assertNull($obj->getFinPer());
        $this->assertNull($obj->getIntituleCodeUnite());
        $this->assertNull($obj->getListeServices());
        $this->assertNull($obj->getMtCsg());
        $this->assertNull($obj->getMtCsgrdsrrImp());
        $this->assertNull($obj->getMtCsgrdsrrNonImp());
        $this->assertNull($obj->getMtElemCalcul57());
        $this->assertNull($obj->getMtElemCalcul58());
        $this->assertNull($obj->getMtElemCalcul59());
        $this->assertNull($obj->getMtElemCalcul60());
        $this->assertNull($obj->getMtElemCalcul61());
        $this->assertNull($obj->getMtElemCalcul62());
        $this->assertNull($obj->getMtElemCalcul63());
        $this->assertNull($obj->getMtElemCalcul65());
        $this->assertNull($obj->getMtElemCalcul66());
        $this->assertNull($obj->getMtElemCalcul67());
        $this->assertNull($obj->getMtElemCalcul68());
        $this->assertNull($obj->getMtElemCalcul69());
        $this->assertNull($obj->getMtElemCalcul70());
        $this->assertNull($obj->getMtElemCalcul71());
        $this->assertNull($obj->getMtElemCalcul72());
        $this->assertNull($obj->getMtElemCalcul73());
        $this->assertNull($obj->getMtElemCalcul74());
        $this->assertNull($obj->getMtElemCalcul75());
        $this->assertNull($obj->getMtElemCalcul76());
        $this->assertNull($obj->getMtElemCalcul77());
        $this->assertNull($obj->getMtElemCalcul78());
        $this->assertNull($obj->getMtElemCalcul79());
        $this->assertNull($obj->getMtElemCalcul97());
        $this->assertNull($obj->getMtElemCalcul98());
        $this->assertNull($obj->getMtTcp());
        $this->assertNull($obj->getPerDebCice());
        $this->assertNull($obj->getPerFinCice());
        $this->assertNull($obj->getPeriodeDecla());
        $this->assertNull($obj->getPersonneContact());
        $this->assertNull($obj->getPremMois());
        $this->assertNull($obj->getSiren());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSalariesDe());
        $this->assertNull($obj->getSelectionService());
        $this->assertNull($obj->getSuiviPar());
        $this->assertNull($obj->getTelPersonne());
        $this->assertNull($obj->getTriDeclMsa());
    }
}
