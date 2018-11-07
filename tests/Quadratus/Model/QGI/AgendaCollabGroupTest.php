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

use WBW\Library\Core\Quadratus\Model\QGI\AgendaCollabGroup;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Agenda collab group model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class AgendaCollabGroupTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new AgendaCollabGroup();

		$this->assertNull($obj->getCodeCollaborateur());
		$this->assertNull($obj->getCodeGroupe());
		$this->assertNull($obj->getNumLig());
	}

	/**
	 * Tests the setCodeCollaborateur() method.
	 *
	 * @return void
	 */
	public function testSetCodeCollaborateur() {

		$obj = new AgendaCollabGroup();

		$obj->setCodeCollaborateur("codeCollaborateur");
		$this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
	}

	/**
	 * Tests the setCodeGroupe() method.
	 *
	 * @return void
	 */
	public function testSetCodeGroupe() {

		$obj = new AgendaCollabGroup();

		$obj->setCodeGroupe("codeGroupe");
		$this->assertEquals("codeGroupe", $obj->getCodeGroupe());
	}

	/**
	 * Tests the setNumLig() method.
	 *
	 * @return void
	 */
	public function testSetNumLig() {

		$obj = new AgendaCollabGroup();

		$obj->setNumLig(10);
		$this->assertEquals(10, $obj->getNumLig());
	}

}