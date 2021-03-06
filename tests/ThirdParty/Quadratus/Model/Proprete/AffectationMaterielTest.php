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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\AffectationMateriel;

/**
 * Affectation materiel test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class AffectationMaterielTest extends AbstractTestCase {

    /**
     * Tests the setBudgetDepenseEuro() method.
     *
     * @return void
     */
    public function testSetBudgetDepenseEuro() {

        $obj = new AffectationMateriel();

        $obj->setBudgetDepenseEuro(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetDepenseEuro());
    }

    /**
     * Tests the setBudgetDepenseFrf() method.
     *
     * @return void
     */
    public function testSetBudgetDepenseFrf() {

        $obj = new AffectationMateriel();

        $obj->setBudgetDepenseFrf(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetDepenseFrf());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new AffectationMateriel();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new AffectationMateriel();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new AffectationMateriel();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeMateriel() method.
     *
     * @return void
     */
    public function testSetCodeMateriel() {

        $obj = new AffectationMateriel();

        $obj->setCodeMateriel("codeMateriel");
        $this->assertEquals("codeMateriel", $obj->getCodeMateriel());
    }

    /**
     * Tests the setCodeTache() method.
     *
     * @return void
     */
    public function testSetCodeTache() {

        $obj = new AffectationMateriel();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests the setDebutAffect() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebutAffect() {

        // Set a Date/time mock.
        $debutAffect = new DateTime("2018-09-10");

        $obj = new AffectationMateriel();

        $obj->setDebutAffect($debutAffect);
        $this->assertSame($debutAffect, $obj->getDebutAffect());
    }

    /**
     * Tests the setFinAffect() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinAffect() {

        // Set a Date/time mock.
        $finAffect = new DateTime("2018-09-10");

        $obj = new AffectationMateriel();

        $obj->setFinAffect($finAffect);
        $this->assertSame($finAffect, $obj->getFinAffect());
    }

    /**
     * Tests the setPourcentUtilise() method.
     *
     * @return void
     */
    public function testSetPourcentUtilise() {

        $obj = new AffectationMateriel();

        $obj->setPourcentUtilise(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentUtilise());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new AffectationMateriel();

        $this->assertNull($obj->getBudgetDepenseEuro());
        $this->assertNull($obj->getBudgetDepenseFrf());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeMateriel());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getDebutAffect());
        $this->assertNull($obj->getFinAffect());
        $this->assertNull($obj->getPourcentUtilise());
    }
}
