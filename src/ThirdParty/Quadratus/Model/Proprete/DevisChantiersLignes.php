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

/**
 * Devis chantiers lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class DevisChantiersLignes {

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
     * Code local type.
     *
     * @var string
     */
    private $codeLocalType;

    /**
     * Code revetement.
     *
     * @var string
     */
    private $codeRevetement;

    /**
     * Montant ht.
     *
     * @var float
     */
    private $montantHt;

    /**
     * Num devis.
     *
     * @var string
     */
    private $numDevis;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Sol mur.
     *
     * @var string
     */
    private $solMur;

    /**
     * Surface.
     *
     * @var float
     */
    private $surface;

    /**
     * Uniq id noeud.
     *
     * @var string
     */
    private $uniqIdNoeud;

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
     * Get the code local type.
     *
     * @return string Returns the code local type.
     */
    public function getCodeLocalType() {
        return $this->codeLocalType;
    }

    /**
     * Get the code revetement.
     *
     * @return string Returns the code revetement.
     */
    public function getCodeRevetement() {
        return $this->codeRevetement;
    }

    /**
     * Get the montant ht.
     *
     * @return float Returns the montant ht.
     */
    public function getMontantHt() {
        return $this->montantHt;
    }

    /**
     * Get the num devis.
     *
     * @return string Returns the num devis.
     */
    public function getNumDevis() {
        return $this->numDevis;
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
     * Get the sol mur.
     *
     * @return string Returns the sol mur.
     */
    public function getSolMur() {
        return $this->solMur;
    }

    /**
     * Get the surface.
     *
     * @return float Returns the surface.
     */
    public function getSurface() {
        return $this->surface;
    }

    /**
     * Get the uniq id noeud.
     *
     * @return string Returns the uniq id noeud.
     */
    public function getUniqIdNoeud() {
        return $this->uniqIdNoeud;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code local type.
     *
     * @param string $codeLocalType The code local type.
     */
    public function setCodeLocalType($codeLocalType) {
        $this->codeLocalType = $codeLocalType;
        return $this;
    }

    /**
     * Set the code revetement.
     *
     * @param string $codeRevetement The code revetement.
     */
    public function setCodeRevetement($codeRevetement) {
        $this->codeRevetement = $codeRevetement;
        return $this;
    }

    /**
     * Set the montant ht.
     *
     * @param float $montantHt The montant ht.
     */
    public function setMontantHt($montantHt) {
        $this->montantHt = $montantHt;
        return $this;
    }

    /**
     * Set the num devis.
     *
     * @param string $numDevis The num devis.
     */
    public function setNumDevis($numDevis) {
        $this->numDevis = $numDevis;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the sol mur.
     *
     * @param string $solMur The sol mur.
     */
    public function setSolMur($solMur) {
        $this->solMur = $solMur;
        return $this;
    }

    /**
     * Set the surface.
     *
     * @param float $surface The surface.
     */
    public function setSurface($surface) {
        $this->surface = $surface;
        return $this;
    }

    /**
     * Set the uniq id noeud.
     *
     * @param string $uniqIdNoeud The uniq id noeud.
     */
    public function setUniqIdNoeud($uniqIdNoeud) {
        $this->uniqIdNoeud = $uniqIdNoeud;
        return $this;
    }
}
