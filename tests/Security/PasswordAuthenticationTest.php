<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Security;

use WBW\Library\Core\Security\PasswordAuthentication;
use WBW\Library\Core\Tests\Cases\AbstractCoreFrameworkTestCase;

/**
 * Password authentication test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Security
 * @final
 */
final class PasswordAuthenticationTest extends AbstractCoreFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new PasswordAuthentication(null, null);

        $this->assertNull($obj->getUsername());
    }

    /**
     * Tests the setPassword() method.
     *
     * @return void
     */
    public function testSetPassword() {

        $obj = new PasswordAuthentication(null, null);

        $this->assertNull($obj->getPassword());

        $obj->setPassword("password");

        $this->assertEquals("password", $obj->getPassword());
    }

    /**
     * Tests the setUsername() method.
     *
     * @return void
     */
    public function testSetUsername() {

        $obj = new PasswordAuthentication(null, null);

        $this->assertNull($obj->getUsername());

        $obj->setUsername("username");

        $this->assertEquals("username", $obj->getUsername());
    }

}