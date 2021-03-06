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

use DateTime;

/**
 * Compteur ecritures.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class CompteurEcritures {

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Date comptage.
     *
     * @var DateTime|null
     */
    private $dateComptage;

    /**
     * Millesime.
     *
     * @var string
     */
    private $millesime;

    /**
     * Nb ecritures.
     *
     * @var int
     */
    private $nbEcritures;

    /**
     * Nb ecritures a deduire.
     *
     * @var float
     */
    private $nbEcrituresADeduire;

    /**
     * No chrono preparation.
     *
     * @var int
     */
    private $noChronoPreparation;

    /**
     * Periode preparation.
     *
     * @var DateTime|null
     */
    private $periodePreparation;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

    /**
     * Uniq id pdf.
     *
     * @var string
     */
    private $uniqIdPdf;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
    }

    /**
     * Get the date comptage.
     *
     * @return DateTime|null Returns the date comptage.
     */
    public function getDateComptage() {
        return $this->dateComptage;
    }

    /**
     * Get the millesime.
     *
     * @return string Returns the millesime.
     */
    public function getMillesime() {
        return $this->millesime;
    }

    /**
     * Get the nb ecritures.
     *
     * @return int Returns the nb ecritures.
     */
    public function getNbEcritures() {
        return $this->nbEcritures;
    }

    /**
     * Get the nb ecritures a deduire.
     *
     * @return float Returns the nb ecritures a deduire.
     */
    public function getNbEcrituresADeduire() {
        return $this->nbEcrituresADeduire;
    }

    /**
     * Get the no chrono preparation.
     *
     * @return int Returns the no chrono preparation.
     */
    public function getNoChronoPreparation() {
        return $this->noChronoPreparation;
    }

    /**
     * Get the periode preparation.
     *
     * @return DateTime|null Returns the periode preparation.
     */
    public function getPeriodePreparation() {
        return $this->periodePreparation;
    }

    /**
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Get the uniq id pdf.
     *
     * @return string Returns the uniq id pdf.
     */
    public function getUniqIdPdf() {
        return $this->uniqIdPdf;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return CompteurEcritures Returns this Compteur ecritures.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the date comptage.
     *
     * @param DateTime|null $dateComptage The date comptage.
     * @return CompteurEcritures Returns this Compteur ecritures.
     */
    public function setDateComptage(DateTime $dateComptage = null) {
        $this->dateComptage = $dateComptage;
        return $this;
    }

    /**
     * Set the millesime.
     *
     * @param string $millesime The millesime.
     * @return CompteurEcritures Returns this Compteur ecritures.
     */
    public function setMillesime($millesime) {
        $this->millesime = $millesime;
        return $this;
    }

    /**
     * Set the nb ecritures.
     *
     * @param int $nbEcritures The nb ecritures.
     * @return CompteurEcritures Returns this Compteur ecritures.
     */
    public function setNbEcritures($nbEcritures) {
        $this->nbEcritures = $nbEcritures;
        return $this;
    }

    /**
     * Set the nb ecritures a deduire.
     *
     * @param float $nbEcrituresADeduire The nb ecritures a deduire.
     * @return CompteurEcritures Returns this Compteur ecritures.
     */
    public function setNbEcrituresADeduire($nbEcrituresADeduire) {
        $this->nbEcrituresADeduire = $nbEcrituresADeduire;
        return $this;
    }

    /**
     * Set the no chrono preparation.
     *
     * @param int $noChronoPreparation The no chrono preparation.
     * @return CompteurEcritures Returns this Compteur ecritures.
     */
    public function setNoChronoPreparation($noChronoPreparation) {
        $this->noChronoPreparation = $noChronoPreparation;
        return $this;
    }

    /**
     * Set the periode preparation.
     *
     * @param DateTime|null $periodePreparation The periode preparation.
     * @return CompteurEcritures Returns this Compteur ecritures.
     */
    public function setPeriodePreparation(DateTime $periodePreparation = null) {
        $this->periodePreparation = $periodePreparation;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return CompteurEcritures Returns this Compteur ecritures.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the uniq id pdf.
     *
     * @param string $uniqIdPdf The uniq id pdf.
     * @return CompteurEcritures Returns this Compteur ecritures.
     */
    public function setUniqIdPdf($uniqIdPdf) {
        $this->uniqIdPdf = $uniqIdPdf;
        return $this;
    }
}
