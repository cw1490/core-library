<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Validation\RuleSet;

use WBW\Library\Core\Tests\Fixtures\Validation\Rule\TestValidationRule;
use WBW\Library\Core\Tests\Validation\AbstractValidationTest;
use WBW\Library\Core\Validation\API\ValidationStatusInterface;
use WBW\Library\Core\Validation\RuleSet\GenericValidationRuleSet;

/**
 * Generic validation rule set test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Validation\RuleSet
 * @final
 */
final class GenericValidationRuleSetTest extends AbstractValidationTest {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new GenericValidationRuleSet();

        $this->assertEquals([], $obj->getRules());
    }

    /**
     * Tests the addRule() method.
     *
     * @return void
     */
    public function testAddRule() {

        $obj = new GenericValidationRuleSet();

        $arg = new TestValidationRule();

        $this->assertCount(0, $obj->getRules());

        $obj->addRule($arg);
        $this->assertCount(1, $obj->getRules());
        $this->assertSame($arg, $obj->getRules()[0]);
    }

    /**
     * Tests the isValid() method.
     *
     * @return void
     */
    public function testIsValid() {

        $obj = new GenericValidationRuleSet();
        $obj->addRule(new TestValidationRule());

        $res = $obj->isValid(new TestValidationRule());
        $this->assertCount(1, $res);
        $this->assertInstanceOf(ValidationStatusInterface::class, $res[0]);
        $this->assertEquals(500, $res[0]->getCode());
        $this->assertEquals("The argument is not an int", $res[0]->getMessage());
    }

    /**
     * Tests the removeRule() method.
     *
     * @return void
     */
    public function testRemoveRule() {

        $obj = new GenericValidationRuleSet();

        $arg = new TestValidationRule();

        $obj->addRule($arg);
        $this->assertCount(1, $obj->getRules());
        $this->assertSame($arg, $obj->getRules()[0]);

        $obj->removeRule(new TestValidationRule());
        $this->assertCount(1, $obj->getRules());
        $this->assertSame($arg, $obj->getRules()[0]);

        $obj->removeRule($arg);
        $this->assertCount(0, $obj->getRules());
    }

}
