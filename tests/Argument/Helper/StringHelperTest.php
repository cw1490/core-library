<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Argument\Helper;

use WBW\Library\Core\Argument\Helper\StringHelper;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * String helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Argument\Helper
 */
class StringHelperTest extends AbstractTestCase {

    /**
     * Tests the domNode() method.
     *
     * @return void
     */
    public function testDomNode() {

        $arg = ["type" => "text/javascript"];
        $res = file_get_contents(__DIR__ . "/StringHelperTest.testDomNode.html.txt");
        $this->assertEquals($res, StringHelper::domNode("script", "\n    $(document).ready(function() {});\n", $arg) . "\n");
    }

    /**
     * Tests the domNode() method.
     *
     * @return void
     */
    public function testDomNodeWithShortTag() {

        $arg = ["type" => "text/javascript"];
        $res = '<script type="text/javascript"/>';
        $this->assertEquals($res, StringHelper::domNode("script", null, $arg, true));
    }

    /**
     * Tests the parseArray() method.
     *
     * @return void
     */
    public function testParseArray() {

        $arg = ["exception" => null, "id" => "id", "class" => ["class1", "class2", "class3   class4"]];
        $res = 'id="id" class="class1 class2 class3 class4"';
        $this->assertEquals($res, StringHelper::parseArray($arg));
    }

    /**
     * Tests the parseBoolean() method.
     *
     * @return void
     */
    public function testParseBoolean() {

        $this->assertEquals("false", StringHelper::parseBoolean(null));
        $this->assertEquals("false", StringHelper::parseBoolean(false));
        $this->assertEquals("true", StringHelper::parseBoolean(true));
    }

    /**
     * Tests the removeAccents() method.
     *
     * @return void
     */
    public function testRemoveAccents() {

        $this->assertEquals("a", StringHelper::removeAccents("à"));
        $this->assertEquals("a", StringHelper::removeAccents("á"));
        $this->assertEquals("a", StringHelper::removeAccents("â"));
        $this->assertEquals("a", StringHelper::removeAccents("ã"));
        $this->assertEquals("a", StringHelper::removeAccents("ä"));
        $this->assertEquals("c", StringHelper::removeAccents("ç"));
        $this->assertEquals("e", StringHelper::removeAccents("è"));
        $this->assertEquals("e", StringHelper::removeAccents("é"));
        $this->assertEquals("e", StringHelper::removeAccents("ê"));
        $this->assertEquals("e", StringHelper::removeAccents("ë"));
        $this->assertEquals("i", StringHelper::removeAccents("ì"));
        $this->assertEquals("i", StringHelper::removeAccents("í"));
        $this->assertEquals("i", StringHelper::removeAccents("î"));
        $this->assertEquals("i", StringHelper::removeAccents("ï"));
        $this->assertEquals("n", StringHelper::removeAccents("ñ"));
        $this->assertEquals("o", StringHelper::removeAccents("ò"));
        $this->assertEquals("o", StringHelper::removeAccents("ó"));
        $this->assertEquals("o", StringHelper::removeAccents("ô"));
        $this->assertEquals("o", StringHelper::removeAccents("õ"));
        $this->assertEquals("o", StringHelper::removeAccents("ö"));
        $this->assertEquals("u", StringHelper::removeAccents("ù"));
        $this->assertEquals("u", StringHelper::removeAccents("ú"));
        $this->assertEquals("u", StringHelper::removeAccents("û"));
        $this->assertEquals("u", StringHelper::removeAccents("ü"));
        $this->assertEquals("y", StringHelper::removeAccents("ý"));
        $this->assertEquals("y", StringHelper::removeAccents("ÿ"));
        $this->assertEquals("A", StringHelper::removeAccents("À"));
        $this->assertEquals("A", StringHelper::removeAccents("Á"));
        $this->assertEquals("A", StringHelper::removeAccents("Â"));
        $this->assertEquals("A", StringHelper::removeAccents("Ã"));
        $this->assertEquals("A", StringHelper::removeAccents("Ä"));
        $this->assertEquals("C", StringHelper::removeAccents("Ç"));
        $this->assertEquals("E", StringHelper::removeAccents("È"));
        $this->assertEquals("E", StringHelper::removeAccents("É"));
        $this->assertEquals("E", StringHelper::removeAccents("Ê"));
        $this->assertEquals("E", StringHelper::removeAccents("Ë"));
        $this->assertEquals("I", StringHelper::removeAccents("Ì"));
        $this->assertEquals("I", StringHelper::removeAccents("Í"));
        $this->assertEquals("I", StringHelper::removeAccents("Î"));
        $this->assertEquals("I", StringHelper::removeAccents("Ï"));
        $this->assertEquals("N", StringHelper::removeAccents("Ñ"));
        $this->assertEquals("O", StringHelper::removeAccents("Ò"));
        $this->assertEquals("O", StringHelper::removeAccents("Ó"));
        $this->assertEquals("O", StringHelper::removeAccents("Ô"));
        $this->assertEquals("O", StringHelper::removeAccents("Õ"));
        $this->assertEquals("O", StringHelper::removeAccents("Ö"));
        $this->assertEquals("U", StringHelper::removeAccents("Ù"));
        $this->assertEquals("U", StringHelper::removeAccents("Ú"));
        $this->assertEquals("U", StringHelper::removeAccents("Û"));
        $this->assertEquals("U", StringHelper::removeAccents("Ü"));
        $this->assertEquals("Y", StringHelper::removeAccents("Ý"));
    }
}
