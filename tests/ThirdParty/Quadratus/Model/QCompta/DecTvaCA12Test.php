<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\DecTvaCA12;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Dec tva c a12 model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class DecTvaCA12Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DecTvaCA12();

        $this->assertNull($obj->getDateCession());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTxImposition());
        $this->assertNull($obj->getTypeCA12());
        $this->assertNull($obj->getz0008());
        $this->assertNull($obj->getz0018());
        $this->assertNull($obj->getz0019());
        $this->assertNull($obj->getz0020());
        $this->assertNull($obj->getz0028());
        $this->assertNull($obj->getz0030b());
        $this->assertNull($obj->getz0058());
        $this->assertNull($obj->getz0704());
        $this->assertNull($obj->getz0709());
        $this->assertNull($obj->getz0970());
        $this->assertNull($obj->getz0970b());
        $this->assertNull($obj->getz0980());
        $this->assertNull($obj->getz0980b());
        $this->assertNull($obj->getz0981());
        $this->assertNull($obj->getz0981b());
        $this->assertNull($obj->getz0982());
        $this->assertNull($obj->getz0983());
        $this->assertNull($obj->getz3240());
        $this->assertNull($obj->getz32Code());
        $this->assertNull($obj->getz32Libelle());
        $this->assertNull($obj->getz32Taxe());
        $this->assertNull($obj->getz35BCode());
        $this->assertNull($obj->getz35BLibelle());
        $this->assertNull($obj->getz35BTaxe());
        $this->assertNull($obj->getz35Code());
        $this->assertNull($obj->getz35Libelle());
        $this->assertNull($obj->getz35Taxe());
        $this->assertNull($obj->getz4202());
        $this->assertNull($obj->getz4213());
        $this->assertNull($obj->getz4216());
        $this->assertNull($obj->getz4217());
        $this->assertNull($obj->getz4218());
        $this->assertNull($obj->getz4220());
        $this->assertNull($obj->getz45CA12());
        $this->assertNull($obj->getz45CA12Code());
        $this->assertNull($obj->getz45CA12Libelle());
        $this->assertNull($obj->getz47CA12());
        $this->assertNull($obj->getz47CA12Code());
        $this->assertNull($obj->getz47CA12Libelle());
        $this->assertNull($obj->getz4ACA12());
        $this->assertNull($obj->getz4ACA12Code());
        $this->assertNull($obj->getz4ACA12Libelle());
        $this->assertNull($obj->getz4BCA12());
        $this->assertNull($obj->getz4BCA12Code());
        $this->assertNull($obj->getz4BCA12Libelle());
        $this->assertNull($obj->getz4CCA12());
        $this->assertNull($obj->getz4CCA12Code());
        $this->assertNull($obj->getz4CCA12Libelle());
        $this->assertNull($obj->getz5bCode());
        $this->assertNull($obj->getz5bHT());
        $this->assertNull($obj->getz5bLibelle());
        $this->assertNull($obj->getz5bTaxe());
        $this->assertNull($obj->getz7bCode());
        $this->assertNull($obj->getz7bHT());
        $this->assertNull($obj->getz7bLibelle());
        $this->assertNull($obj->getz7bTaxe());
        $this->assertNull($obj->getz8004());
        $this->assertNull($obj->getzAcompteDeduit1());
        $this->assertNull($obj->getzAcompteDeduit2());
        $this->assertNull($obj->getzAcompteDeduit3());
        $this->assertNull($obj->getzAcompteDeduit4());
        $this->assertNull($obj->getzAnneeAcompte1());
        $this->assertNull($obj->getzAnneeAcompte2());
        $this->assertNull($obj->getzAnneeAcompte3());
        $this->assertNull($obj->getzAnneeAcompte4());
        $this->assertNull($obj->getzCol1Acompte1());
        $this->assertNull($obj->getzCol1Acompte2());
        $this->assertNull($obj->getzCol1Acompte3());
        $this->assertNull($obj->getzCol1Acompte4());
        $this->assertNull($obj->getzCol2Acompte1());
        $this->assertNull($obj->getzCol2Acompte2());
        $this->assertNull($obj->getzCol2Acompte3());
        $this->assertNull($obj->getzCol2Acompte4());
        $this->assertNull($obj->getzExcedentVersement());
        $this->assertNull($obj->getzNomDemandeurRbt());
        $this->assertNull($obj->getzNumMSA());
        $this->assertNull($obj->getzRBTBIC());
        $this->assertNull($obj->getzRBTIBAN());
        $this->assertNull($obj->getzRBTQualite());
        $this->assertNull($obj->getzRBTRIB());
        $this->assertNull($obj->getzRBTVille());
        $this->assertNull($obj->getzRbtDemande());
        $this->assertNull($obj->getzSoldeAPayer());
        $this->assertNull($obj->getzSurfaceAgr());
        $this->assertNull($obj->getzTaxesFiscales());
        $this->assertNull($obj->getzYaDemandeRbt());
    }

    /**
     * Tests the setDateCession() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCession() {

        $obj = new DecTvaCA12();

        $obj->setDateCession(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCession());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        $obj = new DecTvaCA12();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setTxImposition() method.
     *
     * @return void
     */
    public function testSetTxImposition() {

        $obj = new DecTvaCA12();

        $obj->setTxImposition(10.092018);
        $this->assertEquals(10.092018, $obj->getTxImposition());
    }

    /**
     * Tests the setTypeCA12() method.
     *
     * @return void
     */
    public function testSetTypeCA12() {

        $obj = new DecTvaCA12();

        $obj->setTypeCA12("typeCA12");
        $this->assertEquals("typeCA12", $obj->getTypeCA12());
    }

    /**
     * Tests the setz0008() method.
     *
     * @return void
     */
    public function testSetz0008() {

        $obj = new DecTvaCA12();

        $obj->setz0008(10.092018);
        $this->assertEquals(10.092018, $obj->getz0008());
    }

    /**
     * Tests the setz0018() method.
     *
     * @return void
     */
    public function testSetz0018() {

        $obj = new DecTvaCA12();

        $obj->setz0018(10.092018);
        $this->assertEquals(10.092018, $obj->getz0018());
    }

    /**
     * Tests the setz0019() method.
     *
     * @return void
     */
    public function testSetz0019() {

        $obj = new DecTvaCA12();

        $obj->setz0019(10.092018);
        $this->assertEquals(10.092018, $obj->getz0019());
    }

    /**
     * Tests the setz0020() method.
     *
     * @return void
     */
    public function testSetz0020() {

        $obj = new DecTvaCA12();

        $obj->setz0020(10.092018);
        $this->assertEquals(10.092018, $obj->getz0020());
    }

    /**
     * Tests the setz0028() method.
     *
     * @return void
     */
    public function testSetz0028() {

        $obj = new DecTvaCA12();

        $obj->setz0028(10.092018);
        $this->assertEquals(10.092018, $obj->getz0028());
    }

    /**
     * Tests the setz0030b() method.
     *
     * @return void
     */
    public function testSetz0030b() {

        $obj = new DecTvaCA12();

        $obj->setz0030b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0030b());
    }

    /**
     * Tests the setz0058() method.
     *
     * @return void
     */
    public function testSetz0058() {

        $obj = new DecTvaCA12();

        $obj->setz0058(10.092018);
        $this->assertEquals(10.092018, $obj->getz0058());
    }

    /**
     * Tests the setz0704() method.
     *
     * @return void
     */
    public function testSetz0704() {

        $obj = new DecTvaCA12();

        $obj->setz0704(10.092018);
        $this->assertEquals(10.092018, $obj->getz0704());
    }

    /**
     * Tests the setz0709() method.
     *
     * @return void
     */
    public function testSetz0709() {

        $obj = new DecTvaCA12();

        $obj->setz0709(10.092018);
        $this->assertEquals(10.092018, $obj->getz0709());
    }

    /**
     * Tests the setz0970() method.
     *
     * @return void
     */
    public function testSetz0970() {

        $obj = new DecTvaCA12();

        $obj->setz0970(10.092018);
        $this->assertEquals(10.092018, $obj->getz0970());
    }

    /**
     * Tests the setz0970b() method.
     *
     * @return void
     */
    public function testSetz0970b() {

        $obj = new DecTvaCA12();

        $obj->setz0970b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0970b());
    }

    /**
     * Tests the setz0980() method.
     *
     * @return void
     */
    public function testSetz0980() {

        $obj = new DecTvaCA12();

        $obj->setz0980(10.092018);
        $this->assertEquals(10.092018, $obj->getz0980());
    }

    /**
     * Tests the setz0980b() method.
     *
     * @return void
     */
    public function testSetz0980b() {

        $obj = new DecTvaCA12();

        $obj->setz0980b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0980b());
    }

    /**
     * Tests the setz0981() method.
     *
     * @return void
     */
    public function testSetz0981() {

        $obj = new DecTvaCA12();

        $obj->setz0981(10.092018);
        $this->assertEquals(10.092018, $obj->getz0981());
    }

    /**
     * Tests the setz0981b() method.
     *
     * @return void
     */
    public function testSetz0981b() {

        $obj = new DecTvaCA12();

        $obj->setz0981b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0981b());
    }

    /**
     * Tests the setz0982() method.
     *
     * @return void
     */
    public function testSetz0982() {

        $obj = new DecTvaCA12();

        $obj->setz0982(10.092018);
        $this->assertEquals(10.092018, $obj->getz0982());
    }

    /**
     * Tests the setz0983() method.
     *
     * @return void
     */
    public function testSetz0983() {

        $obj = new DecTvaCA12();

        $obj->setz0983(10.092018);
        $this->assertEquals(10.092018, $obj->getz0983());
    }

    /**
     * Tests the setz3240() method.
     *
     * @return void
     */
    public function testSetz3240() {

        $obj = new DecTvaCA12();

        $obj->setz3240(10.092018);
        $this->assertEquals(10.092018, $obj->getz3240());
    }

    /**
     * Tests the setz32Code() method.
     *
     * @return void
     */
    public function testSetz32Code() {

        $obj = new DecTvaCA12();

        $obj->setz32Code("z32Code");
        $this->assertEquals("z32Code", $obj->getz32Code());
    }

    /**
     * Tests the setz32Libelle() method.
     *
     * @return void
     */
    public function testSetz32Libelle() {

        $obj = new DecTvaCA12();

        $obj->setz32Libelle("z32Libelle");
        $this->assertEquals("z32Libelle", $obj->getz32Libelle());
    }

    /**
     * Tests the setz32Taxe() method.
     *
     * @return void
     */
    public function testSetz32Taxe() {

        $obj = new DecTvaCA12();

        $obj->setz32Taxe(10.092018);
        $this->assertEquals(10.092018, $obj->getz32Taxe());
    }

    /**
     * Tests the setz35BCode() method.
     *
     * @return void
     */
    public function testSetz35BCode() {

        $obj = new DecTvaCA12();

        $obj->setz35BCode("z35BCode");
        $this->assertEquals("z35BCode", $obj->getz35BCode());
    }

    /**
     * Tests the setz35BLibelle() method.
     *
     * @return void
     */
    public function testSetz35BLibelle() {

        $obj = new DecTvaCA12();

        $obj->setz35BLibelle("z35BLibelle");
        $this->assertEquals("z35BLibelle", $obj->getz35BLibelle());
    }

    /**
     * Tests the setz35BTaxe() method.
     *
     * @return void
     */
    public function testSetz35BTaxe() {

        $obj = new DecTvaCA12();

        $obj->setz35BTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getz35BTaxe());
    }

    /**
     * Tests the setz35Code() method.
     *
     * @return void
     */
    public function testSetz35Code() {

        $obj = new DecTvaCA12();

        $obj->setz35Code("z35Code");
        $this->assertEquals("z35Code", $obj->getz35Code());
    }

    /**
     * Tests the setz35Libelle() method.
     *
     * @return void
     */
    public function testSetz35Libelle() {

        $obj = new DecTvaCA12();

        $obj->setz35Libelle("z35Libelle");
        $this->assertEquals("z35Libelle", $obj->getz35Libelle());
    }

    /**
     * Tests the setz35Taxe() method.
     *
     * @return void
     */
    public function testSetz35Taxe() {

        $obj = new DecTvaCA12();

        $obj->setz35Taxe(10.092018);
        $this->assertEquals(10.092018, $obj->getz35Taxe());
    }

    /**
     * Tests the setz4202() method.
     *
     * @return void
     */
    public function testSetz4202() {

        $obj = new DecTvaCA12();

        $obj->setz4202(10.092018);
        $this->assertEquals(10.092018, $obj->getz4202());
    }

    /**
     * Tests the setz4213() method.
     *
     * @return void
     */
    public function testSetz4213() {

        $obj = new DecTvaCA12();

        $obj->setz4213(10.092018);
        $this->assertEquals(10.092018, $obj->getz4213());
    }

    /**
     * Tests the setz4216() method.
     *
     * @return void
     */
    public function testSetz4216() {

        $obj = new DecTvaCA12();

        $obj->setz4216(10.092018);
        $this->assertEquals(10.092018, $obj->getz4216());
    }

    /**
     * Tests the setz4217() method.
     *
     * @return void
     */
    public function testSetz4217() {

        $obj = new DecTvaCA12();

        $obj->setz4217(10.092018);
        $this->assertEquals(10.092018, $obj->getz4217());
    }

    /**
     * Tests the setz4218() method.
     *
     * @return void
     */
    public function testSetz4218() {

        $obj = new DecTvaCA12();

        $obj->setz4218(10.092018);
        $this->assertEquals(10.092018, $obj->getz4218());
    }

    /**
     * Tests the setz4220() method.
     *
     * @return void
     */
    public function testSetz4220() {

        $obj = new DecTvaCA12();

        $obj->setz4220(10.092018);
        $this->assertEquals(10.092018, $obj->getz4220());
    }

    /**
     * Tests the setz45CA12() method.
     *
     * @return void
     */
    public function testSetz45CA12() {

        $obj = new DecTvaCA12();

        $obj->setz45CA12(10.092018);
        $this->assertEquals(10.092018, $obj->getz45CA12());
    }

    /**
     * Tests the setz45CA12Code() method.
     *
     * @return void
     */
    public function testSetz45CA12Code() {

        $obj = new DecTvaCA12();

        $obj->setz45CA12Code("z45CA12Code");
        $this->assertEquals("z45CA12Code", $obj->getz45CA12Code());
    }

    /**
     * Tests the setz45CA12Libelle() method.
     *
     * @return void
     */
    public function testSetz45CA12Libelle() {

        $obj = new DecTvaCA12();

        $obj->setz45CA12Libelle("z45CA12Libelle");
        $this->assertEquals("z45CA12Libelle", $obj->getz45CA12Libelle());
    }

    /**
     * Tests the setz47CA12() method.
     *
     * @return void
     */
    public function testSetz47CA12() {

        $obj = new DecTvaCA12();

        $obj->setz47CA12(10.092018);
        $this->assertEquals(10.092018, $obj->getz47CA12());
    }

    /**
     * Tests the setz47CA12Code() method.
     *
     * @return void
     */
    public function testSetz47CA12Code() {

        $obj = new DecTvaCA12();

        $obj->setz47CA12Code("z47CA12Code");
        $this->assertEquals("z47CA12Code", $obj->getz47CA12Code());
    }

    /**
     * Tests the setz47CA12Libelle() method.
     *
     * @return void
     */
    public function testSetz47CA12Libelle() {

        $obj = new DecTvaCA12();

        $obj->setz47CA12Libelle("z47CA12Libelle");
        $this->assertEquals("z47CA12Libelle", $obj->getz47CA12Libelle());
    }

    /**
     * Tests the setz4ACA12() method.
     *
     * @return void
     */
    public function testSetz4ACA12() {

        $obj = new DecTvaCA12();

        $obj->setz4ACA12(10.092018);
        $this->assertEquals(10.092018, $obj->getz4ACA12());
    }

    /**
     * Tests the setz4ACA12Code() method.
     *
     * @return void
     */
    public function testSetz4ACA12Code() {

        $obj = new DecTvaCA12();

        $obj->setz4ACA12Code("z4ACA12Code");
        $this->assertEquals("z4ACA12Code", $obj->getz4ACA12Code());
    }

    /**
     * Tests the setz4ACA12Libelle() method.
     *
     * @return void
     */
    public function testSetz4ACA12Libelle() {

        $obj = new DecTvaCA12();

        $obj->setz4ACA12Libelle("z4ACA12Libelle");
        $this->assertEquals("z4ACA12Libelle", $obj->getz4ACA12Libelle());
    }

    /**
     * Tests the setz4BCA12() method.
     *
     * @return void
     */
    public function testSetz4BCA12() {

        $obj = new DecTvaCA12();

        $obj->setz4BCA12(10.092018);
        $this->assertEquals(10.092018, $obj->getz4BCA12());
    }

    /**
     * Tests the setz4BCA12Code() method.
     *
     * @return void
     */
    public function testSetz4BCA12Code() {

        $obj = new DecTvaCA12();

        $obj->setz4BCA12Code("z4BCA12Code");
        $this->assertEquals("z4BCA12Code", $obj->getz4BCA12Code());
    }

    /**
     * Tests the setz4BCA12Libelle() method.
     *
     * @return void
     */
    public function testSetz4BCA12Libelle() {

        $obj = new DecTvaCA12();

        $obj->setz4BCA12Libelle("z4BCA12Libelle");
        $this->assertEquals("z4BCA12Libelle", $obj->getz4BCA12Libelle());
    }

    /**
     * Tests the setz4CCA12() method.
     *
     * @return void
     */
    public function testSetz4CCA12() {

        $obj = new DecTvaCA12();

        $obj->setz4CCA12(10.092018);
        $this->assertEquals(10.092018, $obj->getz4CCA12());
    }

    /**
     * Tests the setz4CCA12Code() method.
     *
     * @return void
     */
    public function testSetz4CCA12Code() {

        $obj = new DecTvaCA12();

        $obj->setz4CCA12Code("z4CCA12Code");
        $this->assertEquals("z4CCA12Code", $obj->getz4CCA12Code());
    }

    /**
     * Tests the setz4CCA12Libelle() method.
     *
     * @return void
     */
    public function testSetz4CCA12Libelle() {

        $obj = new DecTvaCA12();

        $obj->setz4CCA12Libelle("z4CCA12Libelle");
        $this->assertEquals("z4CCA12Libelle", $obj->getz4CCA12Libelle());
    }

    /**
     * Tests the setz5bCode() method.
     *
     * @return void
     */
    public function testSetz5bCode() {

        $obj = new DecTvaCA12();

        $obj->setz5bCode("z5bCode");
        $this->assertEquals("z5bCode", $obj->getz5bCode());
    }

    /**
     * Tests the setz5bHT() method.
     *
     * @return void
     */
    public function testSetz5bHT() {

        $obj = new DecTvaCA12();

        $obj->setz5bHT(10.092018);
        $this->assertEquals(10.092018, $obj->getz5bHT());
    }

    /**
     * Tests the setz5bLibelle() method.
     *
     * @return void
     */
    public function testSetz5bLibelle() {

        $obj = new DecTvaCA12();

        $obj->setz5bLibelle("z5bLibelle");
        $this->assertEquals("z5bLibelle", $obj->getz5bLibelle());
    }

    /**
     * Tests the setz5bTaxe() method.
     *
     * @return void
     */
    public function testSetz5bTaxe() {

        $obj = new DecTvaCA12();

        $obj->setz5bTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getz5bTaxe());
    }

    /**
     * Tests the setz7bCode() method.
     *
     * @return void
     */
    public function testSetz7bCode() {

        $obj = new DecTvaCA12();

        $obj->setz7bCode("z7bCode");
        $this->assertEquals("z7bCode", $obj->getz7bCode());
    }

    /**
     * Tests the setz7bHT() method.
     *
     * @return void
     */
    public function testSetz7bHT() {

        $obj = new DecTvaCA12();

        $obj->setz7bHT(10.092018);
        $this->assertEquals(10.092018, $obj->getz7bHT());
    }

    /**
     * Tests the setz7bLibelle() method.
     *
     * @return void
     */
    public function testSetz7bLibelle() {

        $obj = new DecTvaCA12();

        $obj->setz7bLibelle("z7bLibelle");
        $this->assertEquals("z7bLibelle", $obj->getz7bLibelle());
    }

    /**
     * Tests the setz7bTaxe() method.
     *
     * @return void
     */
    public function testSetz7bTaxe() {

        $obj = new DecTvaCA12();

        $obj->setz7bTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getz7bTaxe());
    }

    /**
     * Tests the setz8004() method.
     *
     * @return void
     */
    public function testSetz8004() {

        $obj = new DecTvaCA12();

        $obj->setz8004(10.092018);
        $this->assertEquals(10.092018, $obj->getz8004());
    }

    /**
     * Tests the setzAcompteDeduit1() method.
     *
     * @return void
     */
    public function testSetzAcompteDeduit1() {

        $obj = new DecTvaCA12();

        $obj->setzAcompteDeduit1(true);
        $this->assertEquals(true, $obj->getzAcompteDeduit1());
    }

    /**
     * Tests the setzAcompteDeduit2() method.
     *
     * @return void
     */
    public function testSetzAcompteDeduit2() {

        $obj = new DecTvaCA12();

        $obj->setzAcompteDeduit2(true);
        $this->assertEquals(true, $obj->getzAcompteDeduit2());
    }

    /**
     * Tests the setzAcompteDeduit3() method.
     *
     * @return void
     */
    public function testSetzAcompteDeduit3() {

        $obj = new DecTvaCA12();

        $obj->setzAcompteDeduit3(true);
        $this->assertEquals(true, $obj->getzAcompteDeduit3());
    }

    /**
     * Tests the setzAcompteDeduit4() method.
     *
     * @return void
     */
    public function testSetzAcompteDeduit4() {

        $obj = new DecTvaCA12();

        $obj->setzAcompteDeduit4(true);
        $this->assertEquals(true, $obj->getzAcompteDeduit4());
    }

    /**
     * Tests the setzAnneeAcompte1() method.
     *
     * @return void
     */
    public function testSetzAnneeAcompte1() {

        $obj = new DecTvaCA12();

        $obj->setzAnneeAcompte1(10);
        $this->assertEquals(10, $obj->getzAnneeAcompte1());
    }

    /**
     * Tests the setzAnneeAcompte2() method.
     *
     * @return void
     */
    public function testSetzAnneeAcompte2() {

        $obj = new DecTvaCA12();

        $obj->setzAnneeAcompte2(10);
        $this->assertEquals(10, $obj->getzAnneeAcompte2());
    }

    /**
     * Tests the setzAnneeAcompte3() method.
     *
     * @return void
     */
    public function testSetzAnneeAcompte3() {

        $obj = new DecTvaCA12();

        $obj->setzAnneeAcompte3(10);
        $this->assertEquals(10, $obj->getzAnneeAcompte3());
    }

    /**
     * Tests the setzAnneeAcompte4() method.
     *
     * @return void
     */
    public function testSetzAnneeAcompte4() {

        $obj = new DecTvaCA12();

        $obj->setzAnneeAcompte4(10);
        $this->assertEquals(10, $obj->getzAnneeAcompte4());
    }

    /**
     * Tests the setzCol1Acompte1() method.
     *
     * @return void
     */
    public function testSetzCol1Acompte1() {

        $obj = new DecTvaCA12();

        $obj->setzCol1Acompte1(10.092018);
        $this->assertEquals(10.092018, $obj->getzCol1Acompte1());
    }

    /**
     * Tests the setzCol1Acompte2() method.
     *
     * @return void
     */
    public function testSetzCol1Acompte2() {

        $obj = new DecTvaCA12();

        $obj->setzCol1Acompte2(10.092018);
        $this->assertEquals(10.092018, $obj->getzCol1Acompte2());
    }

    /**
     * Tests the setzCol1Acompte3() method.
     *
     * @return void
     */
    public function testSetzCol1Acompte3() {

        $obj = new DecTvaCA12();

        $obj->setzCol1Acompte3(10.092018);
        $this->assertEquals(10.092018, $obj->getzCol1Acompte3());
    }

    /**
     * Tests the setzCol1Acompte4() method.
     *
     * @return void
     */
    public function testSetzCol1Acompte4() {

        $obj = new DecTvaCA12();

        $obj->setzCol1Acompte4(10.092018);
        $this->assertEquals(10.092018, $obj->getzCol1Acompte4());
    }

    /**
     * Tests the setzCol2Acompte1() method.
     *
     * @return void
     */
    public function testSetzCol2Acompte1() {

        $obj = new DecTvaCA12();

        $obj->setzCol2Acompte1(10.092018);
        $this->assertEquals(10.092018, $obj->getzCol2Acompte1());
    }

    /**
     * Tests the setzCol2Acompte2() method.
     *
     * @return void
     */
    public function testSetzCol2Acompte2() {

        $obj = new DecTvaCA12();

        $obj->setzCol2Acompte2(10.092018);
        $this->assertEquals(10.092018, $obj->getzCol2Acompte2());
    }

    /**
     * Tests the setzCol2Acompte3() method.
     *
     * @return void
     */
    public function testSetzCol2Acompte3() {

        $obj = new DecTvaCA12();

        $obj->setzCol2Acompte3(10.092018);
        $this->assertEquals(10.092018, $obj->getzCol2Acompte3());
    }

    /**
     * Tests the setzCol2Acompte4() method.
     *
     * @return void
     */
    public function testSetzCol2Acompte4() {

        $obj = new DecTvaCA12();

        $obj->setzCol2Acompte4(10.092018);
        $this->assertEquals(10.092018, $obj->getzCol2Acompte4());
    }

    /**
     * Tests the setzExcedentVersement() method.
     *
     * @return void
     */
    public function testSetzExcedentVersement() {

        $obj = new DecTvaCA12();

        $obj->setzExcedentVersement(10.092018);
        $this->assertEquals(10.092018, $obj->getzExcedentVersement());
    }

    /**
     * Tests the setzNomDemandeurRbt() method.
     *
     * @return void
     */
    public function testSetzNomDemandeurRbt() {

        $obj = new DecTvaCA12();

        $obj->setzNomDemandeurRbt("zNomDemandeurRbt");
        $this->assertEquals("zNomDemandeurRbt", $obj->getzNomDemandeurRbt());
    }

    /**
     * Tests the setzNumMSA() method.
     *
     * @return void
     */
    public function testSetzNumMSA() {

        $obj = new DecTvaCA12();

        $obj->setzNumMSA("zNumMSA");
        $this->assertEquals("zNumMSA", $obj->getzNumMSA());
    }

    /**
     * Tests the setzRBTBIC() method.
     *
     * @return void
     */
    public function testSetzRBTBIC() {

        $obj = new DecTvaCA12();

        $obj->setzRBTBIC("zRBTBIC");
        $this->assertEquals("zRBTBIC", $obj->getzRBTBIC());
    }

    /**
     * Tests the setzRBTIBAN() method.
     *
     * @return void
     */
    public function testSetzRBTIBAN() {

        $obj = new DecTvaCA12();

        $obj->setzRBTIBAN("zRBTIBAN");
        $this->assertEquals("zRBTIBAN", $obj->getzRBTIBAN());
    }

    /**
     * Tests the setzRBTQualite() method.
     *
     * @return void
     */
    public function testSetzRBTQualite() {

        $obj = new DecTvaCA12();

        $obj->setzRBTQualite("zRBTQualite");
        $this->assertEquals("zRBTQualite", $obj->getzRBTQualite());
    }

    /**
     * Tests the setzRBTRIB() method.
     *
     * @return void
     */
    public function testSetzRBTRIB() {

        $obj = new DecTvaCA12();

        $obj->setzRBTRIB("zRBTRIB");
        $this->assertEquals("zRBTRIB", $obj->getzRBTRIB());
    }

    /**
     * Tests the setzRBTVille() method.
     *
     * @return void
     */
    public function testSetzRBTVille() {

        $obj = new DecTvaCA12();

        $obj->setzRBTVille("zRBTVille");
        $this->assertEquals("zRBTVille", $obj->getzRBTVille());
    }

    /**
     * Tests the setzRbtDemande() method.
     *
     * @return void
     */
    public function testSetzRbtDemande() {

        $obj = new DecTvaCA12();

        $obj->setzRbtDemande(10.092018);
        $this->assertEquals(10.092018, $obj->getzRbtDemande());
    }

    /**
     * Tests the setzSoldeAPayer() method.
     *
     * @return void
     */
    public function testSetzSoldeAPayer() {

        $obj = new DecTvaCA12();

        $obj->setzSoldeAPayer(10.092018);
        $this->assertEquals(10.092018, $obj->getzSoldeAPayer());
    }

    /**
     * Tests the setzSurfaceAgr() method.
     *
     * @return void
     */
    public function testSetzSurfaceAgr() {

        $obj = new DecTvaCA12();

        $obj->setzSurfaceAgr(10);
        $this->assertEquals(10, $obj->getzSurfaceAgr());
    }

    /**
     * Tests the setzTaxesFiscales() method.
     *
     * @return void
     */
    public function testSetzTaxesFiscales() {

        $obj = new DecTvaCA12();

        $obj->setzTaxesFiscales(10.092018);
        $this->assertEquals(10.092018, $obj->getzTaxesFiscales());
    }

    /**
     * Tests the setzYaDemandeRbt() method.
     *
     * @return void
     */
    public function testSetzYaDemandeRbt() {

        $obj = new DecTvaCA12();

        $obj->setzYaDemandeRbt(true);
        $this->assertEquals(true, $obj->getzYaDemandeRbt());
    }
}
