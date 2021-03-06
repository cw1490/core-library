<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

/**
 * Actions.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Actions {

    /**
     * Code action.
     *
     * @var string
     */
    private $codeAction;

    /**
     * Code calcul.
     *
     * @var int
     */
    private $codeCalcul;

    /**
     * Descriptif court.
     *
     * @var string
     */
    private $descriptifCourt;

    /**
     * Descriptif long.
     *
     * @var string
     */
    private $descriptifLong;

    /**
     * Obligation liee.
     *
     * @var string
     */
    private $obligationLiee;

    /**
     * Quantite heure.
     *
     * @var float
     */
    private $quantiteHeure;

    /**
     * Relation qh.
     *
     * @var bool
     */
    private $relationQh;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code action.
     *
     * @return string Returns the code action.
     */
    public function getCodeAction() {
        return $this->codeAction;
    }

    /**
     * Get the code calcul.
     *
     * @return int Returns the code calcul.
     */
    public function getCodeCalcul() {
        return $this->codeCalcul;
    }

    /**
     * Get the descriptif court.
     *
     * @return string Returns the descriptif court.
     */
    public function getDescriptifCourt() {
        return $this->descriptifCourt;
    }

    /**
     * Get the descriptif long.
     *
     * @return string Returns the descriptif long.
     */
    public function getDescriptifLong() {
        return $this->descriptifLong;
    }

    /**
     * Get the obligation liee.
     *
     * @return string Returns the obligation liee.
     */
    public function getObligationLiee() {
        return $this->obligationLiee;
    }

    /**
     * Get the quantite heure.
     *
     * @return float Returns the quantite heure.
     */
    public function getQuantiteHeure() {
        return $this->quantiteHeure;
    }

    /**
     * Get the relation qh.
     *
     * @return bool Returns the relation qh.
     */
    public function getRelationQh() {
        return $this->relationQh;
    }

    /**
     * Set the code action.
     *
     * @param string $codeAction The code action.
     * @return Actions Returns this Actions.
     */
    public function setCodeAction($codeAction) {
        $this->codeAction = $codeAction;
        return $this;
    }

    /**
     * Set the code calcul.
     *
     * @param int $codeCalcul The code calcul.
     * @return Actions Returns this Actions.
     */
    public function setCodeCalcul($codeCalcul) {
        $this->codeCalcul = $codeCalcul;
        return $this;
    }

    /**
     * Set the descriptif court.
     *
     * @param string $descriptifCourt The descriptif court.
     * @return Actions Returns this Actions.
     */
    public function setDescriptifCourt($descriptifCourt) {
        $this->descriptifCourt = $descriptifCourt;
        return $this;
    }

    /**
     * Set the descriptif long.
     *
     * @param string $descriptifLong The descriptif long.
     * @return Actions Returns this Actions.
     */
    public function setDescriptifLong($descriptifLong) {
        $this->descriptifLong = $descriptifLong;
        return $this;
    }

    /**
     * Set the obligation liee.
     *
     * @param string $obligationLiee The obligation liee.
     * @return Actions Returns this Actions.
     */
    public function setObligationLiee($obligationLiee) {
        $this->obligationLiee = $obligationLiee;
        return $this;
    }

    /**
     * Set the quantite heure.
     *
     * @param float $quantiteHeure The quantite heure.
     * @return Actions Returns this Actions.
     */
    public function setQuantiteHeure($quantiteHeure) {
        $this->quantiteHeure = $quantiteHeure;
        return $this;
    }

    /**
     * Set the relation qh.
     *
     * @param bool $relationQh The relation qh.
     * @return Actions Returns this Actions.
     */
    public function setRelationQh($relationQh) {
        $this->relationQh = $relationQh;
        return $this;
    }
}
