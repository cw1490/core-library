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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ClientsLstPersoIndiceCollab;

/**
 * Clients lst perso indice collab test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ClientsLstPersoIndiceCollabTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ClientsLstPersoIndiceCollab();

        $this->assertNull($obj->getChapitre());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getOrigine());
        $this->assertNull($obj->getRefGuid());
    }

    /**
     * Tests the setChapitre() method.
     *
     * @return void
     */
    public function testSetChapitre() {

        $obj = new ClientsLstPersoIndiceCollab();

        $obj->setChapitre("chapitre");
        $this->assertEquals("chapitre", $obj->getChapitre());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new ClientsLstPersoIndiceCollab();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setIndice() method.
     *
     * @return void
     */
    public function testSetIndice() {

        $obj = new ClientsLstPersoIndiceCollab();

        $obj->setIndice(10);
        $this->assertEquals(10, $obj->getIndice());
    }

    /**
     * Tests the setOrigine() method.
     *
     * @return void
     */
    public function testSetOrigine() {

        $obj = new ClientsLstPersoIndiceCollab();

        $obj->setOrigine(10);
        $this->assertEquals(10, $obj->getOrigine());
    }

    /**
     * Tests the setRefGuid() method.
     *
     * @return void
     */
    public function testSetRefGuid() {

        $obj = new ClientsLstPersoIndiceCollab();

        $obj->setRefGuid("refGuid");
        $this->assertEquals("refGuid", $obj->getRefGuid());
    }
}
