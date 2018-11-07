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

use WBW\Library\Core\Quadratus\Model\QGI\CriteresListe;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Criteres liste model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class CriteresListeTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new CriteresListe();

		$this->assertNull($obj->getCode());
		$this->assertNull($obj->getLibelle());
		$this->assertNull($obj->getNumLibelle());
	}

	/**
	 * Tests the setCode() method.
	 *
	 * @return void
	 */
	public function testSetCode() {

		$obj = new CriteresListe();

		$obj->setCode("code");
		$this->assertEquals("code", $obj->getCode());
	}

	/**
	 * Tests the setLibelle() method.
	 *
	 * @return void
	 */
	public function testSetLibelle() {

		$obj = new CriteresListe();

		$obj->setLibelle("libelle");
		$this->assertEquals("libelle", $obj->getLibelle());
	}

	/**
	 * Tests the setNumLibelle() method.
	 *
	 * @return void
	 */
	public function testSetNumLibelle() {

		$obj = new CriteresListe();

		$obj->setNumLibelle("numLibelle");
		$this->assertEquals("numLibelle", $obj->getNumLibelle());
	}

}
