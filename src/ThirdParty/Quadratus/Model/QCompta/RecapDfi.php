<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

/**
 * Recap dfi.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class RecapDfi {

    /**
     * Annee ded.
     *
     * @var int
     */
    private $anneeDed;

    /**
     * Annee utilisation.
     *
     * @var int
     */
    private $anneeUtilisation;

    /**
     * Immobilisations.
     *
     * @var float
     */
    private $immobilisations;

    /**
     * Mtt annee.
     *
     * @var float
     */
    private $mttAnnee;

    /**
     * Parts sociales.
     *
     * @var float
     */
    private $partsSociales;

    /**
     * Reint anticipee.
     *
     * @var float
     */
    private $reintAnticipee;

    /**
     * Stocks.
     *
     * @var float
     */
    private $stocks;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the annee ded.
     *
     * @return int Returns the annee ded.
     */
    public function getAnneeDed() {
        return $this->anneeDed;
    }

    /**
     * Get the annee utilisation.
     *
     * @return int Returns the annee utilisation.
     */
    public function getAnneeUtilisation() {
        return $this->anneeUtilisation;
    }

    /**
     * Get the immobilisations.
     *
     * @return float Returns the immobilisations.
     */
    public function getImmobilisations() {
        return $this->immobilisations;
    }

    /**
     * Get the mtt annee.
     *
     * @return float Returns the mtt annee.
     */
    public function getMttAnnee() {
        return $this->mttAnnee;
    }

    /**
     * Get the parts sociales.
     *
     * @return float Returns the parts sociales.
     */
    public function getPartsSociales() {
        return $this->partsSociales;
    }

    /**
     * Get the reint anticipee.
     *
     * @return float Returns the reint anticipee.
     */
    public function getReintAnticipee() {
        return $this->reintAnticipee;
    }

    /**
     * Get the stocks.
     *
     * @return float Returns the stocks.
     */
    public function getStocks() {
        return $this->stocks;
    }

    /**
     * Set the annee ded.
     *
     * @param int $anneeDed The annee ded.
     * @return RecapDfi Returns this Recap dfi.
     */
    public function setAnneeDed($anneeDed) {
        $this->anneeDed = $anneeDed;
        return $this;
    }

    /**
     * Set the annee utilisation.
     *
     * @param int $anneeUtilisation The annee utilisation.
     * @return RecapDfi Returns this Recap dfi.
     */
    public function setAnneeUtilisation($anneeUtilisation) {
        $this->anneeUtilisation = $anneeUtilisation;
        return $this;
    }

    /**
     * Set the immobilisations.
     *
     * @param float $immobilisations The immobilisations.
     * @return RecapDfi Returns this Recap dfi.
     */
    public function setImmobilisations($immobilisations) {
        $this->immobilisations = $immobilisations;
        return $this;
    }

    /**
     * Set the mtt annee.
     *
     * @param float $mttAnnee The mtt annee.
     * @return RecapDfi Returns this Recap dfi.
     */
    public function setMttAnnee($mttAnnee) {
        $this->mttAnnee = $mttAnnee;
        return $this;
    }

    /**
     * Set the parts sociales.
     *
     * @param float $partsSociales The parts sociales.
     * @return RecapDfi Returns this Recap dfi.
     */
    public function setPartsSociales($partsSociales) {
        $this->partsSociales = $partsSociales;
        return $this;
    }

    /**
     * Set the reint anticipee.
     *
     * @param float $reintAnticipee The reint anticipee.
     * @return RecapDfi Returns this Recap dfi.
     */
    public function setReintAnticipee($reintAnticipee) {
        $this->reintAnticipee = $reintAnticipee;
        return $this;
    }

    /**
     * Set the stocks.
     *
     * @param float $stocks The stocks.
     * @return RecapDfi Returns this Recap dfi.
     */
    public function setStocks($stocks) {
        $this->stocks = $stocks;
        return $this;
    }
}
