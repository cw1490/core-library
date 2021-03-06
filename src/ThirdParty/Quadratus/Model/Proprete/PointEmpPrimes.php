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
 * Point emp primes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class PointEmpPrimes {

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code collabo valid.
     *
     * @var string
     */
    private $codeCollaboValid;

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Code employe.
     *
     * @var string
     */
    private $codeEmploye;

    /**
     * Code prime.
     *
     * @var string
     */
    private $codePrime;

    /**
     * Code tache.
     *
     * @var string
     */
    private $codeTache;

    /**
     * Code tache type bt.
     *
     * @var string
     */
    private $codeTacheTypeBt;

    /**
     * Date application.
     *
     * @var DateTime|null
     */
    private $dateApplication;

    /**
     * Date validation synchro.
     *
     * @var DateTime|null
     */
    private $dateValidationSynchro;

    /**
     * Defaut.
     *
     * @var bool
     */
    private $defaut;

    /**
     * Etat.
     *
     * @var string
     */
    private $etat;

    /**
     * Nb heure majoration.
     *
     * @var float
     */
    private $nbHeureMajoration;

    /**
     * Nombre prime.
     *
     * @var float
     */
    private $nombrePrime;

    /**
     * Num bt.
     *
     * @var int
     */
    private $numBt;

    /**
     * Numero prime.
     *
     * @var int
     */
    private $numeroPrime;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Taux prime.
     *
     * @var float
     */
    private $tauxPrime;

    /**
     * Type majo.
     *
     * @var string
     */
    private $typeMajo;

    /**
     * Type prime.
     *
     * @var string
     */
    private $typePrime;

    /**
     * Uniq id synchro.
     *
     * @var string
     */
    private $uniqIdSynchro;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code affaire.
     *
     * @return string Returns the code affaire.
     */
    public function getCodeAffaire() {
        return $this->codeAffaire;
    }

    /**
     * Get the code chantier.
     *
     * @return string Returns the code chantier.
     */
    public function getCodeChantier() {
        return $this->codeChantier;
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
     * Get the code collabo valid.
     *
     * @return string Returns the code collabo valid.
     */
    public function getCodeCollaboValid() {
        return $this->codeCollaboValid;
    }

    /**
     * Get the code collaborateur.
     *
     * @return string Returns the code collaborateur.
     */
    public function getCodeCollaborateur() {
        return $this->codeCollaborateur;
    }

    /**
     * Get the code employe.
     *
     * @return string Returns the code employe.
     */
    public function getCodeEmploye() {
        return $this->codeEmploye;
    }

    /**
     * Get the code prime.
     *
     * @return string Returns the code prime.
     */
    public function getCodePrime() {
        return $this->codePrime;
    }

    /**
     * Get the code tache.
     *
     * @return string Returns the code tache.
     */
    public function getCodeTache() {
        return $this->codeTache;
    }

    /**
     * Get the code tache type bt.
     *
     * @return string Returns the code tache type bt.
     */
    public function getCodeTacheTypeBt() {
        return $this->codeTacheTypeBt;
    }

    /**
     * Get the date application.
     *
     * @return DateTime|null Returns the date application.
     */
    public function getDateApplication() {
        return $this->dateApplication;
    }

    /**
     * Get the date validation synchro.
     *
     * @return DateTime|null Returns the date validation synchro.
     */
    public function getDateValidationSynchro() {
        return $this->dateValidationSynchro;
    }

    /**
     * Get the defaut.
     *
     * @return bool Returns the defaut.
     */
    public function getDefaut() {
        return $this->defaut;
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
     * Get the nb heure majoration.
     *
     * @return float Returns the nb heure majoration.
     */
    public function getNbHeureMajoration() {
        return $this->nbHeureMajoration;
    }

    /**
     * Get the nombre prime.
     *
     * @return float Returns the nombre prime.
     */
    public function getNombrePrime() {
        return $this->nombrePrime;
    }

    /**
     * Get the num bt.
     *
     * @return int Returns the num bt.
     */
    public function getNumBt() {
        return $this->numBt;
    }

    /**
     * Get the numero prime.
     *
     * @return int Returns the numero prime.
     */
    public function getNumeroPrime() {
        return $this->numeroPrime;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the taux prime.
     *
     * @return float Returns the taux prime.
     */
    public function getTauxPrime() {
        return $this->tauxPrime;
    }

    /**
     * Get the type majo.
     *
     * @return string Returns the type majo.
     */
    public function getTypeMajo() {
        return $this->typeMajo;
    }

    /**
     * Get the type prime.
     *
     * @return string Returns the type prime.
     */
    public function getTypePrime() {
        return $this->typePrime;
    }

    /**
     * Get the uniq id synchro.
     *
     * @return string Returns the uniq id synchro.
     */
    public function getUniqIdSynchro() {
        return $this->uniqIdSynchro;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string $codeCollaboValid The code collabo valid.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setCodeCollaboValid($codeCollaboValid) {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code prime.
     *
     * @param string $codePrime The code prime.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setCodePrime($codePrime) {
        $this->codePrime = $codePrime;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string $codeTache The code tache.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setCodeTache($codeTache) {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the code tache type bt.
     *
     * @param string $codeTacheTypeBt The code tache type bt.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setCodeTacheTypeBt($codeTacheTypeBt) {
        $this->codeTacheTypeBt = $codeTacheTypeBt;
        return $this;
    }

    /**
     * Set the date application.
     *
     * @param DateTime|null $dateApplication The date application.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setDateApplication(DateTime $dateApplication = null) {
        $this->dateApplication = $dateApplication;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setDateValidationSynchro(DateTime $dateValidationSynchro = null) {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the defaut.
     *
     * @param bool $defaut The defaut.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setDefaut($defaut) {
        $this->defaut = $defaut;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the nb heure majoration.
     *
     * @param float $nbHeureMajoration The nb heure majoration.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setNbHeureMajoration($nbHeureMajoration) {
        $this->nbHeureMajoration = $nbHeureMajoration;
        return $this;
    }

    /**
     * Set the nombre prime.
     *
     * @param float $nombrePrime The nombre prime.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setNombrePrime($nombrePrime) {
        $this->nombrePrime = $nombrePrime;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int $numBt The num bt.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setNumBt($numBt) {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the numero prime.
     *
     * @param int $numeroPrime The numero prime.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setNumeroPrime($numeroPrime) {
        $this->numeroPrime = $numeroPrime;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the taux prime.
     *
     * @param float $tauxPrime The taux prime.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setTauxPrime($tauxPrime) {
        $this->tauxPrime = $tauxPrime;
        return $this;
    }

    /**
     * Set the type majo.
     *
     * @param string $typeMajo The type majo.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setTypeMajo($typeMajo) {
        $this->typeMajo = $typeMajo;
        return $this;
    }

    /**
     * Set the type prime.
     *
     * @param string $typePrime The type prime.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setTypePrime($typePrime) {
        $this->typePrime = $typePrime;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string $uniqIdSynchro The uniq id synchro.
     * @return PointEmpPrimes Returns this Point emp primes.
     */
    public function setUniqIdSynchro($uniqIdSynchro) {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
