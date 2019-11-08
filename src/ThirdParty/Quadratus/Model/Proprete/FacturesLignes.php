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
 * Factures lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class FacturesLignes {

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code affaire ligne.
     *
     * @var string
     */
    private $codeAffaireLigne;

    /**
     * Code anal article.
     *
     * @var string
     */
    private $codeAnalArticle;

    /**
     * Code article.
     *
     * @var string
     */
    private $codeArticle;

    /**
     * Code chantier.
     *
     * @var string
     */
    private $codeChantier;

    /**
     * Code chantier ligne.
     *
     * @var string
     */
    private $codeChantierLigne;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code regroupement.
     *
     * @var string
     */
    private $codeRegroupement;

    /**
     * Code tva article.
     *
     * @var string
     */
    private $codeTvaArticle;

    /**
     * Code unite.
     *
     * @var string
     */
    private $codeUnite;

    /**
     * Code ventil article.
     *
     * @var string
     */
    private $codeVentilArticle;

    /**
     * Coefficient bt.
     *
     * @var float
     */
    private $coefficientBt;

    /**
     * Date bt.
     *
     * @var DateTime|null
     */
    private $dateBt;

    /**
     * Date preparation.
     *
     * @var DateTime|null
     */
    private $datePreparation;

    /**
     * Depuis deb fac.
     *
     * @var bool
     */
    private $depuisDebFac;

    /**
     * Designation.
     *
     * @var string
     */
    private $designation;

    /**
     * Designation2.
     *
     * @var string
     */
    private $designation2;

    /**
     * Designation3.
     *
     * @var string
     */
    private $designation3;

    /**
     * Designation bis.
     *
     * @var string
     */
    private $designationBis;

    /**
     * Designation bis2.
     *
     * @var string
     */
    private $designationBis2;

    /**
     * Designation bis3.
     *
     * @var string
     */
    private $designationBis3;

    /**
     * Designation rtf.
     *
     * @var string
     */
    private $designationRtf;

    /**
     * Duree bt.
     *
     * @var float
     */
    private $dureeBt;

    /**
     * From pointage bt.
     *
     * @var bool
     */
    private $fromPointageBt;

    /**
     * Heures prev.
     *
     * @var float
     */
    private $heuresPrev;

    /**
     * Heures reel.
     *
     * @var float
     */
    private $heuresReel;

    /**
     * Imprimer dans pied.
     *
     * @var bool
     */
    private $imprimerDansPied;

    /**
     * Montant unitaire taxe.
     *
     * @var float
     */
    private $montantUnitaireTaxe;

    /**
     * Mot cle dans pied.
     *
     * @var string
     */
    private $motCleDansPied;

    /**
     * No chrono preparation.
     *
     * @var int
     */
    private $noChronoPreparation;

    /**
     * No ligne ori.
     *
     * @var int
     */
    private $noLigneOri;

    /**
     * No piece origine.
     *
     * @var string
     */
    private $noPieceOrigine;

    /**
     * Numero bt.
     *
     * @var int
     */
    private $numeroBt;

    /**
     * Numero facture.
     *
     * @var string
     */
    private $numeroFacture;

    /**
     * Numero ligne.
     *
     * @var int
     */
    private $numeroLigne;

    /**
     * Periode preparation.
     *
     * @var DateTime|null
     */
    private $periodePreparation;

    /**
     * Periode ventil marge.
     *
     * @var DateTime|null
     */
    private $periodeVentilMarge;

    /**
     * Poste rent.
     *
     * @var string
     */
    private $posteRent;

    /**
     * Prix achat.
     *
     * @var float
     */
    private $prixAchat;

    /**
     * Prix achat bt.
     *
     * @var float
     */
    private $prixAchatBt;

    /**
     * Prix unitaire.
     *
     * @var float
     */
    private $prixUnitaire;

    /**
     * Prix unitaire pdf.
     *
     * @var float
     */
    private $prixUnitairePdf;

    /**
     * Px facture.
     *
     * @var bool
     */
    private $pxFacture;

    /**
     * Quantite.
     *
     * @var float
     */
    private $quantite;

    /**
     * Ref poste cde web ft.
     *
     * @var string
     */
    private $refPosteCdeWebFt;

    /**
     * Remise ligne1.
     *
     * @var float
     */
    private $remiseLigne1;

    /**
     * Remise ligne2.
     *
     * @var float
     */
    private $remiseLigne2;

    /**
     * Remise ligne3.
     *
     * @var float
     */
    private $remiseLigne3;

    /**
     * Taux horaire bt.
     *
     * @var float
     */
    private $tauxHoraireBt;

    /**
     * Taux tva article.
     *
     * @var float
     */
    private $tauxTvaArticle;

    /**
     * Taux tva taxe.
     *
     * @var float
     */
    private $tauxTvaTaxe;

    /**
     * Type piece.
     *
     * @var string
     */
    private $typePiece;

    /**
     * Ventil marge.
     *
     * @var bool
     */
    private $ventilMarge;

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
     * Get the code affaire ligne.
     *
     * @return string Returns the code affaire ligne.
     */
    public function getCodeAffaireLigne() {
        return $this->codeAffaireLigne;
    }

    /**
     * Get the code anal article.
     *
     * @return string Returns the code anal article.
     */
    public function getCodeAnalArticle() {
        return $this->codeAnalArticle;
    }

    /**
     * Get the code article.
     *
     * @return string Returns the code article.
     */
    public function getCodeArticle() {
        return $this->codeArticle;
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
     * Get the code chantier ligne.
     *
     * @return string Returns the code chantier ligne.
     */
    public function getCodeChantierLigne() {
        return $this->codeChantierLigne;
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
     * Get the code regroupement.
     *
     * @return string Returns the code regroupement.
     */
    public function getCodeRegroupement() {
        return $this->codeRegroupement;
    }

    /**
     * Get the code tva article.
     *
     * @return string Returns the code tva article.
     */
    public function getCodeTvaArticle() {
        return $this->codeTvaArticle;
    }

    /**
     * Get the code unite.
     *
     * @return string Returns the code unite.
     */
    public function getCodeUnite() {
        return $this->codeUnite;
    }

    /**
     * Get the code ventil article.
     *
     * @return string Returns the code ventil article.
     */
    public function getCodeVentilArticle() {
        return $this->codeVentilArticle;
    }

    /**
     * Get the coefficient bt.
     *
     * @return float Returns the coefficient bt.
     */
    public function getCoefficientBt() {
        return $this->coefficientBt;
    }

    /**
     * Get the date bt.
     *
     * @return DateTime|null Returns the date bt.
     */
    public function getDateBt() {
        return $this->dateBt;
    }

    /**
     * Get the date preparation.
     *
     * @return DateTime|null Returns the date preparation.
     */
    public function getDatePreparation() {
        return $this->datePreparation;
    }

    /**
     * Get the depuis deb fac.
     *
     * @return bool Returns the depuis deb fac.
     */
    public function getDepuisDebFac() {
        return $this->depuisDebFac;
    }

    /**
     * Get the designation.
     *
     * @return string Returns the designation.
     */
    public function getDesignation() {
        return $this->designation;
    }

    /**
     * Get the designation2.
     *
     * @return string Returns the designation2.
     */
    public function getDesignation2() {
        return $this->designation2;
    }

    /**
     * Get the designation3.
     *
     * @return string Returns the designation3.
     */
    public function getDesignation3() {
        return $this->designation3;
    }

    /**
     * Get the designation bis.
     *
     * @return string Returns the designation bis.
     */
    public function getDesignationBis() {
        return $this->designationBis;
    }

    /**
     * Get the designation bis2.
     *
     * @return string Returns the designation bis2.
     */
    public function getDesignationBis2() {
        return $this->designationBis2;
    }

    /**
     * Get the designation bis3.
     *
     * @return string Returns the designation bis3.
     */
    public function getDesignationBis3() {
        return $this->designationBis3;
    }

    /**
     * Get the designation rtf.
     *
     * @return string Returns the designation rtf.
     */
    public function getDesignationRtf() {
        return $this->designationRtf;
    }

    /**
     * Get the duree bt.
     *
     * @return float Returns the duree bt.
     */
    public function getDureeBt() {
        return $this->dureeBt;
    }

    /**
     * Get the from pointage bt.
     *
     * @return bool Returns the from pointage bt.
     */
    public function getFromPointageBt() {
        return $this->fromPointageBt;
    }

    /**
     * Get the heures prev.
     *
     * @return float Returns the heures prev.
     */
    public function getHeuresPrev() {
        return $this->heuresPrev;
    }

    /**
     * Get the heures reel.
     *
     * @return float Returns the heures reel.
     */
    public function getHeuresReel() {
        return $this->heuresReel;
    }

    /**
     * Get the imprimer dans pied.
     *
     * @return bool Returns the imprimer dans pied.
     */
    public function getImprimerDansPied() {
        return $this->imprimerDansPied;
    }

    /**
     * Get the montant unitaire taxe.
     *
     * @return float Returns the montant unitaire taxe.
     */
    public function getMontantUnitaireTaxe() {
        return $this->montantUnitaireTaxe;
    }

    /**
     * Get the mot cle dans pied.
     *
     * @return string Returns the mot cle dans pied.
     */
    public function getMotCleDansPied() {
        return $this->motCleDansPied;
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
     * Get the no ligne ori.
     *
     * @return int Returns the no ligne ori.
     */
    public function getNoLigneOri() {
        return $this->noLigneOri;
    }

    /**
     * Get the no piece origine.
     *
     * @return string Returns the no piece origine.
     */
    public function getNoPieceOrigine() {
        return $this->noPieceOrigine;
    }

    /**
     * Get the numero bt.
     *
     * @return int Returns the numero bt.
     */
    public function getNumeroBt() {
        return $this->numeroBt;
    }

    /**
     * Get the numero facture.
     *
     * @return string Returns the numero facture.
     */
    public function getNumeroFacture() {
        return $this->numeroFacture;
    }

    /**
     * Get the numero ligne.
     *
     * @return int Returns the numero ligne.
     */
    public function getNumeroLigne() {
        return $this->numeroLigne;
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
     * Get the periode ventil marge.
     *
     * @return DateTime|null Returns the periode ventil marge.
     */
    public function getPeriodeVentilMarge() {
        return $this->periodeVentilMarge;
    }

    /**
     * Get the poste rent.
     *
     * @return string Returns the poste rent.
     */
    public function getPosteRent() {
        return $this->posteRent;
    }

    /**
     * Get the prix achat.
     *
     * @return float Returns the prix achat.
     */
    public function getPrixAchat() {
        return $this->prixAchat;
    }

    /**
     * Get the prix achat bt.
     *
     * @return float Returns the prix achat bt.
     */
    public function getPrixAchatBt() {
        return $this->prixAchatBt;
    }

    /**
     * Get the prix unitaire.
     *
     * @return float Returns the prix unitaire.
     */
    public function getPrixUnitaire() {
        return $this->prixUnitaire;
    }

    /**
     * Get the prix unitaire pdf.
     *
     * @return float Returns the prix unitaire pdf.
     */
    public function getPrixUnitairePdf() {
        return $this->prixUnitairePdf;
    }

    /**
     * Get the px facture.
     *
     * @return bool Returns the px facture.
     */
    public function getPxFacture() {
        return $this->pxFacture;
    }

    /**
     * Get the quantite.
     *
     * @return float Returns the quantite.
     */
    public function getQuantite() {
        return $this->quantite;
    }

    /**
     * Get the ref poste cde web ft.
     *
     * @return string Returns the ref poste cde web ft.
     */
    public function getRefPosteCdeWebFt() {
        return $this->refPosteCdeWebFt;
    }

    /**
     * Get the remise ligne1.
     *
     * @return float Returns the remise ligne1.
     */
    public function getRemiseLigne1() {
        return $this->remiseLigne1;
    }

    /**
     * Get the remise ligne2.
     *
     * @return float Returns the remise ligne2.
     */
    public function getRemiseLigne2() {
        return $this->remiseLigne2;
    }

    /**
     * Get the remise ligne3.
     *
     * @return float Returns the remise ligne3.
     */
    public function getRemiseLigne3() {
        return $this->remiseLigne3;
    }

    /**
     * Get the taux horaire bt.
     *
     * @return float Returns the taux horaire bt.
     */
    public function getTauxHoraireBt() {
        return $this->tauxHoraireBt;
    }

    /**
     * Get the taux tva article.
     *
     * @return float Returns the taux tva article.
     */
    public function getTauxTvaArticle() {
        return $this->tauxTvaArticle;
    }

    /**
     * Get the taux tva taxe.
     *
     * @return float Returns the taux tva taxe.
     */
    public function getTauxTvaTaxe() {
        return $this->tauxTvaTaxe;
    }

    /**
     * Get the type piece.
     *
     * @return string Returns the type piece.
     */
    public function getTypePiece() {
        return $this->typePiece;
    }

    /**
     * Get the ventil marge.
     *
     * @return bool Returns the ventil marge.
     */
    public function getVentilMarge() {
        return $this->ventilMarge;
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
     * Set the code affaire ligne.
     *
     * @param string $codeAffaireLigne The code affaire ligne.
     */
    public function setCodeAffaireLigne($codeAffaireLigne) {
        $this->codeAffaireLigne = $codeAffaireLigne;
        return $this;
    }

    /**
     * Set the code anal article.
     *
     * @param string $codeAnalArticle The code anal article.
     */
    public function setCodeAnalArticle($codeAnalArticle) {
        $this->codeAnalArticle = $codeAnalArticle;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
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
     * Set the code chantier ligne.
     *
     * @param string $codeChantierLigne The code chantier ligne.
     */
    public function setCodeChantierLigne($codeChantierLigne) {
        $this->codeChantierLigne = $codeChantierLigne;
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
     * Set the code regroupement.
     *
     * @param string $codeRegroupement The code regroupement.
     */
    public function setCodeRegroupement($codeRegroupement) {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the code tva article.
     *
     * @param string $codeTvaArticle The code tva article.
     */
    public function setCodeTvaArticle($codeTvaArticle) {
        $this->codeTvaArticle = $codeTvaArticle;
        return $this;
    }

    /**
     * Set the code unite.
     *
     * @param string $codeUnite The code unite.
     */
    public function setCodeUnite($codeUnite) {
        $this->codeUnite = $codeUnite;
        return $this;
    }

    /**
     * Set the code ventil article.
     *
     * @param string $codeVentilArticle The code ventil article.
     */
    public function setCodeVentilArticle($codeVentilArticle) {
        $this->codeVentilArticle = $codeVentilArticle;
        return $this;
    }

    /**
     * Set the coefficient bt.
     *
     * @param float $coefficientBt The coefficient bt.
     */
    public function setCoefficientBt($coefficientBt) {
        $this->coefficientBt = $coefficientBt;
        return $this;
    }

    /**
     * Set the date bt.
     *
     * @param DateTime|null $dateBt The date bt.
     */
    public function setDateBt(DateTime $dateBt = null) {
        $this->dateBt = $dateBt;
        return $this;
    }

    /**
     * Set the date preparation.
     *
     * @param DateTime|null $datePreparation The date preparation.
     */
    public function setDatePreparation(DateTime $datePreparation = null) {
        $this->datePreparation = $datePreparation;
        return $this;
    }

    /**
     * Set the depuis deb fac.
     *
     * @param bool $depuisDebFac The depuis deb fac.
     */
    public function setDepuisDebFac($depuisDebFac) {
        $this->depuisDebFac = $depuisDebFac;
        return $this;
    }

    /**
     * Set the designation.
     *
     * @param string $designation The designation.
     */
    public function setDesignation($designation) {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Set the designation2.
     *
     * @param string $designation2 The designation2.
     */
    public function setDesignation2($designation2) {
        $this->designation2 = $designation2;
        return $this;
    }

    /**
     * Set the designation3.
     *
     * @param string $designation3 The designation3.
     */
    public function setDesignation3($designation3) {
        $this->designation3 = $designation3;
        return $this;
    }

    /**
     * Set the designation bis.
     *
     * @param string $designationBis The designation bis.
     */
    public function setDesignationBis($designationBis) {
        $this->designationBis = $designationBis;
        return $this;
    }

    /**
     * Set the designation bis2.
     *
     * @param string $designationBis2 The designation bis2.
     */
    public function setDesignationBis2($designationBis2) {
        $this->designationBis2 = $designationBis2;
        return $this;
    }

    /**
     * Set the designation bis3.
     *
     * @param string $designationBis3 The designation bis3.
     */
    public function setDesignationBis3($designationBis3) {
        $this->designationBis3 = $designationBis3;
        return $this;
    }

    /**
     * Set the designation rtf.
     *
     * @param string $designationRtf The designation rtf.
     */
    public function setDesignationRtf($designationRtf) {
        $this->designationRtf = $designationRtf;
        return $this;
    }

    /**
     * Set the duree bt.
     *
     * @param float $dureeBt The duree bt.
     */
    public function setDureeBt($dureeBt) {
        $this->dureeBt = $dureeBt;
        return $this;
    }

    /**
     * Set the from pointage bt.
     *
     * @param bool $fromPointageBt The from pointage bt.
     */
    public function setFromPointageBt($fromPointageBt) {
        $this->fromPointageBt = $fromPointageBt;
        return $this;
    }

    /**
     * Set the heures prev.
     *
     * @param float $heuresPrev The heures prev.
     */
    public function setHeuresPrev($heuresPrev) {
        $this->heuresPrev = $heuresPrev;
        return $this;
    }

    /**
     * Set the heures reel.
     *
     * @param float $heuresReel The heures reel.
     */
    public function setHeuresReel($heuresReel) {
        $this->heuresReel = $heuresReel;
        return $this;
    }

    /**
     * Set the imprimer dans pied.
     *
     * @param bool $imprimerDansPied The imprimer dans pied.
     */
    public function setImprimerDansPied($imprimerDansPied) {
        $this->imprimerDansPied = $imprimerDansPied;
        return $this;
    }

    /**
     * Set the montant unitaire taxe.
     *
     * @param float $montantUnitaireTaxe The montant unitaire taxe.
     */
    public function setMontantUnitaireTaxe($montantUnitaireTaxe) {
        $this->montantUnitaireTaxe = $montantUnitaireTaxe;
        return $this;
    }

    /**
     * Set the mot cle dans pied.
     *
     * @param string $motCleDansPied The mot cle dans pied.
     */
    public function setMotCleDansPied($motCleDansPied) {
        $this->motCleDansPied = $motCleDansPied;
        return $this;
    }

    /**
     * Set the no chrono preparation.
     *
     * @param int $noChronoPreparation The no chrono preparation.
     */
    public function setNoChronoPreparation($noChronoPreparation) {
        $this->noChronoPreparation = $noChronoPreparation;
        return $this;
    }

    /**
     * Set the no ligne ori.
     *
     * @param int $noLigneOri The no ligne ori.
     */
    public function setNoLigneOri($noLigneOri) {
        $this->noLigneOri = $noLigneOri;
        return $this;
    }

    /**
     * Set the no piece origine.
     *
     * @param string $noPieceOrigine The no piece origine.
     */
    public function setNoPieceOrigine($noPieceOrigine) {
        $this->noPieceOrigine = $noPieceOrigine;
        return $this;
    }

    /**
     * Set the numero bt.
     *
     * @param int $numeroBt The numero bt.
     */
    public function setNumeroBt($numeroBt) {
        $this->numeroBt = $numeroBt;
        return $this;
    }

    /**
     * Set the numero facture.
     *
     * @param string $numeroFacture The numero facture.
     */
    public function setNumeroFacture($numeroFacture) {
        $this->numeroFacture = $numeroFacture;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int $numeroLigne The numero ligne.
     */
    public function setNumeroLigne($numeroLigne) {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the periode preparation.
     *
     * @param DateTime|null $periodePreparation The periode preparation.
     */
    public function setPeriodePreparation(DateTime $periodePreparation = null) {
        $this->periodePreparation = $periodePreparation;
        return $this;
    }

    /**
     * Set the periode ventil marge.
     *
     * @param DateTime|null $periodeVentilMarge The periode ventil marge.
     */
    public function setPeriodeVentilMarge(DateTime $periodeVentilMarge = null) {
        $this->periodeVentilMarge = $periodeVentilMarge;
        return $this;
    }

    /**
     * Set the poste rent.
     *
     * @param string $posteRent The poste rent.
     */
    public function setPosteRent($posteRent) {
        $this->posteRent = $posteRent;
        return $this;
    }

    /**
     * Set the prix achat.
     *
     * @param float $prixAchat The prix achat.
     */
    public function setPrixAchat($prixAchat) {
        $this->prixAchat = $prixAchat;
        return $this;
    }

    /**
     * Set the prix achat bt.
     *
     * @param float $prixAchatBt The prix achat bt.
     */
    public function setPrixAchatBt($prixAchatBt) {
        $this->prixAchatBt = $prixAchatBt;
        return $this;
    }

    /**
     * Set the prix unitaire.
     *
     * @param float $prixUnitaire The prix unitaire.
     */
    public function setPrixUnitaire($prixUnitaire) {
        $this->prixUnitaire = $prixUnitaire;
        return $this;
    }

    /**
     * Set the prix unitaire pdf.
     *
     * @param float $prixUnitairePdf The prix unitaire pdf.
     */
    public function setPrixUnitairePdf($prixUnitairePdf) {
        $this->prixUnitairePdf = $prixUnitairePdf;
        return $this;
    }

    /**
     * Set the px facture.
     *
     * @param bool $pxFacture The px facture.
     */
    public function setPxFacture($pxFacture) {
        $this->pxFacture = $pxFacture;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float $quantite The quantite.
     */
    public function setQuantite($quantite) {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the ref poste cde web ft.
     *
     * @param string $refPosteCdeWebFt The ref poste cde web ft.
     */
    public function setRefPosteCdeWebFt($refPosteCdeWebFt) {
        $this->refPosteCdeWebFt = $refPosteCdeWebFt;
        return $this;
    }

    /**
     * Set the remise ligne1.
     *
     * @param float $remiseLigne1 The remise ligne1.
     */
    public function setRemiseLigne1($remiseLigne1) {
        $this->remiseLigne1 = $remiseLigne1;
        return $this;
    }

    /**
     * Set the remise ligne2.
     *
     * @param float $remiseLigne2 The remise ligne2.
     */
    public function setRemiseLigne2($remiseLigne2) {
        $this->remiseLigne2 = $remiseLigne2;
        return $this;
    }

    /**
     * Set the remise ligne3.
     *
     * @param float $remiseLigne3 The remise ligne3.
     */
    public function setRemiseLigne3($remiseLigne3) {
        $this->remiseLigne3 = $remiseLigne3;
        return $this;
    }

    /**
     * Set the taux horaire bt.
     *
     * @param float $tauxHoraireBt The taux horaire bt.
     */
    public function setTauxHoraireBt($tauxHoraireBt) {
        $this->tauxHoraireBt = $tauxHoraireBt;
        return $this;
    }

    /**
     * Set the taux tva article.
     *
     * @param float $tauxTvaArticle The taux tva article.
     */
    public function setTauxTvaArticle($tauxTvaArticle) {
        $this->tauxTvaArticle = $tauxTvaArticle;
        return $this;
    }

    /**
     * Set the taux tva taxe.
     *
     * @param float $tauxTvaTaxe The taux tva taxe.
     */
    public function setTauxTvaTaxe($tauxTvaTaxe) {
        $this->tauxTvaTaxe = $tauxTvaTaxe;
        return $this;
    }

    /**
     * Set the type piece.
     *
     * @param string $typePiece The type piece.
     */
    public function setTypePiece($typePiece) {
        $this->typePiece = $typePiece;
        return $this;
    }

    /**
     * Set the ventil marge.
     *
     * @param bool $ventilMarge The ventil marge.
     */
    public function setVentilMarge($ventilMarge) {
        $this->ventilMarge = $ventilMarge;
        return $this;
    }
}
