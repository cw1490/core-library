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

use WBW\Library\Core\Quadratus\Model\QPaie\CaissesRetraiteMetier;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Caisses retraite metier model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class CaissesRetraiteMetierTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new CaissesRetraiteMetier();

		$this->assertNull($obj->getCategSalarie());
		$this->assertNull($obj->getCategSalarieEquiv());
		$this->assertNull($obj->getCodeActivite());
		$this->assertNull($obj->getCodeMetier());
		$this->assertNull($obj->getCodeOrganismeAgirc());
		$this->assertNull($obj->getCodeOrganismeArrco());
		$this->assertNull($obj->getCodeOrganismeCCCA());
		$this->assertNull($obj->getCodeOrganismeFraisSante());
		$this->assertNull($obj->getCodeOrganismePrev());
		$this->assertNull($obj->getCodeOrganismePrevComp());
		$this->assertNull($obj->getIdInstitutionAgirc());
		$this->assertNull($obj->getIdInstitutionArrco());
		$this->assertNull($obj->getIdInstitutionCCCA());
		$this->assertNull($obj->getIdInstitutionFraisSante());
		$this->assertNull($obj->getIdInstitutionPrev());
		$this->assertNull($obj->getIdInstitutionPrevComp());
		$this->assertNull($obj->getIndiceCateg());
		$this->assertNull($obj->getIntitule());
		$this->assertNull($obj->getPasActive());
	}

	/**
	 * Tests the setCategSalarie() method.
	 *
	 * @return void
	 */
	public function testSetCategSalarie() {

		$obj = new CaissesRetraiteMetier();

		$obj->setCategSalarie(10);
		$this->assertEquals(10, $obj->getCategSalarie());
	}

	/**
	 * Tests the setCategSalarieEquiv() method.
	 *
	 * @return void
	 */
	public function testSetCategSalarieEquiv() {

		$obj = new CaissesRetraiteMetier();

		$obj->setCategSalarieEquiv("categSalarieEquiv");
		$this->assertEquals("categSalarieEquiv", $obj->getCategSalarieEquiv());
	}

	/**
	 * Tests the setCodeActivite() method.
	 *
	 * @return void
	 */
	public function testSetCodeActivite() {

		$obj = new CaissesRetraiteMetier();

		$obj->setCodeActivite("codeActivite");
		$this->assertEquals("codeActivite", $obj->getCodeActivite());
	}

	/**
	 * Tests the setCodeMetier() method.
	 *
	 * @return void
	 */
	public function testSetCodeMetier() {

		$obj = new CaissesRetraiteMetier();

		$obj->setCodeMetier("codeMetier");
		$this->assertEquals("codeMetier", $obj->getCodeMetier());
	}

	/**
	 * Tests the setCodeOrganismeAgirc() method.
	 *
	 * @return void
	 */
	public function testSetCodeOrganismeAgirc() {

		$obj = new CaissesRetraiteMetier();

		$obj->setCodeOrganismeAgirc("codeOrganismeAgirc");
		$this->assertEquals("codeOrganismeAgirc", $obj->getCodeOrganismeAgirc());
	}

	/**
	 * Tests the setCodeOrganismeArrco() method.
	 *
	 * @return void
	 */
	public function testSetCodeOrganismeArrco() {

		$obj = new CaissesRetraiteMetier();

		$obj->setCodeOrganismeArrco("codeOrganismeArrco");
		$this->assertEquals("codeOrganismeArrco", $obj->getCodeOrganismeArrco());
	}

	/**
	 * Tests the setCodeOrganismeCCCA() method.
	 *
	 * @return void
	 */
	public function testSetCodeOrganismeCCCA() {

		$obj = new CaissesRetraiteMetier();

		$obj->setCodeOrganismeCCCA("codeOrganismeCCCA");
		$this->assertEquals("codeOrganismeCCCA", $obj->getCodeOrganismeCCCA());
	}

	/**
	 * Tests the setCodeOrganismeFraisSante() method.
	 *
	 * @return void
	 */
	public function testSetCodeOrganismeFraisSante() {

		$obj = new CaissesRetraiteMetier();

		$obj->setCodeOrganismeFraisSante("codeOrganismeFraisSante");
		$this->assertEquals("codeOrganismeFraisSante", $obj->getCodeOrganismeFraisSante());
	}

	/**
	 * Tests the setCodeOrganismePrev() method.
	 *
	 * @return void
	 */
	public function testSetCodeOrganismePrev() {

		$obj = new CaissesRetraiteMetier();

		$obj->setCodeOrganismePrev("codeOrganismePrev");
		$this->assertEquals("codeOrganismePrev", $obj->getCodeOrganismePrev());
	}

	/**
	 * Tests the setCodeOrganismePrevComp() method.
	 *
	 * @return void
	 */
	public function testSetCodeOrganismePrevComp() {

		$obj = new CaissesRetraiteMetier();

		$obj->setCodeOrganismePrevComp("codeOrganismePrevComp");
		$this->assertEquals("codeOrganismePrevComp", $obj->getCodeOrganismePrevComp());
	}

	/**
	 * Tests the setIdInstitutionAgirc() method.
	 *
	 * @return void
	 */
	public function testSetIdInstitutionAgirc() {

		$obj = new CaissesRetraiteMetier();

		$obj->setIdInstitutionAgirc("idInstitutionAgirc");
		$this->assertEquals("idInstitutionAgirc", $obj->getIdInstitutionAgirc());
	}

	/**
	 * Tests the setIdInstitutionArrco() method.
	 *
	 * @return void
	 */
	public function testSetIdInstitutionArrco() {

		$obj = new CaissesRetraiteMetier();

		$obj->setIdInstitutionArrco("idInstitutionArrco");
		$this->assertEquals("idInstitutionArrco", $obj->getIdInstitutionArrco());
	}

	/**
	 * Tests the setIdInstitutionCCCA() method.
	 *
	 * @return void
	 */
	public function testSetIdInstitutionCCCA() {

		$obj = new CaissesRetraiteMetier();

		$obj->setIdInstitutionCCCA("idInstitutionCCCA");
		$this->assertEquals("idInstitutionCCCA", $obj->getIdInstitutionCCCA());
	}

	/**
	 * Tests the setIdInstitutionFraisSante() method.
	 *
	 * @return void
	 */
	public function testSetIdInstitutionFraisSante() {

		$obj = new CaissesRetraiteMetier();

		$obj->setIdInstitutionFraisSante("idInstitutionFraisSante");
		$this->assertEquals("idInstitutionFraisSante", $obj->getIdInstitutionFraisSante());
	}

	/**
	 * Tests the setIdInstitutionPrev() method.
	 *
	 * @return void
	 */
	public function testSetIdInstitutionPrev() {

		$obj = new CaissesRetraiteMetier();

		$obj->setIdInstitutionPrev("idInstitutionPrev");
		$this->assertEquals("idInstitutionPrev", $obj->getIdInstitutionPrev());
	}

	/**
	 * Tests the setIdInstitutionPrevComp() method.
	 *
	 * @return void
	 */
	public function testSetIdInstitutionPrevComp() {

		$obj = new CaissesRetraiteMetier();

		$obj->setIdInstitutionPrevComp("idInstitutionPrevComp");
		$this->assertEquals("idInstitutionPrevComp", $obj->getIdInstitutionPrevComp());
	}

	/**
	 * Tests the setIndiceCateg() method.
	 *
	 * @return void
	 */
	public function testSetIndiceCateg() {

		$obj = new CaissesRetraiteMetier();

		$obj->setIndiceCateg(10);
		$this->assertEquals(10, $obj->getIndiceCateg());
	}

	/**
	 * Tests the setIntitule() method.
	 *
	 * @return void
	 */
	public function testSetIntitule() {

		$obj = new CaissesRetraiteMetier();

		$obj->setIntitule("intitule");
		$this->assertEquals("intitule", $obj->getIntitule());
	}

	/**
	 * Tests the setPasActive() method.
	 *
	 * @return void
	 */
	public function testSetPasActive() {

		$obj = new CaissesRetraiteMetier();

		$obj->setPasActive(true);
		$this->assertEquals(true, $obj->getPasActive());
	}

}
