<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use DateTime;

/**
 * Options.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Options {

    /**
     * Booleen.
     *
     * @var bool
     */
    private $booleen;

    /**
     * Date heure.
     *
     * @var DateTime|null
     */
    private $dateHeure;

    /**
     * Descriptif.
     *
     * @var string
     */
    private $descriptif;

    /**
     * Numerique.
     *
     * @var float
     */
    private $numerique;

    /**
     * String.
     *
     * @var string
     */
    private $string;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the booleen.
     *
     * @return bool Returns the booleen.
     */
    public function getBooleen() {
        return $this->booleen;
    }

    /**
     * Get the date heure.
     *
     * @return DateTime|null Returns the date heure.
     */
    public function getDateHeure() {
        return $this->dateHeure;
    }

    /**
     * Get the descriptif.
     *
     * @return string Returns the descriptif.
     */
    public function getDescriptif() {
        return $this->descriptif;
    }

    /**
     * Get the numerique.
     *
     * @return float Returns the numerique.
     */
    public function getNumerique() {
        return $this->numerique;
    }

    /**
     * Get the string.
     *
     * @return string Returns the string.
     */
    public function getString() {
        return $this->string;
    }

    /**
     * Set the booleen.
     *
     * @param bool $booleen The booleen.
     * @return Options Returns this Options.
     */
    public function setBooleen($booleen) {
        $this->booleen = $booleen;
        return $this;
    }

    /**
     * Set the date heure.
     *
     * @param DateTime|null $dateHeure The date heure.
     * @return Options Returns this Options.
     */
    public function setDateHeure(DateTime $dateHeure = null) {
        $this->dateHeure = $dateHeure;
        return $this;
    }

    /**
     * Set the descriptif.
     *
     * @param string $descriptif The descriptif.
     * @return Options Returns this Options.
     */
    public function setDescriptif($descriptif) {
        $this->descriptif = $descriptif;
        return $this;
    }

    /**
     * Set the numerique.
     *
     * @param float $numerique The numerique.
     * @return Options Returns this Options.
     */
    public function setNumerique($numerique) {
        $this->numerique = $numerique;
        return $this;
    }

    /**
     * Set the string.
     *
     * @param string $string The string.
     * @return Options Returns this Options.
     */
    public function setString($string) {
        $this->string = $string;
        return $this;
    }
}
