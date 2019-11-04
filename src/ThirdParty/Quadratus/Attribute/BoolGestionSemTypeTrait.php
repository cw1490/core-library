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
 * Gestion sem type trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionSemTypeTrait {

    /**
     * Gestion sem type.
     *
     * @var bool
     */
    private $gestionSemType;

    /**
     * Get the gestion sem type.
     *
     * @return bool Returns the gestion sem type.
     */
    public function getGestionSemType() {
        return $this->gestionSemType;
    }

    /**
     * Set the gestion sem type.
     *
     * @param bool $gestionSemType The gestion sem type.
     */
    public function setGestionSemType($gestionSemType) {
        $this->gestionSemType = $gestionSemType;
        return $this;
    }
}