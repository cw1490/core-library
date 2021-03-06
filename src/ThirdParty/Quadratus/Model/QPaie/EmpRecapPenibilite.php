<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use DateTime;

/**
 * Emp recap penibilite.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpRecapPenibilite {

    /**
     * Code collab.
     *
     * @var string
     */
    private $codeCollab;

    /**
     * Date creat.
     *
     * @var DateTime|null
     */
    private $dateCreat;

    /**
     * Date debut.
     *
     * @var DateTime|null
     */
    private $dateDebut;

    /**
     * Date fin.
     *
     * @var DateTime|null
     */
    private $dateFin;

    /**
     * Date modif.
     *
     * @var DateTime|null
     */
    private $dateModif;

    /**
     * Etat.
     *
     * @var string
     */
    private $etat;

    /**
     * Id recap.
     *
     * @var int
     */
    private $idRecap;

    /**
     * Indice bul.
     *
     * @var string
     */
    private $indiceBul;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Numero ordre.
     *
     * @var int
     */
    private $numeroOrdre;

    /**
     * Regule traitee.
     *
     * @var DateTime|null
     */
    private $reguleTraitee;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code collab.
     *
     * @return string Returns the code collab.
     */
    public function getCodeCollab() {
        return $this->codeCollab;
    }

    /**
     * Get the date creat.
     *
     * @return DateTime|null Returns the date creat.
     */
    public function getDateCreat() {
        return $this->dateCreat;
    }

    /**
     * Get the date debut.
     *
     * @return DateTime|null Returns the date debut.
     */
    public function getDateDebut() {
        return $this->dateDebut;
    }

    /**
     * Get the date fin.
     *
     * @return DateTime|null Returns the date fin.
     */
    public function getDateFin() {
        return $this->dateFin;
    }

    /**
     * Get the date modif.
     *
     * @return DateTime|null Returns the date modif.
     */
    public function getDateModif() {
        return $this->dateModif;
    }

    /**
     * Get the etat.
     *
     * @return string Returns the etat.
     */
    public function getEtat() {
        return $this->etat;
    }

    /**
     * Get the id recap.
     *
     * @return int Returns the id recap.
     */
    public function getIdRecap() {
        return $this->idRecap;
    }

    /**
     * Get the indice bul.
     *
     * @return string Returns the indice bul.
     */
    public function getIndiceBul() {
        return $this->indiceBul;
    }

    /**
     * Get the numero employe.
     *
     * @return string Returns the numero employe.
     */
    public function getNumeroEmploye() {
        return $this->numeroEmploye;
    }

    /**
     * Get the numero ordre.
     *
     * @return int Returns the numero ordre.
     */
    public function getNumeroOrdre() {
        return $this->numeroOrdre;
    }

    /**
     * Get the regule traitee.
     *
     * @return DateTime|null Returns the regule traitee.
     */
    public function getReguleTraitee() {
        return $this->reguleTraitee;
    }

    /**
     * Set the code collab.
     *
     * @param string $codeCollab The code collab.
     * @return EmpRecapPenibilite Returns this Emp recap penibilite.
     */
    public function setCodeCollab($codeCollab) {
        $this->codeCollab = $codeCollab;
        return $this;
    }

    /**
     * Set the date creat.
     *
     * @param DateTime|null $dateCreat The date creat.
     * @return EmpRecapPenibilite Returns this Emp recap penibilite.
     */
    public function setDateCreat(DateTime $dateCreat = null) {
        $this->dateCreat = $dateCreat;
        return $this;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime|null $dateDebut The date debut.
     * @return EmpRecapPenibilite Returns this Emp recap penibilite.
     */
    public function setDateDebut(DateTime $dateDebut = null) {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime|null $dateFin The date fin.
     * @return EmpRecapPenibilite Returns this Emp recap penibilite.
     */
    public function setDateFin(DateTime $dateFin = null) {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime|null $dateModif The date modif.
     * @return EmpRecapPenibilite Returns this Emp recap penibilite.
     */
    public function setDateModif(DateTime $dateModif = null) {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     * @return EmpRecapPenibilite Returns this Emp recap penibilite.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the id recap.
     *
     * @param int $idRecap The id recap.
     * @return EmpRecapPenibilite Returns this Emp recap penibilite.
     */
    public function setIdRecap($idRecap) {
        $this->idRecap = $idRecap;
        return $this;
    }

    /**
     * Set the indice bul.
     *
     * @param string $indiceBul The indice bul.
     * @return EmpRecapPenibilite Returns this Emp recap penibilite.
     */
    public function setIndiceBul($indiceBul) {
        $this->indiceBul = $indiceBul;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return EmpRecapPenibilite Returns this Emp recap penibilite.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the numero ordre.
     *
     * @param int $numeroOrdre The numero ordre.
     * @return EmpRecapPenibilite Returns this Emp recap penibilite.
     */
    public function setNumeroOrdre($numeroOrdre) {
        $this->numeroOrdre = $numeroOrdre;
        return $this;
    }

    /**
     * Set the regule traitee.
     *
     * @param DateTime|null $reguleTraitee The regule traitee.
     * @return EmpRecapPenibilite Returns this Emp recap penibilite.
     */
    public function setReguleTraitee(DateTime $reguleTraitee = null) {
        $this->reguleTraitee = $reguleTraitee;
        return $this;
    }
}
