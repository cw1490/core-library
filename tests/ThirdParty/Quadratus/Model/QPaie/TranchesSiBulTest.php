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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\TranchesSiBul;

/**
 * Tranches si bul test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class TranchesSiBulTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TranchesSiBul();

        $this->assertNull($obj->getBrutAlSansSi());
        $this->assertNull($obj->getCumBrutAlSansSi());
        $this->assertNull($obj->getCumTotSi());
        $this->assertNull($obj->getCumTranche2Si());
        $this->assertNull($obj->getCumTranche2SansSi());
        $this->assertNull($obj->getCumTrancheAsi());
        $this->assertNull($obj->getCumTrancheASansSi());
        $this->assertNull($obj->getCumTrancheBsi());
        $this->assertNull($obj->getCumTrancheBSansSi());
        $this->assertNull($obj->getCumTrancheCsi());
        $this->assertNull($obj->getCumTrancheCSansSi());
        $this->assertNull($obj->getCumTrancheD1SansSi());
        $this->assertNull($obj->getCumTrancheDSansSi());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTotSi());
        $this->assertNull($obj->getTranche2Si());
        $this->assertNull($obj->getTranche2SansSi());
        $this->assertNull($obj->getTrancheAsi());
        $this->assertNull($obj->getTrancheASansSi());
        $this->assertNull($obj->getTrancheBsi());
        $this->assertNull($obj->getTrancheBSansSi());
        $this->assertNull($obj->getTrancheCsi());
        $this->assertNull($obj->getTrancheCSansSi());
        $this->assertNull($obj->getTrancheD1SansSi());
        $this->assertNull($obj->getTrancheDSansSi());
    }

    /**
     * Tests the setBrutAlSansSi() method.
     *
     * @return void
     */
    public function testSetBrutAlSansSi() {

        $obj = new TranchesSiBul();

        $obj->setBrutAlSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutAlSansSi());
    }

    /**
     * Tests the setCumBrutAlSansSi() method.
     *
     * @return void
     */
    public function testSetCumBrutAlSansSi() {

        $obj = new TranchesSiBul();

        $obj->setCumBrutAlSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutAlSansSi());
    }

    /**
     * Tests the setCumTotSi() method.
     *
     * @return void
     */
    public function testSetCumTotSi() {

        $obj = new TranchesSiBul();

        $obj->setCumTotSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTotSi());
    }

    /**
     * Tests the setCumTranche2SansSi() method.
     *
     * @return void
     */
    public function testSetCumTranche2SansSi() {

        $obj = new TranchesSiBul();

        $obj->setCumTranche2SansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTranche2SansSi());
    }

    /**
     * Tests the setCumTranche2Si() method.
     *
     * @return void
     */
    public function testSetCumTranche2Si() {

        $obj = new TranchesSiBul();

        $obj->setCumTranche2Si(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTranche2Si());
    }

    /**
     * Tests the setCumTrancheASansSi() method.
     *
     * @return void
     */
    public function testSetCumTrancheASansSi() {

        $obj = new TranchesSiBul();

        $obj->setCumTrancheASansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheASansSi());
    }

    /**
     * Tests the setCumTrancheAsi() method.
     *
     * @return void
     */
    public function testSetCumTrancheAsi() {

        $obj = new TranchesSiBul();

        $obj->setCumTrancheAsi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheAsi());
    }

    /**
     * Tests the setCumTrancheBSansSi() method.
     *
     * @return void
     */
    public function testSetCumTrancheBSansSi() {

        $obj = new TranchesSiBul();

        $obj->setCumTrancheBSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheBSansSi());
    }

    /**
     * Tests the setCumTrancheBsi() method.
     *
     * @return void
     */
    public function testSetCumTrancheBsi() {

        $obj = new TranchesSiBul();

        $obj->setCumTrancheBsi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheBsi());
    }

    /**
     * Tests the setCumTrancheCSansSi() method.
     *
     * @return void
     */
    public function testSetCumTrancheCSansSi() {

        $obj = new TranchesSiBul();

        $obj->setCumTrancheCSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheCSansSi());
    }

    /**
     * Tests the setCumTrancheCsi() method.
     *
     * @return void
     */
    public function testSetCumTrancheCsi() {

        $obj = new TranchesSiBul();

        $obj->setCumTrancheCsi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheCsi());
    }

    /**
     * Tests the setCumTrancheD1SansSi() method.
     *
     * @return void
     */
    public function testSetCumTrancheD1SansSi() {

        $obj = new TranchesSiBul();

        $obj->setCumTrancheD1SansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheD1SansSi());
    }

    /**
     * Tests the setCumTrancheDSansSi() method.
     *
     * @return void
     */
    public function testSetCumTrancheDSansSi() {

        $obj = new TranchesSiBul();

        $obj->setCumTrancheDSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheDSansSi());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode() {

        $obj = new TranchesSiBul();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new TranchesSiBul();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
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

        $obj = new TranchesSiBul();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setTotSi() method.
     *
     * @return void
     */
    public function testSetTotSi() {

        $obj = new TranchesSiBul();

        $obj->setTotSi(10.092018);
        $this->assertEquals(10.092018, $obj->getTotSi());
    }

    /**
     * Tests the setTranche2SansSi() method.
     *
     * @return void
     */
    public function testSetTranche2SansSi() {

        $obj = new TranchesSiBul();

        $obj->setTranche2SansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getTranche2SansSi());
    }

    /**
     * Tests the setTranche2Si() method.
     *
     * @return void
     */
    public function testSetTranche2Si() {

        $obj = new TranchesSiBul();

        $obj->setTranche2Si(10.092018);
        $this->assertEquals(10.092018, $obj->getTranche2Si());
    }

    /**
     * Tests the setTrancheASansSi() method.
     *
     * @return void
     */
    public function testSetTrancheASansSi() {

        $obj = new TranchesSiBul();

        $obj->setTrancheASansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheASansSi());
    }

    /**
     * Tests the setTrancheAsi() method.
     *
     * @return void
     */
    public function testSetTrancheAsi() {

        $obj = new TranchesSiBul();

        $obj->setTrancheAsi(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheAsi());
    }

    /**
     * Tests the setTrancheBSansSi() method.
     *
     * @return void
     */
    public function testSetTrancheBSansSi() {

        $obj = new TranchesSiBul();

        $obj->setTrancheBSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheBSansSi());
    }

    /**
     * Tests the setTrancheBsi() method.
     *
     * @return void
     */
    public function testSetTrancheBsi() {

        $obj = new TranchesSiBul();

        $obj->setTrancheBsi(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheBsi());
    }

    /**
     * Tests the setTrancheCSansSi() method.
     *
     * @return void
     */
    public function testSetTrancheCSansSi() {

        $obj = new TranchesSiBul();

        $obj->setTrancheCSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheCSansSi());
    }

    /**
     * Tests the setTrancheCsi() method.
     *
     * @return void
     */
    public function testSetTrancheCsi() {

        $obj = new TranchesSiBul();

        $obj->setTrancheCsi(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheCsi());
    }

    /**
     * Tests the setTrancheD1SansSi() method.
     *
     * @return void
     */
    public function testSetTrancheD1SansSi() {

        $obj = new TranchesSiBul();

        $obj->setTrancheD1SansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheD1SansSi());
    }

    /**
     * Tests the setTrancheDSansSi() method.
     *
     * @return void
     */
    public function testSetTrancheDSansSi() {

        $obj = new TranchesSiBul();

        $obj->setTrancheDSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheDSansSi());
    }
}
