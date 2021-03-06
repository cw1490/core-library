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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AnnexeTer;

/**
 * Annexe ter test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AnnexeTerTest extends AbstractTestCase {

    /**
     * Tests the setBoolean1() method.
     *
     * @return void
     */
    public function testSetBoolean1() {

        $obj = new AnnexeTer();

        $obj->setBoolean1(true);
        $this->assertEquals(true, $obj->getBoolean1());
    }

    /**
     * Tests the setBoolean2() method.
     *
     * @return void
     */
    public function testSetBoolean2() {

        $obj = new AnnexeTer();

        $obj->setBoolean2(true);
        $this->assertEquals(true, $obj->getBoolean2());
    }

    /**
     * Tests the setBoolean3() method.
     *
     * @return void
     */
    public function testSetBoolean3() {

        $obj = new AnnexeTer();

        $obj->setBoolean3(true);
        $this->assertEquals(true, $obj->getBoolean3());
    }

    /**
     * Tests the setBoolean4() method.
     *
     * @return void
     */
    public function testSetBoolean4() {

        $obj = new AnnexeTer();

        $obj->setBoolean4(true);
        $this->assertEquals(true, $obj->getBoolean4());
    }

    /**
     * Tests the setBoolean5() method.
     *
     * @return void
     */
    public function testSetBoolean5() {

        $obj = new AnnexeTer();

        $obj->setBoolean5(true);
        $this->assertEquals(true, $obj->getBoolean5());
    }

    /**
     * Tests the setBoolean6() method.
     *
     * @return void
     */
    public function testSetBoolean6() {

        $obj = new AnnexeTer();

        $obj->setBoolean6(true);
        $this->assertEquals(true, $obj->getBoolean6());
    }

    /**
     * Tests the setBoolean7() method.
     *
     * @return void
     */
    public function testSetBoolean7() {

        $obj = new AnnexeTer();

        $obj->setBoolean7(true);
        $this->assertEquals(true, $obj->getBoolean7());
    }

    /**
     * Tests the setCode1() method.
     *
     * @return void
     */
    public function testSetCode1() {

        $obj = new AnnexeTer();

        $obj->setCode1("code1");
        $this->assertEquals("code1", $obj->getCode1());
    }

    /**
     * Tests the setCode2() method.
     *
     * @return void
     */
    public function testSetCode2() {

        $obj = new AnnexeTer();

        $obj->setCode2("code2");
        $this->assertEquals("code2", $obj->getCode2());
    }

    /**
     * Tests the setDate1() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate1() {

        // Set a Date/time mock.
        $date1 = new DateTime("2018-09-10");

        $obj = new AnnexeTer();

        $obj->setDate1($date1);
        $this->assertSame($date1, $obj->getDate1());
    }

    /**
     * Tests the setDate2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate2() {

        // Set a Date/time mock.
        $date2 = new DateTime("2018-09-10");

        $obj = new AnnexeTer();

        $obj->setDate2($date2);
        $this->assertSame($date2, $obj->getDate2());
    }

    /**
     * Tests the setDate3() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate3() {

        // Set a Date/time mock.
        $date3 = new DateTime("2018-09-10");

        $obj = new AnnexeTer();

        $obj->setDate3($date3);
        $this->assertSame($date3, $obj->getDate3());
    }

    /**
     * Tests the setDate4() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate4() {

        // Set a Date/time mock.
        $date4 = new DateTime("2018-09-10");

        $obj = new AnnexeTer();

        $obj->setDate4($date4);
        $this->assertSame($date4, $obj->getDate4());
    }

    /**
     * Tests the setDate5() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate5() {

        // Set a Date/time mock.
        $date5 = new DateTime("2018-09-10");

        $obj = new AnnexeTer();

        $obj->setDate5($date5);
        $this->assertSame($date5, $obj->getDate5());
    }

    /**
     * Tests the setDate6() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate6() {

        // Set a Date/time mock.
        $date6 = new DateTime("2018-09-10");

        $obj = new AnnexeTer();

        $obj->setDate6($date6);
        $this->assertSame($date6, $obj->getDate6());
    }

    /**
     * Tests the setDate7() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate7() {

        // Set a Date/time mock.
        $date7 = new DateTime("2018-09-10");

        $obj = new AnnexeTer();

        $obj->setDate7($date7);
        $this->assertSame($date7, $obj->getDate7());
    }

    /**
     * Tests the setDouble1() method.
     *
     * @return void
     */
    public function testSetDouble1() {

        $obj = new AnnexeTer();

        $obj->setDouble1(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble1());
    }

    /**
     * Tests the setDouble2() method.
     *
     * @return void
     */
    public function testSetDouble2() {

        $obj = new AnnexeTer();

        $obj->setDouble2(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble2());
    }

    /**
     * Tests the setDouble3() method.
     *
     * @return void
     */
    public function testSetDouble3() {

        $obj = new AnnexeTer();

        $obj->setDouble3(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble3());
    }

    /**
     * Tests the setDouble4() method.
     *
     * @return void
     */
    public function testSetDouble4() {

        $obj = new AnnexeTer();

        $obj->setDouble4(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble4());
    }

    /**
     * Tests the setDouble5() method.
     *
     * @return void
     */
    public function testSetDouble5() {

        $obj = new AnnexeTer();

        $obj->setDouble5(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble5());
    }

    /**
     * Tests the setDouble6() method.
     *
     * @return void
     */
    public function testSetDouble6() {

        $obj = new AnnexeTer();

        $obj->setDouble6(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble6());
    }

    /**
     * Tests the setDouble7() method.
     *
     * @return void
     */
    public function testSetDouble7() {

        $obj = new AnnexeTer();

        $obj->setDouble7(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble7());
    }

    /**
     * Tests the setLong1() method.
     *
     * @return void
     */
    public function testSetLong1() {

        $obj = new AnnexeTer();

        $obj->setLong1(10);
        $this->assertEquals(10, $obj->getLong1());
    }

    /**
     * Tests the setLong2() method.
     *
     * @return void
     */
    public function testSetLong2() {

        $obj = new AnnexeTer();

        $obj->setLong2(10);
        $this->assertEquals(10, $obj->getLong2());
    }

    /**
     * Tests the setLong3() method.
     *
     * @return void
     */
    public function testSetLong3() {

        $obj = new AnnexeTer();

        $obj->setLong3(10);
        $this->assertEquals(10, $obj->getLong3());
    }

    /**
     * Tests the setLong4() method.
     *
     * @return void
     */
    public function testSetLong4() {

        $obj = new AnnexeTer();

        $obj->setLong4(10);
        $this->assertEquals(10, $obj->getLong4());
    }

    /**
     * Tests the setLong5() method.
     *
     * @return void
     */
    public function testSetLong5() {

        $obj = new AnnexeTer();

        $obj->setLong5(10);
        $this->assertEquals(10, $obj->getLong5());
    }

    /**
     * Tests the setLong6() method.
     *
     * @return void
     */
    public function testSetLong6() {

        $obj = new AnnexeTer();

        $obj->setLong6(10);
        $this->assertEquals(10, $obj->getLong6());
    }

    /**
     * Tests the setLong7() method.
     *
     * @return void
     */
    public function testSetLong7() {

        $obj = new AnnexeTer();

        $obj->setLong7(10);
        $this->assertEquals(10, $obj->getLong7());
    }

    /**
     * Tests the setMemo1() method.
     *
     * @return void
     */
    public function testSetMemo1() {

        $obj = new AnnexeTer();

        $obj->setMemo1("memo1");
        $this->assertEquals("memo1", $obj->getMemo1());
    }

    /**
     * Tests the setMemo2() method.
     *
     * @return void
     */
    public function testSetMemo2() {

        $obj = new AnnexeTer();

        $obj->setMemo2("memo2");
        $this->assertEquals("memo2", $obj->getMemo2());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new AnnexeTer();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Tests the setText1() method.
     *
     * @return void
     */
    public function testSetText1() {

        $obj = new AnnexeTer();

        $obj->setText1("text1");
        $this->assertEquals("text1", $obj->getText1());
    }

    /**
     * Tests the setText2() method.
     *
     * @return void
     */
    public function testSetText2() {

        $obj = new AnnexeTer();

        $obj->setText2("text2");
        $this->assertEquals("text2", $obj->getText2());
    }

    /**
     * Tests the setText3() method.
     *
     * @return void
     */
    public function testSetText3() {

        $obj = new AnnexeTer();

        $obj->setText3("text3");
        $this->assertEquals("text3", $obj->getText3());
    }

    /**
     * Tests the setText4() method.
     *
     * @return void
     */
    public function testSetText4() {

        $obj = new AnnexeTer();

        $obj->setText4("text4");
        $this->assertEquals("text4", $obj->getText4());
    }

    /**
     * Tests the setText5() method.
     *
     * @return void
     */
    public function testSetText5() {

        $obj = new AnnexeTer();

        $obj->setText5("text5");
        $this->assertEquals("text5", $obj->getText5());
    }

    /**
     * Tests the setText6() method.
     *
     * @return void
     */
    public function testSetText6() {

        $obj = new AnnexeTer();

        $obj->setText6("text6");
        $this->assertEquals("text6", $obj->getText6());
    }

    /**
     * Tests the setText7() method.
     *
     * @return void
     */
    public function testSetText7() {

        $obj = new AnnexeTer();

        $obj->setText7("text7");
        $this->assertEquals("text7", $obj->getText7());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new AnnexeTer();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new AnnexeTer();

        $this->assertNull($obj->getBoolean1());
        $this->assertNull($obj->getBoolean2());
        $this->assertNull($obj->getBoolean3());
        $this->assertNull($obj->getBoolean4());
        $this->assertNull($obj->getBoolean5());
        $this->assertNull($obj->getBoolean6());
        $this->assertNull($obj->getBoolean7());
        $this->assertNull($obj->getCode1());
        $this->assertNull($obj->getCode2());
        $this->assertNull($obj->getDate1());
        $this->assertNull($obj->getDate2());
        $this->assertNull($obj->getDate3());
        $this->assertNull($obj->getDate4());
        $this->assertNull($obj->getDate5());
        $this->assertNull($obj->getDate6());
        $this->assertNull($obj->getDate7());
        $this->assertNull($obj->getDouble1());
        $this->assertNull($obj->getDouble2());
        $this->assertNull($obj->getDouble3());
        $this->assertNull($obj->getDouble4());
        $this->assertNull($obj->getDouble5());
        $this->assertNull($obj->getDouble6());
        $this->assertNull($obj->getDouble7());
        $this->assertNull($obj->getLong1());
        $this->assertNull($obj->getLong2());
        $this->assertNull($obj->getLong3());
        $this->assertNull($obj->getLong4());
        $this->assertNull($obj->getLong5());
        $this->assertNull($obj->getLong6());
        $this->assertNull($obj->getLong7());
        $this->assertNull($obj->getMemo1());
        $this->assertNull($obj->getMemo2());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getText1());
        $this->assertNull($obj->getText2());
        $this->assertNull($obj->getText3());
        $this->assertNull($obj->getText4());
        $this->assertNull($obj->getText5());
        $this->assertNull($obj->getText6());
        $this->assertNull($obj->getText7());
        $this->assertNull($obj->getType());
    }
}
