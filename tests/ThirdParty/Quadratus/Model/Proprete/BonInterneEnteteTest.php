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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\BonInterneEntete;

/**
 * Bon interne entete test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class BonInterneEnteteTest extends AbstractTestCase {

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new BonInterneEntete();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeLivreur() method.
     *
     * @return void
     */
    public function testSetCodeLivreur() {

        $obj = new BonInterneEntete();

        $obj->setCodeLivreur("codeLivreur");
        $this->assertEquals("codeLivreur", $obj->getCodeLivreur());
    }

    /**
     * Tests the setDateLivraison() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateLivraison() {

        // Set a Date/time mock.
        $dateLivraison = new DateTime("2018-09-10");

        $obj = new BonInterneEntete();

        $obj->setDateLivraison($dateLivraison);
        $this->assertSame($dateLivraison, $obj->getDateLivraison());
    }

    /**
     * Tests the setLienDocument() method.
     *
     * @return void
     */
    public function testSetLienDocument() {

        $obj = new BonInterneEntete();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests the setNoBonInt() method.
     *
     * @return void
     */
    public function testSetNoBonInt() {

        $obj = new BonInterneEntete();

        $obj->setNoBonInt("noBonInt");
        $this->assertEquals("noBonInt", $obj->getNoBonInt());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new BonInterneEntete();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeLivreur());
        $this->assertNull($obj->getDateLivraison());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getNoBonInt());
    }
}
