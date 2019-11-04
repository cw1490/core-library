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
 * Montant euro ou franc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMontantEuroOuFrancTrait {

    /**
     * Montant euro ou franc.
     *
     * @var string
     */
    private $montantEuroOuFranc;

    /**
     * Get the montant euro ou franc.
     *
     * @return string Returns the montant euro ou franc.
     */
    public function getMontantEuroOuFranc() {
        return $this->montantEuroOuFranc;
    }

    /**
     * Set the montant euro ou franc.
     *
     * @param string $montantEuroOuFranc The montant euro ou franc.
     */
    public function setMontantEuroOuFranc($montantEuroOuFranc) {
        $this->montantEuroOuFranc = $montantEuroOuFranc;
        return $this;
    }
}