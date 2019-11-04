<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Edition forcee ds trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditionForceeDsTrait {

    /**
     * Edition forcee ds.
     *
     * @var bool
     */
    private $editionForceeDs;

    /**
     * Get the edition forcee ds.
     *
     * @return bool Returns the edition forcee ds.
     */
    public function getEditionForceeDs() {
        return $this->editionForceeDs;
    }

    /**
     * Set the edition forcee ds.
     *
     * @param bool $editionForceeDs The edition forcee ds.
     */
    public function setEditionForceeDs($editionForceeDs) {
        $this->editionForceeDs = $editionForceeDs;
        return $this;
    }
}