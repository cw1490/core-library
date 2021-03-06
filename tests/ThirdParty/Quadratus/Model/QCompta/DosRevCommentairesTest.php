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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\DosRevCommentaires;

/**
 * Dos rev commentaires test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class DosRevCommentairesTest extends AbstractTestCase {

    /**
     * Tests the setBloquant() method.
     *
     * @return void
     */
    public function testSetBloquant() {

        $obj = new DosRevCommentaires();

        $obj->setBloquant(true);
        $this->assertEquals(true, $obj->getBloquant());
    }

    /**
     * Tests the setCodeCollModifQuestion() method.
     *
     * @return void
     */
    public function testSetCodeCollModifQuestion() {

        $obj = new DosRevCommentaires();

        $obj->setCodeCollModifQuestion("codeCollModifQuestion");
        $this->assertEquals("codeCollModifQuestion", $obj->getCodeCollModifQuestion());
    }

    /**
     * Tests the setCodeCollModifReponse() method.
     *
     * @return void
     */
    public function testSetCodeCollModifReponse() {

        $obj = new DosRevCommentaires();

        $obj->setCodeCollModifReponse("codeCollModifReponse");
        $this->assertEquals("codeCollModifReponse", $obj->getCodeCollModifReponse());
    }

    /**
     * Tests the setCodeCollQuestion() method.
     *
     * @return void
     */
    public function testSetCodeCollQuestion() {

        $obj = new DosRevCommentaires();

        $obj->setCodeCollQuestion("codeCollQuestion");
        $this->assertEquals("codeCollQuestion", $obj->getCodeCollQuestion());
    }

    /**
     * Tests the setCodeCollReponse() method.
     *
     * @return void
     */
    public function testSetCodeCollReponse() {

        $obj = new DosRevCommentaires();

        $obj->setCodeCollReponse("codeCollReponse");
        $this->assertEquals("codeCollReponse", $obj->getCodeCollReponse());
    }

    /**
     * Tests the setCptComment() method.
     *
     * @return void
     */
    public function testSetCptComment() {

        $obj = new DosRevCommentaires();

        $obj->setCptComment(10);
        $this->assertEquals(10, $obj->getCptComment());
    }

    /**
     * Tests the setDtCreationQuestion() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtCreationQuestion() {

        // Set a Date/time mock.
        $dtCreationQuestion = new DateTime("2018-09-10");

        $obj = new DosRevCommentaires();

        $obj->setDtCreationQuestion($dtCreationQuestion);
        $this->assertSame($dtCreationQuestion, $obj->getDtCreationQuestion());
    }

    /**
     * Tests the setDtCreationReponse() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtCreationReponse() {

        // Set a Date/time mock.
        $dtCreationReponse = new DateTime("2018-09-10");

        $obj = new DosRevCommentaires();

        $obj->setDtCreationReponse($dtCreationReponse);
        $this->assertSame($dtCreationReponse, $obj->getDtCreationReponse());
    }

    /**
     * Tests the setDtModifQuestion() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtModifQuestion() {

        // Set a Date/time mock.
        $dtModifQuestion = new DateTime("2018-09-10");

        $obj = new DosRevCommentaires();

        $obj->setDtModifQuestion($dtModifQuestion);
        $this->assertSame($dtModifQuestion, $obj->getDtModifQuestion());
    }

    /**
     * Tests the setDtModifReponse() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtModifReponse() {

        // Set a Date/time mock.
        $dtModifReponse = new DateTime("2018-09-10");

        $obj = new DosRevCommentaires();

        $obj->setDtModifReponse($dtModifReponse);
        $this->assertSame($dtModifReponse, $obj->getDtModifReponse());
    }

    /**
     * Tests the setDtTransfertDa() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtTransfertDa() {

        // Set a Date/time mock.
        $dtTransfertDa = new DateTime("2018-09-10");

        $obj = new DosRevCommentaires();

        $obj->setDtTransfertDa($dtTransfertDa);
        $this->assertSame($dtTransfertDa, $obj->getDtTransfertDa());
    }

    /**
     * Tests the setEnAttenteReponse() method.
     *
     * @return void
     */
    public function testSetEnAttenteReponse() {

        $obj = new DosRevCommentaires();

        $obj->setEnAttenteReponse(true);
        $this->assertEquals(true, $obj->getEnAttenteReponse());
    }

    /**
     * Tests the setNeedAnswer() method.
     *
     * @return void
     */
    public function testSetNeedAnswer() {

        $obj = new DosRevCommentaires();

        $obj->setNeedAnswer(true);
        $this->assertEquals(true, $obj->getNeedAnswer());
    }

    /**
     * Tests the setNiveau() method.
     *
     * @return void
     */
    public function testSetNiveau() {

        $obj = new DosRevCommentaires();

        $obj->setNiveau("niveau");
        $this->assertEquals("niveau", $obj->getNiveau());
    }

    /**
     * Tests the setPeriodeRev() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeRev() {

        // Set a Date/time mock.
        $periodeRev = new DateTime("2018-09-10");

        $obj = new DosRevCommentaires();

        $obj->setPeriodeRev($periodeRev);
        $this->assertSame($periodeRev, $obj->getPeriodeRev());
    }

    /**
     * Tests the setPermanent() method.
     *
     * @return void
     */
    public function testSetPermanent() {

        $obj = new DosRevCommentaires();

        $obj->setPermanent(true);
        $this->assertEquals(true, $obj->getPermanent());
    }

    /**
     * Tests the setTxtQuestion() method.
     *
     * @return void
     */
    public function testSetTxtQuestion() {

        $obj = new DosRevCommentaires();

        $obj->setTxtQuestion("txtQuestion");
        $this->assertEquals("txtQuestion", $obj->getTxtQuestion());
    }

    /**
     * Tests the setTxtReponse() method.
     *
     * @return void
     */
    public function testSetTxtReponse() {

        $obj = new DosRevCommentaires();

        $obj->setTxtReponse("txtReponse");
        $this->assertEquals("txtReponse", $obj->getTxtReponse());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new DosRevCommentaires();

        $obj->setType(10);
        $this->assertEquals(10, $obj->getType());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new DosRevCommentaires();

        $this->assertNull($obj->getBloquant());
        $this->assertNull($obj->getCodeCollModifQuestion());
        $this->assertNull($obj->getCodeCollModifReponse());
        $this->assertNull($obj->getCodeCollQuestion());
        $this->assertNull($obj->getCodeCollReponse());
        $this->assertNull($obj->getCptComment());
        $this->assertNull($obj->getDtCreationQuestion());
        $this->assertNull($obj->getDtCreationReponse());
        $this->assertNull($obj->getDtModifQuestion());
        $this->assertNull($obj->getDtModifReponse());
        $this->assertNull($obj->getDtTransfertDa());
        $this->assertNull($obj->getEnAttenteReponse());
        $this->assertNull($obj->getNeedAnswer());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getPeriodeRev());
        $this->assertNull($obj->getPermanent());
        $this->assertNull($obj->getTxtQuestion());
        $this->assertNull($obj->getTxtReponse());
        $this->assertNull($obj->getType());
    }
}
