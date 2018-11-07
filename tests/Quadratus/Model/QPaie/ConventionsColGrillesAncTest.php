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

use WBW\Library\Core\Quadratus\Model\QPaie\ConventionsColGrillesAnc;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Conventions col grilles anc model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 * @final
 */
final class ConventionsColGrillesAncTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new ConventionsColGrillesAnc();

		$this->assertNull($obj->getCodeConvention());
		$this->assertNull($obj->getCodeGrille());
		$this->assertNull($obj->getIntitule());
		$this->assertNull($obj->getTypeGrille());
	}

	/**
	 * Tests the setCodeConvention() method.
	 *
	 * @return void
	 */
	public function testSetCodeConvention() {

		$obj = new ConventionsColGrillesAnc();

		$obj->setCodeConvention("codeConvention");
		$this->assertEquals("codeConvention", $obj->getCodeConvention());
	}

	/**
	 * Tests the setCodeGrille() method.
	 *
	 * @return void
	 */
	public function testSetCodeGrille() {

		$obj = new ConventionsColGrillesAnc();

		$obj->setCodeGrille("codeGrille");
		$this->assertEquals("codeGrille", $obj->getCodeGrille());
	}

	/**
	 * Tests the setIntitule() method.
	 *
	 * @return void
	 */
	public function testSetIntitule() {

		$obj = new ConventionsColGrillesAnc();

		$obj->setIntitule("intitule");
		$this->assertEquals("intitule", $obj->getIntitule());
	}

	/**
	 * Tests the setTypeGrille() method.
	 *
	 * @return void
	 */
	public function testSetTypeGrille() {

		$obj = new ConventionsColGrillesAnc();

		$obj->setTypeGrille(10);
		$this->assertEquals(10, $obj->getTypeGrille());
	}

}