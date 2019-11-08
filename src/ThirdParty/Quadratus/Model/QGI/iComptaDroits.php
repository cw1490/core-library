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
 * i compta droits.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class iComptaDroits {

    /**
     * Code collab messages.
     *
     * @var string
     */
    private $codeCollabMessages;

    /**
     * Code user.
     *
     * @var string
     */
    private $codeUser;

    /**
     * Date limite visu.
     *
     * @var DateTime|null
     */
    private $dateLimiteVisu;

    /**
     * Droit clients.
     *
     * @var string
     */
    private $droitClients;

    /**
     * Droit fournisseurs.
     *
     * @var string
     */
    private $droitFournisseurs;

    /**
     * Droit generaux.
     *
     * @var string
     */
    private $droitGeneraux;

    /**
     * Droit modif compte.
     *
     * @var string
     */
    private $droitModifCompte;

    /**
     * Espace client.
     *
     * @var bool
     */
    private $espaceClient;

    /**
     * Fct balance client.
     *
     * @var bool
     */
    private $fctBalanceClient;

    /**
     * Fct balance fournisseur.
     *
     * @var bool
     */
    private $fctBalanceFournisseur;

    /**
     * Fct balance generale.
     *
     * @var bool
     */
    private $fctBalanceGenerale;

    /**
     * Fct consult da.
     *
     * @var bool
     */
    private $fctConsultDa;

    /**
     * Fct consult dc.
     *
     * @var bool
     */
    private $fctConsultDc;

    /**
     * Fct declare tva.
     *
     * @var bool
     */
    private $fctDeclareTva;

    /**
     * Fct delettrage.
     *
     * @var bool
     */
    private $fctDelettrage;

    /**
     * Fct edition journaux.
     *
     * @var bool
     */
    private $fctEditionJournaux;

    /**
     * Fct interrogation cpt.
     *
     * @var bool
     */
    private $fctInterrogationCpt;

    /**
     * Fct lettrage.
     *
     * @var bool
     */
    private $fctLettrage;

    /**
     * Fct modif ecriture.
     *
     * @var bool
     */
    private $fctModifEcriture;

    /**
     * Fct rapproch banq.
     *
     * @var bool
     */
    private $fctRapprochBanq;

    /**
     * Fct saisie achats.
     *
     * @var bool
     */
    private $fctSaisieAchats;

    /**
     * Fct saisie banques.
     *
     * @var bool
     */
    private $fctSaisieBanques;

    /**
     * Fct saisie caisse orientee.
     *
     * @var int
     */
    private $fctSaisieCaisseOrientee;

    /**
     * Fct saisie etebac.
     *
     * @var bool
     */
    private $fctSaisieEtebac;

    /**
     * Fct saisie standard.
     *
     * @var bool
     */
    private $fctSaisieStandard;

    /**
     * Fct saisie trame.
     *
     * @var int
     */
    private $fctSaisieTrame;

    /**
     * Fct saisie ventes.
     *
     * @var bool
     */
    private $fctSaisieVentes;

    /**
     * Fct suppr ecriture.
     *
     * @var bool
     */
    private $fctSupprEcriture;

    /**
     * Fct table bord.
     *
     * @var bool
     */
    private $fctTableBord;

    /**
     * Flag.
     *
     * @var string
     */
    private $flag;

    /**
     * Niveau droit clients.
     *
     * @var string
     */
    private $niveauDroitClients;

    /**
     * Niveau droit fournisseurs.
     *
     * @var string
     */
    private $niveauDroitFournisseurs;

    /**
     * Niveau droit generaux.
     *
     * @var string
     */
    private $niveauDroitGeneraux;

    /**
     * No doss cpta.
     *
     * @var string
     */
    private $noDossCpta;

    /**
     * Nom user.
     *
     * @var string
     */
    private $nomUser;

    /**
     * Numi key.
     *
     * @var string
     */
    private $numiKey;

    /**
     * Password.
     *
     * @var string
     */
    private $password;

    /**
     * Periode saisie deb.
     *
     * @var DateTime|null
     */
    private $periodeSaisieDeb;

    /**
     * Periode saisie fin.
     *
     * @var DateTime|null
     */
    private $periodeSaisieFin;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code collab messages.
     *
     * @return string Returns the code collab messages.
     */
    public function getCodeCollabMessages() {
        return $this->codeCollabMessages;
    }

    /**
     * Get the code user.
     *
     * @return string Returns the code user.
     */
    public function getCodeUser() {
        return $this->codeUser;
    }

    /**
     * Get the date limite visu.
     *
     * @return DateTime|null Returns the date limite visu.
     */
    public function getDateLimiteVisu() {
        return $this->dateLimiteVisu;
    }

    /**
     * Get the droit clients.
     *
     * @return string Returns the droit clients.
     */
    public function getDroitClients() {
        return $this->droitClients;
    }

    /**
     * Get the droit fournisseurs.
     *
     * @return string Returns the droit fournisseurs.
     */
    public function getDroitFournisseurs() {
        return $this->droitFournisseurs;
    }

    /**
     * Get the droit generaux.
     *
     * @return string Returns the droit generaux.
     */
    public function getDroitGeneraux() {
        return $this->droitGeneraux;
    }

    /**
     * Get the droit modif compte.
     *
     * @return string Returns the droit modif compte.
     */
    public function getDroitModifCompte() {
        return $this->droitModifCompte;
    }

    /**
     * Get the espace client.
     *
     * @return bool Returns the espace client.
     */
    public function getEspaceClient() {
        return $this->espaceClient;
    }

    /**
     * Get the fct balance client.
     *
     * @return bool Returns the fct balance client.
     */
    public function getFctBalanceClient() {
        return $this->fctBalanceClient;
    }

    /**
     * Get the fct balance fournisseur.
     *
     * @return bool Returns the fct balance fournisseur.
     */
    public function getFctBalanceFournisseur() {
        return $this->fctBalanceFournisseur;
    }

    /**
     * Get the fct balance generale.
     *
     * @return bool Returns the fct balance generale.
     */
    public function getFctBalanceGenerale() {
        return $this->fctBalanceGenerale;
    }

    /**
     * Get the fct consult da.
     *
     * @return bool Returns the fct consult da.
     */
    public function getFctConsultDa() {
        return $this->fctConsultDa;
    }

    /**
     * Get the fct consult dc.
     *
     * @return bool Returns the fct consult dc.
     */
    public function getFctConsultDc() {
        return $this->fctConsultDc;
    }

    /**
     * Get the fct declare tva.
     *
     * @return bool Returns the fct declare tva.
     */
    public function getFctDeclareTva() {
        return $this->fctDeclareTva;
    }

    /**
     * Get the fct delettrage.
     *
     * @return bool Returns the fct delettrage.
     */
    public function getFctDelettrage() {
        return $this->fctDelettrage;
    }

    /**
     * Get the fct edition journaux.
     *
     * @return bool Returns the fct edition journaux.
     */
    public function getFctEditionJournaux() {
        return $this->fctEditionJournaux;
    }

    /**
     * Get the fct interrogation cpt.
     *
     * @return bool Returns the fct interrogation cpt.
     */
    public function getFctInterrogationCpt() {
        return $this->fctInterrogationCpt;
    }

    /**
     * Get the fct lettrage.
     *
     * @return bool Returns the fct lettrage.
     */
    public function getFctLettrage() {
        return $this->fctLettrage;
    }

    /**
     * Get the fct modif ecriture.
     *
     * @return bool Returns the fct modif ecriture.
     */
    public function getFctModifEcriture() {
        return $this->fctModifEcriture;
    }

    /**
     * Get the fct rapproch banq.
     *
     * @return bool Returns the fct rapproch banq.
     */
    public function getFctRapprochBanq() {
        return $this->fctRapprochBanq;
    }

    /**
     * Get the fct saisie achats.
     *
     * @return bool Returns the fct saisie achats.
     */
    public function getFctSaisieAchats() {
        return $this->fctSaisieAchats;
    }

    /**
     * Get the fct saisie banques.
     *
     * @return bool Returns the fct saisie banques.
     */
    public function getFctSaisieBanques() {
        return $this->fctSaisieBanques;
    }

    /**
     * Get the fct saisie caisse orientee.
     *
     * @return int Returns the fct saisie caisse orientee.
     */
    public function getFctSaisieCaisseOrientee() {
        return $this->fctSaisieCaisseOrientee;
    }

    /**
     * Get the fct saisie etebac.
     *
     * @return bool Returns the fct saisie etebac.
     */
    public function getFctSaisieEtebac() {
        return $this->fctSaisieEtebac;
    }

    /**
     * Get the fct saisie standard.
     *
     * @return bool Returns the fct saisie standard.
     */
    public function getFctSaisieStandard() {
        return $this->fctSaisieStandard;
    }

    /**
     * Get the fct saisie trame.
     *
     * @return int Returns the fct saisie trame.
     */
    public function getFctSaisieTrame() {
        return $this->fctSaisieTrame;
    }

    /**
     * Get the fct saisie ventes.
     *
     * @return bool Returns the fct saisie ventes.
     */
    public function getFctSaisieVentes() {
        return $this->fctSaisieVentes;
    }

    /**
     * Get the fct suppr ecriture.
     *
     * @return bool Returns the fct suppr ecriture.
     */
    public function getFctSupprEcriture() {
        return $this->fctSupprEcriture;
    }

    /**
     * Get the fct table bord.
     *
     * @return bool Returns the fct table bord.
     */
    public function getFctTableBord() {
        return $this->fctTableBord;
    }

    /**
     * Get the flag.
     *
     * @return string Returns the flag.
     */
    public function getFlag() {
        return $this->flag;
    }

    /**
     * Get the niveau droit clients.
     *
     * @return string Returns the niveau droit clients.
     */
    public function getNiveauDroitClients() {
        return $this->niveauDroitClients;
    }

    /**
     * Get the niveau droit fournisseurs.
     *
     * @return string Returns the niveau droit fournisseurs.
     */
    public function getNiveauDroitFournisseurs() {
        return $this->niveauDroitFournisseurs;
    }

    /**
     * Get the niveau droit generaux.
     *
     * @return string Returns the niveau droit generaux.
     */
    public function getNiveauDroitGeneraux() {
        return $this->niveauDroitGeneraux;
    }

    /**
     * Get the no doss cpta.
     *
     * @return string Returns the no doss cpta.
     */
    public function getNoDossCpta() {
        return $this->noDossCpta;
    }

    /**
     * Get the nom user.
     *
     * @return string Returns the nom user.
     */
    public function getNomUser() {
        return $this->nomUser;
    }

    /**
     * Get the numi key.
     *
     * @return string Returns the numi key.
     */
    public function getNumiKey() {
        return $this->numiKey;
    }

    /**
     * Get the password.
     *
     * @return string Returns the password.
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Get the periode saisie deb.
     *
     * @return DateTime|null Returns the periode saisie deb.
     */
    public function getPeriodeSaisieDeb() {
        return $this->periodeSaisieDeb;
    }

    /**
     * Get the periode saisie fin.
     *
     * @return DateTime|null Returns the periode saisie fin.
     */
    public function getPeriodeSaisieFin() {
        return $this->periodeSaisieFin;
    }

    /**
     * Set the code collab messages.
     *
     * @param string $codeCollabMessages The code collab messages.
     */
    public function setCodeCollabMessages($codeCollabMessages) {
        $this->codeCollabMessages = $codeCollabMessages;
        return $this;
    }

    /**
     * Set the code user.
     *
     * @param string $codeUser The code user.
     */
    public function setCodeUser($codeUser) {
        $this->codeUser = $codeUser;
        return $this;
    }

    /**
     * Set the date limite visu.
     *
     * @param DateTime|null $dateLimiteVisu The date limite visu.
     */
    public function setDateLimiteVisu(DateTime $dateLimiteVisu = null) {
        $this->dateLimiteVisu = $dateLimiteVisu;
        return $this;
    }

    /**
     * Set the droit clients.
     *
     * @param string $droitClients The droit clients.
     */
    public function setDroitClients($droitClients) {
        $this->droitClients = $droitClients;
        return $this;
    }

    /**
     * Set the droit fournisseurs.
     *
     * @param string $droitFournisseurs The droit fournisseurs.
     */
    public function setDroitFournisseurs($droitFournisseurs) {
        $this->droitFournisseurs = $droitFournisseurs;
        return $this;
    }

    /**
     * Set the droit generaux.
     *
     * @param string $droitGeneraux The droit generaux.
     */
    public function setDroitGeneraux($droitGeneraux) {
        $this->droitGeneraux = $droitGeneraux;
        return $this;
    }

    /**
     * Set the droit modif compte.
     *
     * @param string $droitModifCompte The droit modif compte.
     */
    public function setDroitModifCompte($droitModifCompte) {
        $this->droitModifCompte = $droitModifCompte;
        return $this;
    }

    /**
     * Set the espace client.
     *
     * @param bool $espaceClient The espace client.
     */
    public function setEspaceClient($espaceClient) {
        $this->espaceClient = $espaceClient;
        return $this;
    }

    /**
     * Set the fct balance client.
     *
     * @param bool $fctBalanceClient The fct balance client.
     */
    public function setFctBalanceClient($fctBalanceClient) {
        $this->fctBalanceClient = $fctBalanceClient;
        return $this;
    }

    /**
     * Set the fct balance fournisseur.
     *
     * @param bool $fctBalanceFournisseur The fct balance fournisseur.
     */
    public function setFctBalanceFournisseur($fctBalanceFournisseur) {
        $this->fctBalanceFournisseur = $fctBalanceFournisseur;
        return $this;
    }

    /**
     * Set the fct balance generale.
     *
     * @param bool $fctBalanceGenerale The fct balance generale.
     */
    public function setFctBalanceGenerale($fctBalanceGenerale) {
        $this->fctBalanceGenerale = $fctBalanceGenerale;
        return $this;
    }

    /**
     * Set the fct consult da.
     *
     * @param bool $fctConsultDa The fct consult da.
     */
    public function setFctConsultDa($fctConsultDa) {
        $this->fctConsultDa = $fctConsultDa;
        return $this;
    }

    /**
     * Set the fct consult dc.
     *
     * @param bool $fctConsultDc The fct consult dc.
     */
    public function setFctConsultDc($fctConsultDc) {
        $this->fctConsultDc = $fctConsultDc;
        return $this;
    }

    /**
     * Set the fct declare tva.
     *
     * @param bool $fctDeclareTva The fct declare tva.
     */
    public function setFctDeclareTva($fctDeclareTva) {
        $this->fctDeclareTva = $fctDeclareTva;
        return $this;
    }

    /**
     * Set the fct delettrage.
     *
     * @param bool $fctDelettrage The fct delettrage.
     */
    public function setFctDelettrage($fctDelettrage) {
        $this->fctDelettrage = $fctDelettrage;
        return $this;
    }

    /**
     * Set the fct edition journaux.
     *
     * @param bool $fctEditionJournaux The fct edition journaux.
     */
    public function setFctEditionJournaux($fctEditionJournaux) {
        $this->fctEditionJournaux = $fctEditionJournaux;
        return $this;
    }

    /**
     * Set the fct interrogation cpt.
     *
     * @param bool $fctInterrogationCpt The fct interrogation cpt.
     */
    public function setFctInterrogationCpt($fctInterrogationCpt) {
        $this->fctInterrogationCpt = $fctInterrogationCpt;
        return $this;
    }

    /**
     * Set the fct lettrage.
     *
     * @param bool $fctLettrage The fct lettrage.
     */
    public function setFctLettrage($fctLettrage) {
        $this->fctLettrage = $fctLettrage;
        return $this;
    }

    /**
     * Set the fct modif ecriture.
     *
     * @param bool $fctModifEcriture The fct modif ecriture.
     */
    public function setFctModifEcriture($fctModifEcriture) {
        $this->fctModifEcriture = $fctModifEcriture;
        return $this;
    }

    /**
     * Set the fct rapproch banq.
     *
     * @param bool $fctRapprochBanq The fct rapproch banq.
     */
    public function setFctRapprochBanq($fctRapprochBanq) {
        $this->fctRapprochBanq = $fctRapprochBanq;
        return $this;
    }

    /**
     * Set the fct saisie achats.
     *
     * @param bool $fctSaisieAchats The fct saisie achats.
     */
    public function setFctSaisieAchats($fctSaisieAchats) {
        $this->fctSaisieAchats = $fctSaisieAchats;
        return $this;
    }

    /**
     * Set the fct saisie banques.
     *
     * @param bool $fctSaisieBanques The fct saisie banques.
     */
    public function setFctSaisieBanques($fctSaisieBanques) {
        $this->fctSaisieBanques = $fctSaisieBanques;
        return $this;
    }

    /**
     * Set the fct saisie caisse orientee.
     *
     * @param int $fctSaisieCaisseOrientee The fct saisie caisse orientee.
     */
    public function setFctSaisieCaisseOrientee($fctSaisieCaisseOrientee) {
        $this->fctSaisieCaisseOrientee = $fctSaisieCaisseOrientee;
        return $this;
    }

    /**
     * Set the fct saisie etebac.
     *
     * @param bool $fctSaisieEtebac The fct saisie etebac.
     */
    public function setFctSaisieEtebac($fctSaisieEtebac) {
        $this->fctSaisieEtebac = $fctSaisieEtebac;
        return $this;
    }

    /**
     * Set the fct saisie standard.
     *
     * @param bool $fctSaisieStandard The fct saisie standard.
     */
    public function setFctSaisieStandard($fctSaisieStandard) {
        $this->fctSaisieStandard = $fctSaisieStandard;
        return $this;
    }

    /**
     * Set the fct saisie trame.
     *
     * @param int $fctSaisieTrame The fct saisie trame.
     */
    public function setFctSaisieTrame($fctSaisieTrame) {
        $this->fctSaisieTrame = $fctSaisieTrame;
        return $this;
    }

    /**
     * Set the fct saisie ventes.
     *
     * @param bool $fctSaisieVentes The fct saisie ventes.
     */
    public function setFctSaisieVentes($fctSaisieVentes) {
        $this->fctSaisieVentes = $fctSaisieVentes;
        return $this;
    }

    /**
     * Set the fct suppr ecriture.
     *
     * @param bool $fctSupprEcriture The fct suppr ecriture.
     */
    public function setFctSupprEcriture($fctSupprEcriture) {
        $this->fctSupprEcriture = $fctSupprEcriture;
        return $this;
    }

    /**
     * Set the fct table bord.
     *
     * @param bool $fctTableBord The fct table bord.
     */
    public function setFctTableBord($fctTableBord) {
        $this->fctTableBord = $fctTableBord;
        return $this;
    }

    /**
     * Set the flag.
     *
     * @param string $flag The flag.
     */
    public function setFlag($flag) {
        $this->flag = $flag;
        return $this;
    }

    /**
     * Set the niveau droit clients.
     *
     * @param string $niveauDroitClients The niveau droit clients.
     */
    public function setNiveauDroitClients($niveauDroitClients) {
        $this->niveauDroitClients = $niveauDroitClients;
        return $this;
    }

    /**
     * Set the niveau droit fournisseurs.
     *
     * @param string $niveauDroitFournisseurs The niveau droit fournisseurs.
     */
    public function setNiveauDroitFournisseurs($niveauDroitFournisseurs) {
        $this->niveauDroitFournisseurs = $niveauDroitFournisseurs;
        return $this;
    }

    /**
     * Set the niveau droit generaux.
     *
     * @param string $niveauDroitGeneraux The niveau droit generaux.
     */
    public function setNiveauDroitGeneraux($niveauDroitGeneraux) {
        $this->niveauDroitGeneraux = $niveauDroitGeneraux;
        return $this;
    }

    /**
     * Set the no doss cpta.
     *
     * @param string $noDossCpta The no doss cpta.
     */
    public function setNoDossCpta($noDossCpta) {
        $this->noDossCpta = $noDossCpta;
        return $this;
    }

    /**
     * Set the nom user.
     *
     * @param string $nomUser The nom user.
     */
    public function setNomUser($nomUser) {
        $this->nomUser = $nomUser;
        return $this;
    }

    /**
     * Set the numi key.
     *
     * @param string $numiKey The numi key.
     */
    public function setNumiKey($numiKey) {
        $this->numiKey = $numiKey;
        return $this;
    }

    /**
     * Set the password.
     *
     * @param string $password The password.
     */
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    /**
     * Set the periode saisie deb.
     *
     * @param DateTime|null $periodeSaisieDeb The periode saisie deb.
     */
    public function setPeriodeSaisieDeb(DateTime $periodeSaisieDeb = null) {
        $this->periodeSaisieDeb = $periodeSaisieDeb;
        return $this;
    }

    /**
     * Set the periode saisie fin.
     *
     * @param DateTime|null $periodeSaisieFin The periode saisie fin.
     */
    public function setPeriodeSaisieFin(DateTime $periodeSaisieFin = null) {
        $this->periodeSaisieFin = $periodeSaisieFin;
        return $this;
    }
}
