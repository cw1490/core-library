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
 * Factures entetes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class FacturesEntetes {

    /**
     * Ad int btq.
     *
     * @var string
     */
    private $adIntBtq;

    /**
     * Ad int bureau distributeur.
     *
     * @var string
     */
    private $adIntBureauDistributeur;

    /**
     * Ad int code pays.
     *
     * @var string
     */
    private $adIntCodePays;

    /**
     * Ad int code postal.
     *
     * @var string
     */
    private $adIntCodePostal;

    /**
     * Ad int complement.
     *
     * @var string
     */
    private $adIntComplement;

    /**
     * Ad int nom.
     *
     * @var string
     */
    private $adIntNom;

    /**
     * Ad int nom voie.
     *
     * @var string
     */
    private $adIntNomVoie;

    /**
     * Ad int num voie.
     *
     * @var string
     */
    private $adIntNumVoie;

    /**
     * Btq.
     *
     * @var string
     */
    private $btq;

    /**
     * Bureau distributeur.
     *
     * @var string
     */
    private $bureauDistributeur;

    /**
     * Civilite.
     *
     * @var string
     */
    private $civilite;

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code anal client.
     *
     * @var string
     */
    private $codeAnalClient;

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
     * Code client fact.
     *
     * @var string
     */
    private $codeClientFact;

    /**
     * Code devise.
     *
     * @var string
     */
    private $codeDevise;

    /**
     * Code factor.
     *
     * @var string
     */
    private $codeFactor;

    /**
     * Code langue designation article.
     *
     * @var string
     */
    private $codeLangueDesignationArticle;

    /**
     * Code mode reglement.
     *
     * @var string
     */
    private $codeModeReglement;

    /**
     * Code pays.
     *
     * @var string
     */
    private $codePays;

    /**
     * Code postal.
     *
     * @var string
     */
    private $codePostal;

    /**
     * Code regroupement.
     *
     * @var string
     */
    private $codeRegroupement;

    /**
     * Code representant.
     *
     * @var string
     */
    private $codeRepresentant;

    /**
     * Code tva client.
     *
     * @var string
     */
    private $codeTvaClient;

    /**
     * Code ventil client.
     *
     * @var string
     */
    private $codeVentilClient;

    /**
     * Complement.
     *
     * @var string
     */
    private $complement;

    /**
     * Date echeance.
     *
     * @var DateTime|null
     */
    private $dateEcheance;

    /**
     * Date facture.
     *
     * @var DateTime|null
     */
    private $dateFacture;

    /**
     * Date limite forcee.
     *
     * @var bool
     */
    private $dateLimiteForcee;

    /**
     * Date limite resiliation.
     *
     * @var DateTime|null
     */
    private $dateLimiteResiliation;

    /**
     * Echeance depart.
     *
     * @var string
     */
    private $echeanceDepart;

    /**
     * Echeance forcee.
     *
     * @var bool
     */
    private $echeanceForcee;

    /**
     * Echeance le.
     *
     * @var string
     */
    private $echeanceLe;

    /**
     * Echeance nb jours.
     *
     * @var int
     */
    private $echeanceNbJours;

    /**
     * Etat.
     *
     * @var string
     */
    private $etat;

    /**
     * Facture euros.
     *
     * @var bool
     */
    private $factureEuros;

    /**
     * Facture vm.
     *
     * @var bool
     */
    private $factureVm;

    /**
     * Fonction commercial.
     *
     * @var string
     */
    private $fonctionCommercial;

    /**
     * Interlocuteur.
     *
     * @var string
     */
    private $interlocuteur;

    /**
     * Lib transf cpta.
     *
     * @var string
     */
    private $libTransfCpta;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Libelle transf cpta.
     *
     * @var string
     */
    private $libelleTransfCpta;

    /**
     * Lien doc doss cpta.
     *
     * @var string
     */
    private $lienDocDossCpta;

    /**
     * Lien document.
     *
     * @var string
     */
    private $lienDocument;

    /**
     * Mention libre.
     *
     * @var string
     */
    private $mentionLibre;

    /**
     * Montant acompte.
     *
     * @var float
     */
    private $montantAcompte;

    /**
     * Montant htpx.
     *
     * @var float
     */
    private $montantHtpx;

    /**
     * Montant htvm.
     *
     * @var float
     */
    private $montantHtvm;

    /**
     * Montant ttc.
     *
     * @var float
     */
    private $montantTtc;

    /**
     * Nom client.
     *
     * @var string
     */
    private $nomClient;

    /**
     * Nom suite.
     *
     * @var string
     */
    private $nomSuite;

    /**
     * Nom suite2.
     *
     * @var string
     */
    private $nomSuite2;

    /**
     * Nom suite3.
     *
     * @var string
     */
    private $nomSuite3;

    /**
     * Nom voie.
     *
     * @var string
     */
    private $nomVoie;

    /**
     * Nombre echeances.
     *
     * @var string
     */
    private $nombreEcheances;

    /**
     * Num mandat.
     *
     * @var int
     */
    private $numMandat;

    /**
     * Num voie.
     *
     * @var string
     */
    private $numVoie;

    /**
     * Numero commande web ft.
     *
     * @var string
     */
    private $numeroCommandeWebFt;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Numero devis.
     *
     * @var string
     */
    private $numeroDevis;

    /**
     * Numero facture.
     *
     * @var string
     */
    private $numeroFacture;

    /**
     * Numero pj.
     *
     * @var int
     */
    private $numeroPj;

    /**
     * Prestation.
     *
     * @var string
     */
    private $prestation;

    /**
     * Reference1.
     *
     * @var string
     */
    private $reference1;

    /**
     * Reference2.
     *
     * @var string
     */
    private $reference2;

    /**
     * Reference3.
     *
     * @var string
     */
    private $reference3;

    /**
     * Reference4.
     *
     * @var string
     */
    private $reference4;

    /**
     * Rum.
     *
     * @var string
     */
    private $rum;

    /**
     * Saisir adresse.
     *
     * @var bool
     */
    private $saisirAdresse;

    /**
     * Soumis escompte.
     *
     * @var bool
     */
    private $soumisEscompte;

    /**
     * Soumis taxe deee.
     *
     * @var bool
     */
    private $soumisTaxeDeee;

    /**
     * Taux devise.
     *
     * @var float
     */
    private $tauxDevise;

    /**
     * Taux escompte.
     *
     * @var float
     */
    private $tauxEscompte;

    /**
     * Taux remise1.
     *
     * @var float
     */
    private $tauxRemise1;

    /**
     * Taux remise2.
     *
     * @var float
     */
    private $tauxRemise2;

    /**
     * Valeur ics.
     *
     * @var string
     */
    private $valeurIcs;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the ad int btq.
     *
     * @return string Returns the ad int btq.
     */
    public function getAdIntBtq() {
        return $this->adIntBtq;
    }

    /**
     * Get the ad int bureau distributeur.
     *
     * @return string Returns the ad int bureau distributeur.
     */
    public function getAdIntBureauDistributeur() {
        return $this->adIntBureauDistributeur;
    }

    /**
     * Get the ad int code pays.
     *
     * @return string Returns the ad int code pays.
     */
    public function getAdIntCodePays() {
        return $this->adIntCodePays;
    }

    /**
     * Get the ad int code postal.
     *
     * @return string Returns the ad int code postal.
     */
    public function getAdIntCodePostal() {
        return $this->adIntCodePostal;
    }

    /**
     * Get the ad int complement.
     *
     * @return string Returns the ad int complement.
     */
    public function getAdIntComplement() {
        return $this->adIntComplement;
    }

    /**
     * Get the ad int nom.
     *
     * @return string Returns the ad int nom.
     */
    public function getAdIntNom() {
        return $this->adIntNom;
    }

    /**
     * Get the ad int nom voie.
     *
     * @return string Returns the ad int nom voie.
     */
    public function getAdIntNomVoie() {
        return $this->adIntNomVoie;
    }

    /**
     * Get the ad int num voie.
     *
     * @return string Returns the ad int num voie.
     */
    public function getAdIntNumVoie() {
        return $this->adIntNumVoie;
    }

    /**
     * Get the btq.
     *
     * @return string Returns the btq.
     */
    public function getBtq() {
        return $this->btq;
    }

    /**
     * Get the bureau distributeur.
     *
     * @return string Returns the bureau distributeur.
     */
    public function getBureauDistributeur() {
        return $this->bureauDistributeur;
    }

    /**
     * Get the civilite.
     *
     * @return string Returns the civilite.
     */
    public function getCivilite() {
        return $this->civilite;
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
     * Get the code anal client.
     *
     * @return string Returns the code anal client.
     */
    public function getCodeAnalClient() {
        return $this->codeAnalClient;
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
     * Get the code client fact.
     *
     * @return string Returns the code client fact.
     */
    public function getCodeClientFact() {
        return $this->codeClientFact;
    }

    /**
     * Get the code devise.
     *
     * @return string Returns the code devise.
     */
    public function getCodeDevise() {
        return $this->codeDevise;
    }

    /**
     * Get the code factor.
     *
     * @return string Returns the code factor.
     */
    public function getCodeFactor() {
        return $this->codeFactor;
    }

    /**
     * Get the code langue designation article.
     *
     * @return string Returns the code langue designation article.
     */
    public function getCodeLangueDesignationArticle() {
        return $this->codeLangueDesignationArticle;
    }

    /**
     * Get the code mode reglement.
     *
     * @return string Returns the code mode reglement.
     */
    public function getCodeModeReglement() {
        return $this->codeModeReglement;
    }

    /**
     * Get the code pays.
     *
     * @return string Returns the code pays.
     */
    public function getCodePays() {
        return $this->codePays;
    }

    /**
     * Get the code postal.
     *
     * @return string Returns the code postal.
     */
    public function getCodePostal() {
        return $this->codePostal;
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
     * Get the code representant.
     *
     * @return string Returns the code representant.
     */
    public function getCodeRepresentant() {
        return $this->codeRepresentant;
    }

    /**
     * Get the code tva client.
     *
     * @return string Returns the code tva client.
     */
    public function getCodeTvaClient() {
        return $this->codeTvaClient;
    }

    /**
     * Get the code ventil client.
     *
     * @return string Returns the code ventil client.
     */
    public function getCodeVentilClient() {
        return $this->codeVentilClient;
    }

    /**
     * Get the complement.
     *
     * @return string Returns the complement.
     */
    public function getComplement() {
        return $this->complement;
    }

    /**
     * Get the date echeance.
     *
     * @return DateTime|null Returns the date echeance.
     */
    public function getDateEcheance() {
        return $this->dateEcheance;
    }

    /**
     * Get the date facture.
     *
     * @return DateTime|null Returns the date facture.
     */
    public function getDateFacture() {
        return $this->dateFacture;
    }

    /**
     * Get the date limite forcee.
     *
     * @return bool Returns the date limite forcee.
     */
    public function getDateLimiteForcee() {
        return $this->dateLimiteForcee;
    }

    /**
     * Get the date limite resiliation.
     *
     * @return DateTime|null Returns the date limite resiliation.
     */
    public function getDateLimiteResiliation() {
        return $this->dateLimiteResiliation;
    }

    /**
     * Get the echeance depart.
     *
     * @return string Returns the echeance depart.
     */
    public function getEcheanceDepart() {
        return $this->echeanceDepart;
    }

    /**
     * Get the echeance forcee.
     *
     * @return bool Returns the echeance forcee.
     */
    public function getEcheanceForcee() {
        return $this->echeanceForcee;
    }

    /**
     * Get the echeance le.
     *
     * @return string Returns the echeance le.
     */
    public function getEcheanceLe() {
        return $this->echeanceLe;
    }

    /**
     * Get the echeance nb jours.
     *
     * @return int Returns the echeance nb jours.
     */
    public function getEcheanceNbJours() {
        return $this->echeanceNbJours;
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
     * Get the facture euros.
     *
     * @return bool Returns the facture euros.
     */
    public function getFactureEuros() {
        return $this->factureEuros;
    }

    /**
     * Get the facture vm.
     *
     * @return bool Returns the facture vm.
     */
    public function getFactureVm() {
        return $this->factureVm;
    }

    /**
     * Get the fonction commercial.
     *
     * @return string Returns the fonction commercial.
     */
    public function getFonctionCommercial() {
        return $this->fonctionCommercial;
    }

    /**
     * Get the interlocuteur.
     *
     * @return string Returns the interlocuteur.
     */
    public function getInterlocuteur() {
        return $this->interlocuteur;
    }

    /**
     * Get the lib transf cpta.
     *
     * @return string Returns the lib transf cpta.
     */
    public function getLibTransfCpta() {
        return $this->libTransfCpta;
    }

    /**
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Get the libelle transf cpta.
     *
     * @return string Returns the libelle transf cpta.
     */
    public function getLibelleTransfCpta() {
        return $this->libelleTransfCpta;
    }

    /**
     * Get the lien doc doss cpta.
     *
     * @return string Returns the lien doc doss cpta.
     */
    public function getLienDocDossCpta() {
        return $this->lienDocDossCpta;
    }

    /**
     * Get the lien document.
     *
     * @return string Returns the lien document.
     */
    public function getLienDocument() {
        return $this->lienDocument;
    }

    /**
     * Get the mention libre.
     *
     * @return string Returns the mention libre.
     */
    public function getMentionLibre() {
        return $this->mentionLibre;
    }

    /**
     * Get the montant acompte.
     *
     * @return float Returns the montant acompte.
     */
    public function getMontantAcompte() {
        return $this->montantAcompte;
    }

    /**
     * Get the montant htpx.
     *
     * @return float Returns the montant htpx.
     */
    public function getMontantHtpx() {
        return $this->montantHtpx;
    }

    /**
     * Get the montant htvm.
     *
     * @return float Returns the montant htvm.
     */
    public function getMontantHtvm() {
        return $this->montantHtvm;
    }

    /**
     * Get the montant ttc.
     *
     * @return float Returns the montant ttc.
     */
    public function getMontantTtc() {
        return $this->montantTtc;
    }

    /**
     * Get the nom client.
     *
     * @return string Returns the nom client.
     */
    public function getNomClient() {
        return $this->nomClient;
    }

    /**
     * Get the nom suite.
     *
     * @return string Returns the nom suite.
     */
    public function getNomSuite() {
        return $this->nomSuite;
    }

    /**
     * Get the nom suite2.
     *
     * @return string Returns the nom suite2.
     */
    public function getNomSuite2() {
        return $this->nomSuite2;
    }

    /**
     * Get the nom suite3.
     *
     * @return string Returns the nom suite3.
     */
    public function getNomSuite3() {
        return $this->nomSuite3;
    }

    /**
     * Get the nom voie.
     *
     * @return string Returns the nom voie.
     */
    public function getNomVoie() {
        return $this->nomVoie;
    }

    /**
     * Get the nombre echeances.
     *
     * @return string Returns the nombre echeances.
     */
    public function getNombreEcheances() {
        return $this->nombreEcheances;
    }

    /**
     * Get the num mandat.
     *
     * @return int Returns the num mandat.
     */
    public function getNumMandat() {
        return $this->numMandat;
    }

    /**
     * Get the num voie.
     *
     * @return string Returns the num voie.
     */
    public function getNumVoie() {
        return $this->numVoie;
    }

    /**
     * Get the numero commande web ft.
     *
     * @return string Returns the numero commande web ft.
     */
    public function getNumeroCommandeWebFt() {
        return $this->numeroCommandeWebFt;
    }

    /**
     * Get the numero compte.
     *
     * @return string Returns the numero compte.
     */
    public function getNumeroCompte() {
        return $this->numeroCompte;
    }

    /**
     * Get the numero devis.
     *
     * @return string Returns the numero devis.
     */
    public function getNumeroDevis() {
        return $this->numeroDevis;
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
     * Get the numero pj.
     *
     * @return int Returns the numero pj.
     */
    public function getNumeroPj() {
        return $this->numeroPj;
    }

    /**
     * Get the prestation.
     *
     * @return string Returns the prestation.
     */
    public function getPrestation() {
        return $this->prestation;
    }

    /**
     * Get the reference1.
     *
     * @return string Returns the reference1.
     */
    public function getReference1() {
        return $this->reference1;
    }

    /**
     * Get the reference2.
     *
     * @return string Returns the reference2.
     */
    public function getReference2() {
        return $this->reference2;
    }

    /**
     * Get the reference3.
     *
     * @return string Returns the reference3.
     */
    public function getReference3() {
        return $this->reference3;
    }

    /**
     * Get the reference4.
     *
     * @return string Returns the reference4.
     */
    public function getReference4() {
        return $this->reference4;
    }

    /**
     * Get the rum.
     *
     * @return string Returns the rum.
     */
    public function getRum() {
        return $this->rum;
    }

    /**
     * Get the saisir adresse.
     *
     * @return bool Returns the saisir adresse.
     */
    public function getSaisirAdresse() {
        return $this->saisirAdresse;
    }

    /**
     * Get the soumis escompte.
     *
     * @return bool Returns the soumis escompte.
     */
    public function getSoumisEscompte() {
        return $this->soumisEscompte;
    }

    /**
     * Get the soumis taxe deee.
     *
     * @return bool Returns the soumis taxe deee.
     */
    public function getSoumisTaxeDeee() {
        return $this->soumisTaxeDeee;
    }

    /**
     * Get the taux devise.
     *
     * @return float Returns the taux devise.
     */
    public function getTauxDevise() {
        return $this->tauxDevise;
    }

    /**
     * Get the taux escompte.
     *
     * @return float Returns the taux escompte.
     */
    public function getTauxEscompte() {
        return $this->tauxEscompte;
    }

    /**
     * Get the taux remise1.
     *
     * @return float Returns the taux remise1.
     */
    public function getTauxRemise1() {
        return $this->tauxRemise1;
    }

    /**
     * Get the taux remise2.
     *
     * @return float Returns the taux remise2.
     */
    public function getTauxRemise2() {
        return $this->tauxRemise2;
    }

    /**
     * Get the valeur ics.
     *
     * @return string Returns the valeur ics.
     */
    public function getValeurIcs() {
        return $this->valeurIcs;
    }

    /**
     * Set the ad int btq.
     *
     * @param string $adIntBtq The ad int btq.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setAdIntBtq($adIntBtq) {
        $this->adIntBtq = $adIntBtq;
        return $this;
    }

    /**
     * Set the ad int bureau distributeur.
     *
     * @param string $adIntBureauDistributeur The ad int bureau distributeur.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setAdIntBureauDistributeur($adIntBureauDistributeur) {
        $this->adIntBureauDistributeur = $adIntBureauDistributeur;
        return $this;
    }

    /**
     * Set the ad int code pays.
     *
     * @param string $adIntCodePays The ad int code pays.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setAdIntCodePays($adIntCodePays) {
        $this->adIntCodePays = $adIntCodePays;
        return $this;
    }

    /**
     * Set the ad int code postal.
     *
     * @param string $adIntCodePostal The ad int code postal.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setAdIntCodePostal($adIntCodePostal) {
        $this->adIntCodePostal = $adIntCodePostal;
        return $this;
    }

    /**
     * Set the ad int complement.
     *
     * @param string $adIntComplement The ad int complement.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setAdIntComplement($adIntComplement) {
        $this->adIntComplement = $adIntComplement;
        return $this;
    }

    /**
     * Set the ad int nom.
     *
     * @param string $adIntNom The ad int nom.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setAdIntNom($adIntNom) {
        $this->adIntNom = $adIntNom;
        return $this;
    }

    /**
     * Set the ad int nom voie.
     *
     * @param string $adIntNomVoie The ad int nom voie.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setAdIntNomVoie($adIntNomVoie) {
        $this->adIntNomVoie = $adIntNomVoie;
        return $this;
    }

    /**
     * Set the ad int num voie.
     *
     * @param string $adIntNumVoie The ad int num voie.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setAdIntNumVoie($adIntNumVoie) {
        $this->adIntNumVoie = $adIntNumVoie;
        return $this;
    }

    /**
     * Set the btq.
     *
     * @param string $btq The btq.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setBtq($btq) {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string $bureauDistributeur The bureau distributeur.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setBureauDistributeur($bureauDistributeur) {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the civilite.
     *
     * @param string $civilite The civilite.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setCivilite($civilite) {
        $this->civilite = $civilite;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code anal client.
     *
     * @param string $codeAnalClient The code anal client.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setCodeAnalClient($codeAnalClient) {
        $this->codeAnalClient = $codeAnalClient;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code client fact.
     *
     * @param string $codeClientFact The code client fact.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setCodeClientFact($codeClientFact) {
        $this->codeClientFact = $codeClientFact;
        return $this;
    }

    /**
     * Set the code devise.
     *
     * @param string $codeDevise The code devise.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setCodeDevise($codeDevise) {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the code factor.
     *
     * @param string $codeFactor The code factor.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setCodeFactor($codeFactor) {
        $this->codeFactor = $codeFactor;
        return $this;
    }

    /**
     * Set the code langue designation article.
     *
     * @param string $codeLangueDesignationArticle The code langue designation article.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setCodeLangueDesignationArticle($codeLangueDesignationArticle) {
        $this->codeLangueDesignationArticle = $codeLangueDesignationArticle;
        return $this;
    }

    /**
     * Set the code mode reglement.
     *
     * @param string $codeModeReglement The code mode reglement.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setCodeModeReglement($codeModeReglement) {
        $this->codeModeReglement = $codeModeReglement;
        return $this;
    }

    /**
     * Set the code pays.
     *
     * @param string $codePays The code pays.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setCodePays($codePays) {
        $this->codePays = $codePays;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string $codePostal The code postal.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string $codeRegroupement The code regroupement.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setCodeRegroupement($codeRegroupement) {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the code representant.
     *
     * @param string $codeRepresentant The code representant.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setCodeRepresentant($codeRepresentant) {
        $this->codeRepresentant = $codeRepresentant;
        return $this;
    }

    /**
     * Set the code tva client.
     *
     * @param string $codeTvaClient The code tva client.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setCodeTvaClient($codeTvaClient) {
        $this->codeTvaClient = $codeTvaClient;
        return $this;
    }

    /**
     * Set the code ventil client.
     *
     * @param string $codeVentilClient The code ventil client.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setCodeVentilClient($codeVentilClient) {
        $this->codeVentilClient = $codeVentilClient;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string $complement The complement.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setComplement($complement) {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the date echeance.
     *
     * @param DateTime|null $dateEcheance The date echeance.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setDateEcheance(DateTime $dateEcheance = null) {
        $this->dateEcheance = $dateEcheance;
        return $this;
    }

    /**
     * Set the date facture.
     *
     * @param DateTime|null $dateFacture The date facture.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setDateFacture(DateTime $dateFacture = null) {
        $this->dateFacture = $dateFacture;
        return $this;
    }

    /**
     * Set the date limite forcee.
     *
     * @param bool $dateLimiteForcee The date limite forcee.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setDateLimiteForcee($dateLimiteForcee) {
        $this->dateLimiteForcee = $dateLimiteForcee;
        return $this;
    }

    /**
     * Set the date limite resiliation.
     *
     * @param DateTime|null $dateLimiteResiliation The date limite resiliation.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setDateLimiteResiliation(DateTime $dateLimiteResiliation = null) {
        $this->dateLimiteResiliation = $dateLimiteResiliation;
        return $this;
    }

    /**
     * Set the echeance depart.
     *
     * @param string $echeanceDepart The echeance depart.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setEcheanceDepart($echeanceDepart) {
        $this->echeanceDepart = $echeanceDepart;
        return $this;
    }

    /**
     * Set the echeance forcee.
     *
     * @param bool $echeanceForcee The echeance forcee.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setEcheanceForcee($echeanceForcee) {
        $this->echeanceForcee = $echeanceForcee;
        return $this;
    }

    /**
     * Set the echeance le.
     *
     * @param string $echeanceLe The echeance le.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setEcheanceLe($echeanceLe) {
        $this->echeanceLe = $echeanceLe;
        return $this;
    }

    /**
     * Set the echeance nb jours.
     *
     * @param int $echeanceNbJours The echeance nb jours.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setEcheanceNbJours($echeanceNbJours) {
        $this->echeanceNbJours = $echeanceNbJours;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the facture euros.
     *
     * @param bool $factureEuros The facture euros.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setFactureEuros($factureEuros) {
        $this->factureEuros = $factureEuros;
        return $this;
    }

    /**
     * Set the facture vm.
     *
     * @param bool $factureVm The facture vm.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setFactureVm($factureVm) {
        $this->factureVm = $factureVm;
        return $this;
    }

    /**
     * Set the fonction commercial.
     *
     * @param string $fonctionCommercial The fonction commercial.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setFonctionCommercial($fonctionCommercial) {
        $this->fonctionCommercial = $fonctionCommercial;
        return $this;
    }

    /**
     * Set the interlocuteur.
     *
     * @param string $interlocuteur The interlocuteur.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setInterlocuteur($interlocuteur) {
        $this->interlocuteur = $interlocuteur;
        return $this;
    }

    /**
     * Set the lib transf cpta.
     *
     * @param string $libTransfCpta The lib transf cpta.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setLibTransfCpta($libTransfCpta) {
        $this->libTransfCpta = $libTransfCpta;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the libelle transf cpta.
     *
     * @param string $libelleTransfCpta The libelle transf cpta.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setLibelleTransfCpta($libelleTransfCpta) {
        $this->libelleTransfCpta = $libelleTransfCpta;
        return $this;
    }

    /**
     * Set the lien doc doss cpta.
     *
     * @param string $lienDocDossCpta The lien doc doss cpta.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setLienDocDossCpta($lienDocDossCpta) {
        $this->lienDocDossCpta = $lienDocDossCpta;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string $lienDocument The lien document.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setLienDocument($lienDocument) {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the mention libre.
     *
     * @param string $mentionLibre The mention libre.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setMentionLibre($mentionLibre) {
        $this->mentionLibre = $mentionLibre;
        return $this;
    }

    /**
     * Set the montant acompte.
     *
     * @param float $montantAcompte The montant acompte.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setMontantAcompte($montantAcompte) {
        $this->montantAcompte = $montantAcompte;
        return $this;
    }

    /**
     * Set the montant htpx.
     *
     * @param float $montantHtpx The montant htpx.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setMontantHtpx($montantHtpx) {
        $this->montantHtpx = $montantHtpx;
        return $this;
    }

    /**
     * Set the montant htvm.
     *
     * @param float $montantHtvm The montant htvm.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setMontantHtvm($montantHtvm) {
        $this->montantHtvm = $montantHtvm;
        return $this;
    }

    /**
     * Set the montant ttc.
     *
     * @param float $montantTtc The montant ttc.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setMontantTtc($montantTtc) {
        $this->montantTtc = $montantTtc;
        return $this;
    }

    /**
     * Set the nom client.
     *
     * @param string $nomClient The nom client.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setNomClient($nomClient) {
        $this->nomClient = $nomClient;
        return $this;
    }

    /**
     * Set the nom suite.
     *
     * @param string $nomSuite The nom suite.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setNomSuite($nomSuite) {
        $this->nomSuite = $nomSuite;
        return $this;
    }

    /**
     * Set the nom suite2.
     *
     * @param string $nomSuite2 The nom suite2.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setNomSuite2($nomSuite2) {
        $this->nomSuite2 = $nomSuite2;
        return $this;
    }

    /**
     * Set the nom suite3.
     *
     * @param string $nomSuite3 The nom suite3.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setNomSuite3($nomSuite3) {
        $this->nomSuite3 = $nomSuite3;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string $nomVoie The nom voie.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setNomVoie($nomVoie) {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the nombre echeances.
     *
     * @param string $nombreEcheances The nombre echeances.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setNombreEcheances($nombreEcheances) {
        $this->nombreEcheances = $nombreEcheances;
        return $this;
    }

    /**
     * Set the num mandat.
     *
     * @param int $numMandat The num mandat.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setNumMandat($numMandat) {
        $this->numMandat = $numMandat;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string $numVoie The num voie.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setNumVoie($numVoie) {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the numero commande web ft.
     *
     * @param string $numeroCommandeWebFt The numero commande web ft.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setNumeroCommandeWebFt($numeroCommandeWebFt) {
        $this->numeroCommandeWebFt = $numeroCommandeWebFt;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the numero devis.
     *
     * @param string $numeroDevis The numero devis.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setNumeroDevis($numeroDevis) {
        $this->numeroDevis = $numeroDevis;
        return $this;
    }

    /**
     * Set the numero facture.
     *
     * @param string $numeroFacture The numero facture.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setNumeroFacture($numeroFacture) {
        $this->numeroFacture = $numeroFacture;
        return $this;
    }

    /**
     * Set the numero pj.
     *
     * @param int $numeroPj The numero pj.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setNumeroPj($numeroPj) {
        $this->numeroPj = $numeroPj;
        return $this;
    }

    /**
     * Set the prestation.
     *
     * @param string $prestation The prestation.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setPrestation($prestation) {
        $this->prestation = $prestation;
        return $this;
    }

    /**
     * Set the reference1.
     *
     * @param string $reference1 The reference1.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setReference1($reference1) {
        $this->reference1 = $reference1;
        return $this;
    }

    /**
     * Set the reference2.
     *
     * @param string $reference2 The reference2.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setReference2($reference2) {
        $this->reference2 = $reference2;
        return $this;
    }

    /**
     * Set the reference3.
     *
     * @param string $reference3 The reference3.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setReference3($reference3) {
        $this->reference3 = $reference3;
        return $this;
    }

    /**
     * Set the reference4.
     *
     * @param string $reference4 The reference4.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setReference4($reference4) {
        $this->reference4 = $reference4;
        return $this;
    }

    /**
     * Set the rum.
     *
     * @param string $rum The rum.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setRum($rum) {
        $this->rum = $rum;
        return $this;
    }

    /**
     * Set the saisir adresse.
     *
     * @param bool $saisirAdresse The saisir adresse.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setSaisirAdresse($saisirAdresse) {
        $this->saisirAdresse = $saisirAdresse;
        return $this;
    }

    /**
     * Set the soumis escompte.
     *
     * @param bool $soumisEscompte The soumis escompte.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setSoumisEscompte($soumisEscompte) {
        $this->soumisEscompte = $soumisEscompte;
        return $this;
    }

    /**
     * Set the soumis taxe deee.
     *
     * @param bool $soumisTaxeDeee The soumis taxe deee.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setSoumisTaxeDeee($soumisTaxeDeee) {
        $this->soumisTaxeDeee = $soumisTaxeDeee;
        return $this;
    }

    /**
     * Set the taux devise.
     *
     * @param float $tauxDevise The taux devise.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setTauxDevise($tauxDevise) {
        $this->tauxDevise = $tauxDevise;
        return $this;
    }

    /**
     * Set the taux escompte.
     *
     * @param float $tauxEscompte The taux escompte.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setTauxEscompte($tauxEscompte) {
        $this->tauxEscompte = $tauxEscompte;
        return $this;
    }

    /**
     * Set the taux remise1.
     *
     * @param float $tauxRemise1 The taux remise1.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setTauxRemise1($tauxRemise1) {
        $this->tauxRemise1 = $tauxRemise1;
        return $this;
    }

    /**
     * Set the taux remise2.
     *
     * @param float $tauxRemise2 The taux remise2.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setTauxRemise2($tauxRemise2) {
        $this->tauxRemise2 = $tauxRemise2;
        return $this;
    }

    /**
     * Set the valeur ics.
     *
     * @param string $valeurIcs The valeur ics.
     * @return FacturesEntetes Returns this Factures entetes.
     */
    public function setValeurIcs($valeurIcs) {
        $this->valeurIcs = $valeurIcs;
        return $this;
    }
}
