<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QPaie\Enfants;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Enfants model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 * @final
 */
final class EnfantsTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new Enfants();

		$this->assertNull($obj->getACharge());
		$this->assertNull($obj->getDateNaissance());
		$this->assertNull($obj->getNom());
		$this->assertNull($obj->getNumLigne());
		$this->assertNull($obj->getNumeroEmploye());
		$this->assertNull($obj->getPrenom());
		$this->assertNull($obj->getSexe());
	}

	/**
	 * Tests the setACharge() method.
	 *
	 * @return void
	 */
	public function testSetACharge() {

		$obj = new Enfants();

		$obj->setACharge(true);
		$this->assertEquals(true, $obj->getACharge());
	}

	/**
	 * Tests the setDateNaissance() method.
	 *
	 * @return void
	 */
	public function testSetDateNaissance() {

		$obj = new Enfants();

		$obj->setDateNaissance(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateNaissance());
	}

	/**
	 * Tests the setNom() method.
	 *
	 * @return void
	 */
	public function testSetNom() {

		$obj = new Enfants();

		$obj->setNom("nom");
		$this->assertEquals("nom", $obj->getNom());
	}

	/**
	 * Tests the setNumLigne() method.
	 *
	 * @return void
	 */
	public function testSetNumLigne() {

		$obj = new Enfants();

		$obj->setNumLigne(10);
		$this->assertEquals(10, $obj->getNumLigne());
	}

	/**
	 * Tests the setNumeroEmploye() method.
	 *
	 * @return void
	 */
	public function testSetNumeroEmploye() {

		$obj = new Enfants();

		$obj->setNumeroEmploye("numeroEmploye");
		$this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
	}

	/**
	 * Tests the setPrenom() method.
	 *
	 * @return void
	 */
	public function testSetPrenom() {

		$obj = new Enfants();

		$obj->setPrenom("prenom");
		$this->assertEquals("prenom", $obj->getPrenom());
	}

	/**
	 * Tests the setSexe() method.
	 *
	 * @return void
	 */
	public function testSetSexe() {

		$obj = new Enfants();

		$obj->setSexe("sexe");
		$this->assertEquals("sexe", $obj->getSexe());
	}

}