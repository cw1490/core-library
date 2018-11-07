<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use WBW\Library\Core\Quadratus\Model\QGI\Activites;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Activites model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class ActivitesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new Activites();

		$this->assertNull($obj->getCode());
		$this->assertNull($obj->getLibelle());
	}

	/**
	 * Tests the setCode() method.
	 *
	 * @return void
	 */
	public function testSetCode() {

		$obj = new Activites();

		$obj->setCode("code");
		$this->assertEquals("code", $obj->getCode());
	}

	/**
	 * Tests the setLibelle() method.
	 *
	 * @return void
	 */
	public function testSetLibelle() {

		$obj = new Activites();

		$obj->setLibelle("libelle");
		$this->assertEquals("libelle", $obj->getLibelle());
	}

}