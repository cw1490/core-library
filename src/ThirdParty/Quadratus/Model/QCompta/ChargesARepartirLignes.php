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
 * Charges a repartir lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class ChargesARepartirLignes {

    /**
     * Annee.
     *
     * @var string
     */
    private $annee;

    /**
     * Montant restant.
     *
     * @var float
     */
    private $montantRestant;

    /**
     * Montant vir.
     *
     * @var float
     */
    private $montantVir;

    /**
     * Num contrat.
     *
     * @var string
     */
    private $numContrat;

    /**
     * Num cpt car.
     *
     * @var string
     */
    private $numCptCar;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the annee.
     *
     * @return string Returns the annee.
     */
    public function getAnnee() {
        return $this->annee;
    }

    /**
     * Get the montant restant.
     *
     * @return float Returns the montant restant.
     */
    public function getMontantRestant() {
        return $this->montantRestant;
    }

    /**
     * Get the montant vir.
     *
     * @return float Returns the montant vir.
     */
    public function getMontantVir() {
        return $this->montantVir;
    }

    /**
     * Get the num contrat.
     *
     * @return string Returns the num contrat.
     */
    public function getNumContrat() {
        return $this->numContrat;
    }

    /**
     * Get the num cpt car.
     *
     * @return string Returns the num cpt car.
     */
    public function getNumCptCar() {
        return $this->numCptCar;
    }

    /**
     * Get the num ligne.
     *
     * @return int Returns the num ligne.
     */
    public function getNumLigne() {
        return $this->numLigne;
    }

    /**
     * Set the annee.
     *
     * @param string $annee The annee.
     * @return ChargesARepartirLignes Returns this Charges a repartir lignes.
     */
    public function setAnnee($annee) {
        $this->annee = $annee;
        return $this;
    }

    /**
     * Set the montant restant.
     *
     * @param float $montantRestant The montant restant.
     * @return ChargesARepartirLignes Returns this Charges a repartir lignes.
     */
    public function setMontantRestant($montantRestant) {
        $this->montantRestant = $montantRestant;
        return $this;
    }

    /**
     * Set the montant vir.
     *
     * @param float $montantVir The montant vir.
     * @return ChargesARepartirLignes Returns this Charges a repartir lignes.
     */
    public function setMontantVir($montantVir) {
        $this->montantVir = $montantVir;
        return $this;
    }

    /**
     * Set the num contrat.
     *
     * @param string $numContrat The num contrat.
     * @return ChargesARepartirLignes Returns this Charges a repartir lignes.
     */
    public function setNumContrat($numContrat) {
        $this->numContrat = $numContrat;
        return $this;
    }

    /**
     * Set the num cpt car.
     *
     * @param string $numCptCar The num cpt car.
     * @return ChargesARepartirLignes Returns this Charges a repartir lignes.
     */
    public function setNumCptCar($numCptCar) {
        $this->numCptCar = $numCptCar;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return ChargesARepartirLignes Returns this Charges a repartir lignes.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }
}
