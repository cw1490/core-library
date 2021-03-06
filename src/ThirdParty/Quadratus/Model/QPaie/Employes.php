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
 * Employes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Employes {

    /**
     * A transferer en p.
     *
     * @var bool
     */
    private $aTransfererEnP;

    /**
     * Administratif.
     *
     * @var bool
     */
    private $administratif;

    /**
     * Alleg particulier.
     *
     * @var bool
     */
    private $allegParticulier;

    /**
     * Autre alleg.
     *
     * @var bool
     */
    private $autreAlleg;

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
     * Calcul particip.
     *
     * @var bool
     */
    private $calculParticip;

    /**
     * Carte sejour delivree le.
     *
     * @var DateTime|null
     */
    private $carteSejourDelivreeLe;

    /**
     * Carte sejour expire le.
     *
     * @var DateTime|null
     */
    private $carteSejourExpireLe;

    /**
     * Carte travail delivree le.
     *
     * @var DateTime|null
     */
    private $carteTravailDelivreeLe;

    /**
     * Carte travail expire le.
     *
     * @var DateTime|null
     */
    private $carteTravailExpireLe;

    /**
     * Cas part ss.
     *
     * @var bool
     */
    private $casPartSs;

    /**
     * Categ population.
     *
     * @var string
     */
    private $categPopulation;

    /**
     * Categ salarie.
     *
     * @var string
     */
    private $categSalarie;

    /**
     * Categorie permis.
     *
     * @var string
     */
    private $categoriePermis;

    /**
     * Cddcdi.
     *
     * @var bool
     */
    private $cddcdi;

    /**
     * Classification.
     *
     * @var string
     */
    private $classification;

    /**
     * Cle deux.
     *
     * @var string
     */
    private $cleDeux;

    /**
     * Code at.
     *
     * @var int
     */
    private $codeAt;

    /**
     * Code centre urssaf.
     *
     * @var string
     */
    private $codeCentreUrssaf;

    /**
     * Code convention.
     *
     * @var string
     */
    private $codeConvention;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Code naf.
     *
     * @var int
     */
    private $codeNaf;

    /**
     * Code officiel commune.
     *
     * @var string
     */
    private $codeOfficielCommune;

    /**
     * Code pays naissance.
     *
     * @var string
     */
    private $codePaysNaissance;

    /**
     * Code postal.
     *
     * @var string
     */
    private $codePostal;

    /**
     * Code type sal.
     *
     * @var string
     */
    private $codeTypeSal;

    /**
     * Commune naissance.
     *
     * @var string
     */
    private $communeNaissance;

    /**
     * Complement.
     *
     * @var string
     */
    private $complement;

    /**
     * Compte tiers.
     *
     * @var string
     */
    private $compteTiers;

    /**
     * Cpt accompte.
     *
     * @var int
     */
    private $cptAccompte;

    /**
     * Ctrl taux sal base.
     *
     * @var bool
     */
    private $ctrlTauxSalBase;

    /**
     * Cum30 ss.
     *
     * @var float
     */
    private $cum30Ss;

    /**
     * Cum base csg.
     *
     * @var float
     */
    private $cumBaseCsg;

    /**
     * Cum base gmp.
     *
     * @var float
     */
    private $cumBaseGmp;

    /**
     * Cum base ss.
     *
     * @var float
     */
    private $cumBaseSs;

    /**
     * Cum base tr a.
     *
     * @var float
     */
    private $cumBaseTrA;

    /**
     * Cum base tr a caisse1.
     *
     * @var float
     */
    private $cumBaseTrACaisse1;

    /**
     * Cum base tr a caisse2.
     *
     * @var float
     */
    private $cumBaseTrACaisse2;

    /**
     * Cum base tr a caisse3.
     *
     * @var float
     */
    private $cumBaseTrACaisse3;

    /**
     * Cum base tr b.
     *
     * @var float
     */
    private $cumBaseTrB;

    /**
     * Cum base tr b caisse1.
     *
     * @var float
     */
    private $cumBaseTrBCaisse1;

    /**
     * Cum base tr b caisse2.
     *
     * @var float
     */
    private $cumBaseTrBCaisse2;

    /**
     * Cum base tr b caisse3.
     *
     * @var float
     */
    private $cumBaseTrBCaisse3;

    /**
     * Cum base tr c.
     *
     * @var float
     */
    private $cumBaseTrC;

    /**
     * Cum base tr c caisse1.
     *
     * @var float
     */
    private $cumBaseTrCCaisse1;

    /**
     * Cum base tr c caisse2.
     *
     * @var float
     */
    private $cumBaseTrCCaisse2;

    /**
     * Cum base tr c caisse3.
     *
     * @var float
     */
    private $cumBaseTrCCaisse3;

    /**
     * Cum brut abat non lim.
     *
     * @var float
     */
    private $cumBrutAbatNonLim;

    /**
     * Cum brut al.
     *
     * @var float
     */
    private $cumBrutAl;

    /**
     * Cum brut non abattu.
     *
     * @var float
     */
    private $cumBrutNonAbattu;

    /**
     * Cum cp dus.
     *
     * @var float
     */
    private $cumCpDus;

    /**
     * Cum cp dus1.
     *
     * @var float
     */
    private $cumCpDus1;

    /**
     * Cum cp pris.
     *
     * @var float
     */
    private $cumCpPris;

    /**
     * Cum cp pris1.
     *
     * @var float
     */
    private $cumCpPris1;

    /**
     * Cum h repos remplace.
     *
     * @var float
     */
    private $cumHReposRemplace;

    /**
     * Cum h service.
     *
     * @var float
     */
    private $cumHService;

    /**
     * Cum h sup.
     *
     * @var float
     */
    private $cumHSup;

    /**
     * Cum h sup rcit.
     *
     * @var float
     */
    private $cumHSupRcit;

    /**
     * Cum heure paye.
     *
     * @var float
     */
    private $cumHeurePaye;

    /**
     * Cum heure trav.
     *
     * @var float
     */
    private $cumHeureTrav;

    /**
     * Cum j repos recup.
     *
     * @var float
     */
    private $cumJReposRecup;

    /**
     * Cum jour paye.
     *
     * @var float
     */
    private $cumJourPaye;

    /**
     * Cum jour trav.
     *
     * @var float
     */
    private $cumJourTrav;

    /**
     * Cum mt cp pris.
     *
     * @var float
     */
    private $cumMtCpPris;

    /**
     * Cum mt cp pris1.
     *
     * @var float
     */
    private $cumMtCpPris1;

    /**
     * Cum net a payer.
     *
     * @var float
     */
    private $cumNetAPayer;

    /**
     * Cum net imposable.
     *
     * @var float
     */
    private $cumNetImposable;

    /**
     * Cum plaf1 caisse1.
     *
     * @var float
     */
    private $cumPlaf1Caisse1;

    /**
     * Cum plaf1 caisse2.
     *
     * @var float
     */
    private $cumPlaf1Caisse2;

    /**
     * Cum plaf1 caisse3.
     *
     * @var float
     */
    private $cumPlaf1Caisse3;

    /**
     * Cum plaf2 caisse1.
     *
     * @var float
     */
    private $cumPlaf2Caisse1;

    /**
     * Cum plaf2 caisse2.
     *
     * @var float
     */
    private $cumPlaf2Caisse2;

    /**
     * Cum plaf2 caisse3.
     *
     * @var float
     */
    private $cumPlaf2Caisse3;

    /**
     * Cum plafond gmp.
     *
     * @var float
     */
    private $cumPlafondGmp;

    /**
     * Cum plafond ss1.
     *
     * @var float
     */
    private $cumPlafondSs1;

    /**
     * Cum plafond ss2.
     *
     * @var float
     */
    private $cumPlafondSs2;

    /**
     * Cum prov cp.
     *
     * @var float
     */
    private $cumProvCp;

    /**
     * Cum prov cp1.
     *
     * @var float
     */
    private $cumProvCp1;

    /**
     * Cum repos comp.
     *
     * @var float
     */
    private $cumReposComp;

    /**
     * Date ancien.
     *
     * @var DateTime|null
     */
    private $dateAncien;

    /**
     * Date embauche.
     *
     * @var DateTime|null
     */
    private $dateEmbauche;

    /**
     * Date entree1.
     *
     * @var DateTime|null
     */
    private $dateEntree1;

    /**
     * Date entree2.
     *
     * @var DateTime|null
     */
    private $dateEntree2;

    /**
     * Date licenciement.
     *
     * @var DateTime|null
     */
    private $dateLicenciement;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Date naiss conjoint.
     *
     * @var DateTime|null
     */
    private $dateNaissConjoint;

    /**
     * Date naissance.
     *
     * @var DateTime|null
     */
    private $dateNaissance;

    /**
     * Date sortie1.
     *
     * @var DateTime|null
     */
    private $dateSortie1;

    /**
     * Date sortie2.
     *
     * @var DateTime|null
     */
    private $dateSortie2;

    /**
     * Date visite medicale.
     *
     * @var DateTime|null
     */
    private $dateVisiteMedicale;

    /**
     * Date visite reprise.
     *
     * @var DateTime|null
     */
    private $dateVisiteReprise;

    /**
     * Dept naissance.
     *
     * @var string
     */
    private $deptNaissance;

    /**
     * Dern num prime.
     *
     * @var int
     */
    private $dernNumPrime;

    /**
     * Dim type2.
     *
     * @var bool
     */
    private $dimType2;

    /**
     * Dir non salarie.
     *
     * @var bool
     */
    private $dirNonSalarie;

    /**
     * Dom banque.
     *
     * @var string
     */
    private $domBanque;

    /**
     * Ed taux sal base.
     *
     * @var bool
     */
    private $edTauxSalBase;

    /**
     * Effectif.
     *
     * @var bool
     */
    private $effectif;

    /**
     * Effectif das.
     *
     * @var bool
     */
    private $effectifDas;

    /**
     * Emploi.
     *
     * @var string
     */
    private $emploi;

    /**
     * Fictif.
     *
     * @var bool
     */
    private $fictif;

    /**
     * Fraction etab.
     *
     * @var string
     */
    private $fractionEtab;

    /**
     * Gestion maj dim.
     *
     * @var string
     */
    private $gestionMajDim;

    /**
     * Gestion maj jf.
     *
     * @var string
     */
    private $gestionMajJf;

    /**
     * Gestion maj nuit.
     *
     * @var string
     */
    private $gestionMajNuit;

    /**
     * Grille anc1.
     *
     * @var string
     */
    private $grilleAnc1;

    /**
     * Grille anc2.
     *
     * @var string
     */
    private $grilleAnc2;

    /**
     * Grille anc3.
     *
     * @var string
     */
    private $grilleAnc3;

    /**
     * H nuit type2.
     *
     * @var bool
     */
    private $hNuitType2;

    /**
     * Handicape.
     *
     * @var bool
     */
    private $handicape;

    /**
     * Lieu travail conjoint.
     *
     * @var string
     */
    private $lieuTravailConjoint;

    /**
     * Matricule.
     *
     * @var string
     */
    private $matricule;

    /**
     * Mensualisation tache.
     *
     * @var string
     */
    private $mensualisationTache;

    /**
     * Mention cp.
     *
     * @var bool
     */
    private $mentionCp;

    /**
     * Min garanti.
     *
     * @var float
     */
    private $minGaranti;

    /**
     * Montant1.
     *
     * @var float
     */
    private $montant1;

    /**
     * Montant2.
     *
     * @var float
     */
    private $montant2;

    /**
     * Montant3.
     *
     * @var float
     */
    private $montant3;

    /**
     * Montant4.
     *
     * @var float
     */
    private $montant4;

    /**
     * Montant5.
     *
     * @var float
     */
    private $montant5;

    /**
     * Montant avantage.
     *
     * @var float
     */
    private $montantAvantage;

    /**
     * Mt base acompte.
     *
     * @var float
     */
    private $mtBaseAcompte;

    /**
     * Nationalite.
     *
     * @var string
     */
    private $nationalite;

    /**
     * Nb heure mois.
     *
     * @var float
     */
    private $nbHeureMois;

    /**
     * Nb heure sal.
     *
     * @var float
     */
    private $nbHeureSal;

    /**
     * Nb heure sup.
     *
     * @var float
     */
    private $nbHeureSup;

    /**
     * Nb heure trav.
     *
     * @var float
     */
    private $nbHeureTrav;

    /**
     * Nb jour base cp.
     *
     * @var float
     */
    private $nbJourBaseCp;

    /**
     * Nb points.
     *
     * @var int
     */
    private $nbPoints;

    /**
     * Niveau confidentialite.
     *
     * @var string
     */
    private $niveauConfidentialite;

    /**
     * Nom conjoint.
     *
     * @var string
     */
    private $nomConjoint;

    /**
     * Nom marital.
     *
     * @var string
     */
    private $nomMarital;

    /**
     * Nom naissance.
     *
     * @var string
     */
    private $nomNaissance;

    /**
     * Nom ville.
     *
     * @var string
     */
    private $nomVille;

    /**
     * Nom voie.
     *
     * @var string
     */
    private $nomVoie;

    /**
     * Nombre enfants.
     *
     * @var string
     */
    private $nombreEnfants;

    /**
     * Num voie.
     *
     * @var string
     */
    private $numVoie;

    /**
     * Numero.
     *
     * @var string
     */
    private $numero;

    /**
     * Numero carte sejour.
     *
     * @var string
     */
    private $numeroCarteSejour;

    /**
     * Numero carte travail.
     *
     * @var string
     */
    private $numeroCarteTravail;

    /**
     * Numero cas part secu.
     *
     * @var int
     */
    private $numeroCasPartSecu;

    /**
     * Numero grille type.
     *
     * @var int
     */
    private $numeroGrilleType;

    /**
     * Numero insee.
     *
     * @var string
     */
    private $numeroInsee;

    /**
     * Numero permis.
     *
     * @var string
     */
    private $numeroPermis;

    /**
     * Orphelin.
     *
     * @var bool
     */
    private $orphelin;

    /**
     * Pas gestion pdp.
     *
     * @var bool
     */
    private $pasGestionPdp;

    /**
     * Pas gestion pdp1.
     *
     * @var bool
     */
    private $pasGestionPdp1;

    /**
     * Pension.
     *
     * @var bool
     */
    private $pension;

    /**
     * Periodicite.
     *
     * @var string
     */
    private $periodicite;

    /**
     * Permis delivre le.
     *
     * @var DateTime|null
     */
    private $permisDelivreLe;

    /**
     * Permis delivre par.
     *
     * @var string
     */
    private $permisDelivrePar;

    /**
     * Permis expire le.
     *
     * @var DateTime|null
     */
    private $permisExpireLe;

    /**
     * Personne a prevenir.
     *
     * @var string
     */
    private $personneAPrevenir;

    /**
     * Plafond gmp.
     *
     * @var float
     */
    private $plafondGmp;

    /**
     * Plafond ss1.
     *
     * @var float
     */
    private $plafondSs1;

    /**
     * plafond ss2.
     *
     * @var float
     */
    private $plafondSs2;

    /**
     * Plafond ss30.
     *
     * @var bool
     */
    private $plafondSs30;

    /**
     * Pourcent abat.
     *
     * @var float
     */
    private $pourcentAbat;

    /**
     * Pourcent act.
     *
     * @var float
     */
    private $pourcentAct;

    /**
     * Pourcent effectif ducs.
     *
     * @var float
     */
    private $pourcentEffectifDucs;

    /**
     * Pourcent remu hor.
     *
     * @var float
     */
    private $pourcentRemuHor;

    /**
     * Prenom.
     *
     * @var string
     */
    private $prenom;

    /**
     * Prenom conjoint.
     *
     * @var string
     */
    private $prenomConjoint;

    /**
     * Prime.
     *
     * @var bool
     */
    private $prime;

    /**
     * Prud college.
     *
     * @var string
     */
    private $prudCollege;

    /**
     * Prud lieu vote.
     *
     * @var string
     */
    private $prudLieuVote;

    /**
     * Prud section.
     *
     * @var string
     */
    private $prudSection;

    /**
     * Qualification.
     *
     * @var string
     */
    private $qualification;

    /**
     * Regle calcul.
     *
     * @var string
     */
    private $regleCalcul;

    /**
     * Regroup virement.
     *
     * @var string
     */
    private $regroupVirement;

    /**
     * Regul tds.
     *
     * @var bool
     */
    private $regulTds;

    /**
     * Rib.
     *
     * @var string
     */
    private $rib;

    /**
     * Salaire base.
     *
     * @var float
     */
    private $salaireBase;

    /**
     * Service.
     *
     * @var string
     */
    private $service;

    /**
     * Sexe.
     *
     * @var string
     */
    private $sexe;

    /**
     * Situation fam.
     *
     * @var string
     */
    private $situationFam;

    /**
     * Taux1.
     *
     * @var float
     */
    private $taux1;

    /**
     * Taux2.
     *
     * @var float
     */
    private $taux2;

    /**
     * Taux3.
     *
     * @var float
     */
    private $taux3;

    /**
     * Taux4.
     *
     * @var float
     */
    private $taux4;

    /**
     * Taux5.
     *
     * @var float
     */
    private $taux5;

    /**
     * Taux absence.
     *
     * @var float
     */
    private $tauxAbsence;

    /**
     * Taux ancien.
     *
     * @var float
     */
    private $tauxAncien;

    /**
     * Taux h sup.
     *
     * @var float
     */
    private $tauxHSup;

    /**
     * Taux pension civile.
     *
     * @var float
     */
    private $tauxPensionCivile;

    /**
     * Taux pension militaire.
     *
     * @var float
     */
    private $tauxPensionMilitaire;

    /**
     * Taxe salaire.
     *
     * @var bool
     */
    private $taxeSalaire;

    /**
     * Tds100.
     *
     * @var float
     */
    private $tds100;

    /**
     * Tds102.
     *
     * @var float
     */
    private $tds102;

    /**
     * Tds103.
     *
     * @var float
     */
    private $tds103;

    /**
     * Tds105.
     *
     * @var float
     */
    private $tds105;

    /**
     * Tds107.
     *
     * @var bool
     */
    private $tds107;

    /**
     * Tds108.
     *
     * @var bool
     */
    private $tds108;

    /**
     * Tds109.
     *
     * @var bool
     */
    private $tds109;

    /**
     * Tds110.
     *
     * @var bool
     */
    private $tds110;

    /**
     * Tds112.
     *
     * @var float
     */
    private $tds112;

    /**
     * Tds113.
     *
     * @var bool
     */
    private $tds113;

    /**
     * Tds117.
     *
     * @var float
     */
    private $tds117;

    /**
     * Tds119.
     *
     * @var bool
     */
    private $tds119;

    /**
     * Tds120.
     *
     * @var bool
     */
    private $tds120;

    /**
     * Tds121.
     *
     * @var bool
     */
    private $tds121;

    /**
     * Tds122.
     *
     * @var bool
     */
    private $tds122;

    /**
     * Tds125.
     *
     * @var float
     */
    private $tds125;

    /**
     * Tds127.
     *
     * @var float
     */
    private $tds127;

    /**
     * Tds128.
     *
     * @var string
     */
    private $tds128;

    /**
     * Tds132.
     *
     * @var float
     */
    private $tds132;

    /**
     * Tds133.
     *
     * @var string
     */
    private $tds133;

    /**
     * Tds134.
     *
     * @var float
     */
    private $tds134;

    /**
     * Tds135.
     *
     * @var float
     */
    private $tds135;

    /**
     * Tds136.
     *
     * @var float
     */
    private $tds136;

    /**
     * Tds138.
     *
     * @var string
     */
    private $tds138;

    /**
     * Tds139.
     *
     * @var string
     */
    private $tds139;

    /**
     * Tds141.
     *
     * @var float
     */
    private $tds141;

    /**
     * Tds59.
     *
     * @var string
     */
    private $tds59;

    /**
     * Tds60.
     *
     * @var bool
     */
    private $tds60;

    /**
     * Tds61.
     *
     * @var string
     */
    private $tds61;

    /**
     * Tds75.
     *
     * @var int
     */
    private $tds75;

    /**
     * Tds76.
     *
     * @var string
     */
    private $tds76;

    /**
     * Tds77.
     *
     * @var string
     */
    private $tds77;

    /**
     * Tds78.
     *
     * @var bool
     */
    private $tds78;

    /**
     * Tds81.
     *
     * @var float
     */
    private $tds81;

    /**
     * Tds82.
     *
     * @var float
     */
    private $tds82;

    /**
     * Tds84.
     *
     * @var float
     */
    private $tds84;

    /**
     * Tds85.
     *
     * @var float
     */
    private $tds85;

    /**
     * Tds86.
     *
     * @var float
     */
    private $tds86;

    /**
     * Tds87.
     *
     * @var float
     */
    private $tds87;

    /**
     * Tds88.
     *
     * @var float
     */
    private $tds88;

    /**
     * Tds89.
     *
     * @var float
     */
    private $tds89;

    /**
     * Tds90.
     *
     * @var float
     */
    private $tds90;

    /**
     * Tds91.
     *
     * @var float
     */
    private $tds91;

    /**
     * Tds92.
     *
     * @var float
     */
    private $tds92;

    /**
     * Tds93.
     *
     * @var float
     */
    private $tds93;

    /**
     * Tds94.
     *
     * @var float
     */
    private $tds94;

    /**
     * Tds95.
     *
     * @var float
     */
    private $tds95;

    /**
     * Tel1.
     *
     * @var string
     */
    private $tel1;

    /**
     * Tel conjoint.
     *
     * @var string
     */
    private $telConjoint;

    /**
     * Tel pers a prevenir.
     *
     * @var string
     */
    private $telPersAPrevenir;

    /**
     * Temps passe.
     *
     * @var bool
     */
    private $tempsPasse;

    /**
     * Titre.
     *
     * @var string
     */
    private $titre;

    /**
     * Transfert entree1.
     *
     * @var bool
     */
    private $transfertEntree1;

    /**
     * Transfert entree2.
     *
     * @var bool
     */
    private $transfertEntree2;

    /**
     * Transfert sortie1.
     *
     * @var bool
     */
    private $transfertSortie1;

    /**
     * Transfert sortie2.
     *
     * @var bool
     */
    private $transfertSortie2;

    /**
     * Travaille jf.
     *
     * @var bool
     */
    private $travailleJf;

    /**
     * Type contrat.
     *
     * @var string
     */
    private $typeContrat;

    /**
     * Type nationalite.
     *
     * @var string
     */
    private $typeNationalite;

    /**
     * Type paiement.
     *
     * @var string
     */
    private $typePaiement;

    /**
     * Vrp multicarte.
     *
     * @var bool
     */
    private $vrpMulticarte;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a transferer en p.
     *
     * @return bool Returns the a transferer en p.
     */
    public function getATransfererEnP() {
        return $this->aTransfererEnP;
    }

    /**
     * Get the administratif.
     *
     * @return bool Returns the administratif.
     */
    public function getAdministratif() {
        return $this->administratif;
    }

    /**
     * Get the alleg particulier.
     *
     * @return bool Returns the alleg particulier.
     */
    public function getAllegParticulier() {
        return $this->allegParticulier;
    }

    /**
     * Get the autre alleg.
     *
     * @return bool Returns the autre alleg.
     */
    public function getAutreAlleg() {
        return $this->autreAlleg;
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
     * Get the calcul particip.
     *
     * @return bool Returns the calcul particip.
     */
    public function getCalculParticip() {
        return $this->calculParticip;
    }

    /**
     * Get the carte sejour delivree le.
     *
     * @return DateTime|null Returns the carte sejour delivree le.
     */
    public function getCarteSejourDelivreeLe() {
        return $this->carteSejourDelivreeLe;
    }

    /**
     * Get the carte sejour expire le.
     *
     * @return DateTime|null Returns the carte sejour expire le.
     */
    public function getCarteSejourExpireLe() {
        return $this->carteSejourExpireLe;
    }

    /**
     * Get the carte travail delivree le.
     *
     * @return DateTime|null Returns the carte travail delivree le.
     */
    public function getCarteTravailDelivreeLe() {
        return $this->carteTravailDelivreeLe;
    }

    /**
     * Get the carte travail expire le.
     *
     * @return DateTime|null Returns the carte travail expire le.
     */
    public function getCarteTravailExpireLe() {
        return $this->carteTravailExpireLe;
    }

    /**
     * Get the cas part ss.
     *
     * @return bool Returns the cas part ss.
     */
    public function getCasPartSs() {
        return $this->casPartSs;
    }

    /**
     * Get the categ population.
     *
     * @return string Returns the categ population.
     */
    public function getCategPopulation() {
        return $this->categPopulation;
    }

    /**
     * Get the categ salarie.
     *
     * @return string Returns the categ salarie.
     */
    public function getCategSalarie() {
        return $this->categSalarie;
    }

    /**
     * Get the categorie permis.
     *
     * @return string Returns the categorie permis.
     */
    public function getCategoriePermis() {
        return $this->categoriePermis;
    }

    /**
     * Get the cddcdi.
     *
     * @return bool Returns the cddcdi.
     */
    public function getCddcdi() {
        return $this->cddcdi;
    }

    /**
     * Get the classification.
     *
     * @return string Returns the classification.
     */
    public function getClassification() {
        return $this->classification;
    }

    /**
     * Get the cle deux.
     *
     * @return string Returns the cle deux.
     */
    public function getCleDeux() {
        return $this->cleDeux;
    }

    /**
     * Get the code at.
     *
     * @return int Returns the code at.
     */
    public function getCodeAt() {
        return $this->codeAt;
    }

    /**
     * Get the code centre urssaf.
     *
     * @return string Returns the code centre urssaf.
     */
    public function getCodeCentreUrssaf() {
        return $this->codeCentreUrssaf;
    }

    /**
     * Get the code convention.
     *
     * @return string Returns the code convention.
     */
    public function getCodeConvention() {
        return $this->codeConvention;
    }

    /**
     * Get the code etablissement.
     *
     * @return int Returns the code etablissement.
     */
    public function getCodeEtablissement() {
        return $this->codeEtablissement;
    }

    /**
     * Get the code naf.
     *
     * @return int Returns the code naf.
     */
    public function getCodeNaf() {
        return $this->codeNaf;
    }

    /**
     * Get the code officiel commune.
     *
     * @return string Returns the code officiel commune.
     */
    public function getCodeOfficielCommune() {
        return $this->codeOfficielCommune;
    }

    /**
     * Get the code pays naissance.
     *
     * @return string Returns the code pays naissance.
     */
    public function getCodePaysNaissance() {
        return $this->codePaysNaissance;
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
     * Get the code type sal.
     *
     * @return string Returns the code type sal.
     */
    public function getCodeTypeSal() {
        return $this->codeTypeSal;
    }

    /**
     * Get the commune naissance.
     *
     * @return string Returns the commune naissance.
     */
    public function getCommuneNaissance() {
        return $this->communeNaissance;
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
     * Get the compte tiers.
     *
     * @return string Returns the compte tiers.
     */
    public function getCompteTiers() {
        return $this->compteTiers;
    }

    /**
     * Get the cpt accompte.
     *
     * @return int Returns the cpt accompte.
     */
    public function getCptAccompte() {
        return $this->cptAccompte;
    }

    /**
     * Get the ctrl taux sal base.
     *
     * @return bool Returns the ctrl taux sal base.
     */
    public function getCtrlTauxSalBase() {
        return $this->ctrlTauxSalBase;
    }

    /**
     * Get the cum30 ss.
     *
     * @return float Returns the cum30 ss.
     */
    public function getCum30Ss() {
        return $this->cum30Ss;
    }

    /**
     * Get the cum base csg.
     *
     * @return float Returns the cum base csg.
     */
    public function getCumBaseCsg() {
        return $this->cumBaseCsg;
    }

    /**
     * Get the cum base gmp.
     *
     * @return float Returns the cum base gmp.
     */
    public function getCumBaseGmp() {
        return $this->cumBaseGmp;
    }

    /**
     * Get the cum base ss.
     *
     * @return float Returns the cum base ss.
     */
    public function getCumBaseSs() {
        return $this->cumBaseSs;
    }

    /**
     * Get the cum base tr a.
     *
     * @return float Returns the cum base tr a.
     */
    public function getCumBaseTrA() {
        return $this->cumBaseTrA;
    }

    /**
     * Get the cum base tr a caisse1.
     *
     * @return float Returns the cum base tr a caisse1.
     */
    public function getCumBaseTrACaisse1() {
        return $this->cumBaseTrACaisse1;
    }

    /**
     * Get the cum base tr a caisse2.
     *
     * @return float Returns the cum base tr a caisse2.
     */
    public function getCumBaseTrACaisse2() {
        return $this->cumBaseTrACaisse2;
    }

    /**
     * Get the cum base tr a caisse3.
     *
     * @return float Returns the cum base tr a caisse3.
     */
    public function getCumBaseTrACaisse3() {
        return $this->cumBaseTrACaisse3;
    }

    /**
     * Get the cum base tr b.
     *
     * @return float Returns the cum base tr b.
     */
    public function getCumBaseTrB() {
        return $this->cumBaseTrB;
    }

    /**
     * Get the cum base tr b caisse1.
     *
     * @return float Returns the cum base tr b caisse1.
     */
    public function getCumBaseTrBCaisse1() {
        return $this->cumBaseTrBCaisse1;
    }

    /**
     * Get the cum base tr b caisse2.
     *
     * @return float Returns the cum base tr b caisse2.
     */
    public function getCumBaseTrBCaisse2() {
        return $this->cumBaseTrBCaisse2;
    }

    /**
     * Get the cum base tr b caisse3.
     *
     * @return float Returns the cum base tr b caisse3.
     */
    public function getCumBaseTrBCaisse3() {
        return $this->cumBaseTrBCaisse3;
    }

    /**
     * Get the cum base tr c.
     *
     * @return float Returns the cum base tr c.
     */
    public function getCumBaseTrC() {
        return $this->cumBaseTrC;
    }

    /**
     * Get the cum base tr c caisse1.
     *
     * @return float Returns the cum base tr c caisse1.
     */
    public function getCumBaseTrCCaisse1() {
        return $this->cumBaseTrCCaisse1;
    }

    /**
     * Get the cum base tr c caisse2.
     *
     * @return float Returns the cum base tr c caisse2.
     */
    public function getCumBaseTrCCaisse2() {
        return $this->cumBaseTrCCaisse2;
    }

    /**
     * Get the cum base tr c caisse3.
     *
     * @return float Returns the cum base tr c caisse3.
     */
    public function getCumBaseTrCCaisse3() {
        return $this->cumBaseTrCCaisse3;
    }

    /**
     * Get the cum brut abat non lim.
     *
     * @return float Returns the cum brut abat non lim.
     */
    public function getCumBrutAbatNonLim() {
        return $this->cumBrutAbatNonLim;
    }

    /**
     * Get the cum brut al.
     *
     * @return float Returns the cum brut al.
     */
    public function getCumBrutAl() {
        return $this->cumBrutAl;
    }

    /**
     * Get the cum brut non abattu.
     *
     * @return float Returns the cum brut non abattu.
     */
    public function getCumBrutNonAbattu() {
        return $this->cumBrutNonAbattu;
    }

    /**
     * Get the cum cp dus.
     *
     * @return float Returns the cum cp dus.
     */
    public function getCumCpDus() {
        return $this->cumCpDus;
    }

    /**
     * Get the cum cp dus1.
     *
     * @return float Returns the cum cp dus1.
     */
    public function getCumCpDus1() {
        return $this->cumCpDus1;
    }

    /**
     * Get the cum cp pris.
     *
     * @return float Returns the cum cp pris.
     */
    public function getCumCpPris() {
        return $this->cumCpPris;
    }

    /**
     * Get the cum cp pris1.
     *
     * @return float Returns the cum cp pris1.
     */
    public function getCumCpPris1() {
        return $this->cumCpPris1;
    }

    /**
     * Get the cum h repos remplace.
     *
     * @return float Returns the cum h repos remplace.
     */
    public function getCumHReposRemplace() {
        return $this->cumHReposRemplace;
    }

    /**
     * Get the cum h service.
     *
     * @return float Returns the cum h service.
     */
    public function getCumHService() {
        return $this->cumHService;
    }

    /**
     * Get the cum h sup.
     *
     * @return float Returns the cum h sup.
     */
    public function getCumHSup() {
        return $this->cumHSup;
    }

    /**
     * Get the cum h sup rcit.
     *
     * @return float Returns the cum h sup rcit.
     */
    public function getCumHSupRcit() {
        return $this->cumHSupRcit;
    }

    /**
     * Get the cum heure paye.
     *
     * @return float Returns the cum heure paye.
     */
    public function getCumHeurePaye() {
        return $this->cumHeurePaye;
    }

    /**
     * Get the cum heure trav.
     *
     * @return float Returns the cum heure trav.
     */
    public function getCumHeureTrav() {
        return $this->cumHeureTrav;
    }

    /**
     * Get the cum j repos recup.
     *
     * @return float Returns the cum j repos recup.
     */
    public function getCumJReposRecup() {
        return $this->cumJReposRecup;
    }

    /**
     * Get the cum jour paye.
     *
     * @return float Returns the cum jour paye.
     */
    public function getCumJourPaye() {
        return $this->cumJourPaye;
    }

    /**
     * Get the cum jour trav.
     *
     * @return float Returns the cum jour trav.
     */
    public function getCumJourTrav() {
        return $this->cumJourTrav;
    }

    /**
     * Get the cum mt cp pris.
     *
     * @return float Returns the cum mt cp pris.
     */
    public function getCumMtCpPris() {
        return $this->cumMtCpPris;
    }

    /**
     * Get the cum mt cp pris1.
     *
     * @return float Returns the cum mt cp pris1.
     */
    public function getCumMtCpPris1() {
        return $this->cumMtCpPris1;
    }

    /**
     * Get the cum net a payer.
     *
     * @return float Returns the cum net a payer.
     */
    public function getCumNetAPayer() {
        return $this->cumNetAPayer;
    }

    /**
     * Get the cum net imposable.
     *
     * @return float Returns the cum net imposable.
     */
    public function getCumNetImposable() {
        return $this->cumNetImposable;
    }

    /**
     * Get the cum plaf1 caisse1.
     *
     * @return float Returns the cum plaf1 caisse1.
     */
    public function getCumPlaf1Caisse1() {
        return $this->cumPlaf1Caisse1;
    }

    /**
     * Get the cum plaf1 caisse2.
     *
     * @return float Returns the cum plaf1 caisse2.
     */
    public function getCumPlaf1Caisse2() {
        return $this->cumPlaf1Caisse2;
    }

    /**
     * Get the cum plaf1 caisse3.
     *
     * @return float Returns the cum plaf1 caisse3.
     */
    public function getCumPlaf1Caisse3() {
        return $this->cumPlaf1Caisse3;
    }

    /**
     * Get the cum plaf2 caisse1.
     *
     * @return float Returns the cum plaf2 caisse1.
     */
    public function getCumPlaf2Caisse1() {
        return $this->cumPlaf2Caisse1;
    }

    /**
     * Get the cum plaf2 caisse2.
     *
     * @return float Returns the cum plaf2 caisse2.
     */
    public function getCumPlaf2Caisse2() {
        return $this->cumPlaf2Caisse2;
    }

    /**
     * Get the cum plaf2 caisse3.
     *
     * @return float Returns the cum plaf2 caisse3.
     */
    public function getCumPlaf2Caisse3() {
        return $this->cumPlaf2Caisse3;
    }

    /**
     * Get the cum plafond gmp.
     *
     * @return float Returns the cum plafond gmp.
     */
    public function getCumPlafondGmp() {
        return $this->cumPlafondGmp;
    }

    /**
     * Get the cum plafond ss1.
     *
     * @return float Returns the cum plafond ss1.
     */
    public function getCumPlafondSs1() {
        return $this->cumPlafondSs1;
    }

    /**
     * Get the cum plafond ss2.
     *
     * @return float Returns the cum plafond ss2.
     */
    public function getCumPlafondSs2() {
        return $this->cumPlafondSs2;
    }

    /**
     * Get the cum prov cp.
     *
     * @return float Returns the cum prov cp.
     */
    public function getCumProvCp() {
        return $this->cumProvCp;
    }

    /**
     * Get the cum prov cp1.
     *
     * @return float Returns the cum prov cp1.
     */
    public function getCumProvCp1() {
        return $this->cumProvCp1;
    }

    /**
     * Get the cum repos comp.
     *
     * @return float Returns the cum repos comp.
     */
    public function getCumReposComp() {
        return $this->cumReposComp;
    }

    /**
     * Get the date ancien.
     *
     * @return DateTime|null Returns the date ancien.
     */
    public function getDateAncien() {
        return $this->dateAncien;
    }

    /**
     * Get the date embauche.
     *
     * @return DateTime|null Returns the date embauche.
     */
    public function getDateEmbauche() {
        return $this->dateEmbauche;
    }

    /**
     * Get the date entree1.
     *
     * @return DateTime|null Returns the date entree1.
     */
    public function getDateEntree1() {
        return $this->dateEntree1;
    }

    /**
     * Get the date entree2.
     *
     * @return DateTime|null Returns the date entree2.
     */
    public function getDateEntree2() {
        return $this->dateEntree2;
    }

    /**
     * Get the date licenciement.
     *
     * @return DateTime|null Returns the date licenciement.
     */
    public function getDateLicenciement() {
        return $this->dateLicenciement;
    }

    /**
     * Get the date modification.
     *
     * @return DateTime|null Returns the date modification.
     */
    public function getDateModification() {
        return $this->dateModification;
    }

    /**
     * Get the date naiss conjoint.
     *
     * @return DateTime|null Returns the date naiss conjoint.
     */
    public function getDateNaissConjoint() {
        return $this->dateNaissConjoint;
    }

    /**
     * Get the date naissance.
     *
     * @return DateTime|null Returns the date naissance.
     */
    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    /**
     * Get the date sortie1.
     *
     * @return DateTime|null Returns the date sortie1.
     */
    public function getDateSortie1() {
        return $this->dateSortie1;
    }

    /**
     * Get the date sortie2.
     *
     * @return DateTime|null Returns the date sortie2.
     */
    public function getDateSortie2() {
        return $this->dateSortie2;
    }

    /**
     * Get the date visite medicale.
     *
     * @return DateTime|null Returns the date visite medicale.
     */
    public function getDateVisiteMedicale() {
        return $this->dateVisiteMedicale;
    }

    /**
     * Get the date visite reprise.
     *
     * @return DateTime|null Returns the date visite reprise.
     */
    public function getDateVisiteReprise() {
        return $this->dateVisiteReprise;
    }

    /**
     * Get the dept naissance.
     *
     * @return string Returns the dept naissance.
     */
    public function getDeptNaissance() {
        return $this->deptNaissance;
    }

    /**
     * Get the dern num prime.
     *
     * @return int Returns the dern num prime.
     */
    public function getDernNumPrime() {
        return $this->dernNumPrime;
    }

    /**
     * Get the dim type2.
     *
     * @return bool Returns the dim type2.
     */
    public function getDimType2() {
        return $this->dimType2;
    }

    /**
     * Get the dir non salarie.
     *
     * @return bool Returns the dir non salarie.
     */
    public function getDirNonSalarie() {
        return $this->dirNonSalarie;
    }

    /**
     * Get the dom banque.
     *
     * @return string Returns the dom banque.
     */
    public function getDomBanque() {
        return $this->domBanque;
    }

    /**
     * Get the ed taux sal base.
     *
     * @return bool Returns the ed taux sal base.
     */
    public function getEdTauxSalBase() {
        return $this->edTauxSalBase;
    }

    /**
     * Get the effectif.
     *
     * @return bool Returns the effectif.
     */
    public function getEffectif() {
        return $this->effectif;
    }

    /**
     * Get the effectif das.
     *
     * @return bool Returns the effectif das.
     */
    public function getEffectifDas() {
        return $this->effectifDas;
    }

    /**
     * Get the emploi.
     *
     * @return string Returns the emploi.
     */
    public function getEmploi() {
        return $this->emploi;
    }

    /**
     * Get the fictif.
     *
     * @return bool Returns the fictif.
     */
    public function getFictif() {
        return $this->fictif;
    }

    /**
     * Get the fraction etab.
     *
     * @return string Returns the fraction etab.
     */
    public function getFractionEtab() {
        return $this->fractionEtab;
    }

    /**
     * Get the gestion maj dim.
     *
     * @return string Returns the gestion maj dim.
     */
    public function getGestionMajDim() {
        return $this->gestionMajDim;
    }

    /**
     * Get the gestion maj jf.
     *
     * @return string Returns the gestion maj jf.
     */
    public function getGestionMajJf() {
        return $this->gestionMajJf;
    }

    /**
     * Get the gestion maj nuit.
     *
     * @return string Returns the gestion maj nuit.
     */
    public function getGestionMajNuit() {
        return $this->gestionMajNuit;
    }

    /**
     * Get the grille anc1.
     *
     * @return string Returns the grille anc1.
     */
    public function getGrilleAnc1() {
        return $this->grilleAnc1;
    }

    /**
     * Get the grille anc2.
     *
     * @return string Returns the grille anc2.
     */
    public function getGrilleAnc2() {
        return $this->grilleAnc2;
    }

    /**
     * Get the grille anc3.
     *
     * @return string Returns the grille anc3.
     */
    public function getGrilleAnc3() {
        return $this->grilleAnc3;
    }

    /**
     * Get the h nuit type2.
     *
     * @return bool Returns the h nuit type2.
     */
    public function getHNuitType2() {
        return $this->hNuitType2;
    }

    /**
     * Get the handicape.
     *
     * @return bool Returns the handicape.
     */
    public function getHandicape() {
        return $this->handicape;
    }

    /**
     * Get the lieu travail conjoint.
     *
     * @return string Returns the lieu travail conjoint.
     */
    public function getLieuTravailConjoint() {
        return $this->lieuTravailConjoint;
    }

    /**
     * Get the matricule.
     *
     * @return string Returns the matricule.
     */
    public function getMatricule() {
        return $this->matricule;
    }

    /**
     * Get the mensualisation tache.
     *
     * @return string Returns the mensualisation tache.
     */
    public function getMensualisationTache() {
        return $this->mensualisationTache;
    }

    /**
     * Get the mention cp.
     *
     * @return bool Returns the mention cp.
     */
    public function getMentionCp() {
        return $this->mentionCp;
    }

    /**
     * Get the min garanti.
     *
     * @return float Returns the min garanti.
     */
    public function getMinGaranti() {
        return $this->minGaranti;
    }

    /**
     * Get the montant1.
     *
     * @return float Returns the montant1.
     */
    public function getMontant1() {
        return $this->montant1;
    }

    /**
     * Get the montant2.
     *
     * @return float Returns the montant2.
     */
    public function getMontant2() {
        return $this->montant2;
    }

    /**
     * Get the montant3.
     *
     * @return float Returns the montant3.
     */
    public function getMontant3() {
        return $this->montant3;
    }

    /**
     * Get the montant4.
     *
     * @return float Returns the montant4.
     */
    public function getMontant4() {
        return $this->montant4;
    }

    /**
     * Get the montant5.
     *
     * @return float Returns the montant5.
     */
    public function getMontant5() {
        return $this->montant5;
    }

    /**
     * Get the montant avantage.
     *
     * @return float Returns the montant avantage.
     */
    public function getMontantAvantage() {
        return $this->montantAvantage;
    }

    /**
     * Get the mt base acompte.
     *
     * @return float Returns the mt base acompte.
     */
    public function getMtBaseAcompte() {
        return $this->mtBaseAcompte;
    }

    /**
     * Get the nationalite.
     *
     * @return string Returns the nationalite.
     */
    public function getNationalite() {
        return $this->nationalite;
    }

    /**
     * Get the nb heure mois.
     *
     * @return float Returns the nb heure mois.
     */
    public function getNbHeureMois() {
        return $this->nbHeureMois;
    }

    /**
     * Get the nb heure sal.
     *
     * @return float Returns the nb heure sal.
     */
    public function getNbHeureSal() {
        return $this->nbHeureSal;
    }

    /**
     * Get the nb heure sup.
     *
     * @return float Returns the nb heure sup.
     */
    public function getNbHeureSup() {
        return $this->nbHeureSup;
    }

    /**
     * Get the nb heure trav.
     *
     * @return float Returns the nb heure trav.
     */
    public function getNbHeureTrav() {
        return $this->nbHeureTrav;
    }

    /**
     * Get the nb jour base cp.
     *
     * @return float Returns the nb jour base cp.
     */
    public function getNbJourBaseCp() {
        return $this->nbJourBaseCp;
    }

    /**
     * Get the nb points.
     *
     * @return int Returns the nb points.
     */
    public function getNbPoints() {
        return $this->nbPoints;
    }

    /**
     * Get the niveau confidentialite.
     *
     * @return string Returns the niveau confidentialite.
     */
    public function getNiveauConfidentialite() {
        return $this->niveauConfidentialite;
    }

    /**
     * Get the nom conjoint.
     *
     * @return string Returns the nom conjoint.
     */
    public function getNomConjoint() {
        return $this->nomConjoint;
    }

    /**
     * Get the nom marital.
     *
     * @return string Returns the nom marital.
     */
    public function getNomMarital() {
        return $this->nomMarital;
    }

    /**
     * Get the nom naissance.
     *
     * @return string Returns the nom naissance.
     */
    public function getNomNaissance() {
        return $this->nomNaissance;
    }

    /**
     * Get the nom ville.
     *
     * @return string Returns the nom ville.
     */
    public function getNomVille() {
        return $this->nomVille;
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
     * Get the nombre enfants.
     *
     * @return string Returns the nombre enfants.
     */
    public function getNombreEnfants() {
        return $this->nombreEnfants;
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
     * Get the numero.
     *
     * @return string Returns the numero.
     */
    public function getNumero() {
        return $this->numero;
    }

    /**
     * Get the numero carte sejour.
     *
     * @return string Returns the numero carte sejour.
     */
    public function getNumeroCarteSejour() {
        return $this->numeroCarteSejour;
    }

    /**
     * Get the numero carte travail.
     *
     * @return string Returns the numero carte travail.
     */
    public function getNumeroCarteTravail() {
        return $this->numeroCarteTravail;
    }

    /**
     * Get the numero cas part secu.
     *
     * @return int Returns the numero cas part secu.
     */
    public function getNumeroCasPartSecu() {
        return $this->numeroCasPartSecu;
    }

    /**
     * Get the numero grille type.
     *
     * @return int Returns the numero grille type.
     */
    public function getNumeroGrilleType() {
        return $this->numeroGrilleType;
    }

    /**
     * Get the numero insee.
     *
     * @return string Returns the numero insee.
     */
    public function getNumeroInsee() {
        return $this->numeroInsee;
    }

    /**
     * Get the numero permis.
     *
     * @return string Returns the numero permis.
     */
    public function getNumeroPermis() {
        return $this->numeroPermis;
    }

    /**
     * Get the orphelin.
     *
     * @return bool Returns the orphelin.
     */
    public function getOrphelin() {
        return $this->orphelin;
    }

    /**
     * Get the pas gestion pdp.
     *
     * @return bool Returns the pas gestion pdp.
     */
    public function getPasGestionPdp() {
        return $this->pasGestionPdp;
    }

    /**
     * Get the pas gestion pdp1.
     *
     * @return bool Returns the pas gestion pdp1.
     */
    public function getPasGestionPdp1() {
        return $this->pasGestionPdp1;
    }

    /**
     * Get the pension.
     *
     * @return bool Returns the pension.
     */
    public function getPension() {
        return $this->pension;
    }

    /**
     * Get the periodicite.
     *
     * @return string Returns the periodicite.
     */
    public function getPeriodicite() {
        return $this->periodicite;
    }

    /**
     * Get the permis delivre le.
     *
     * @return DateTime|null Returns the permis delivre le.
     */
    public function getPermisDelivreLe() {
        return $this->permisDelivreLe;
    }

    /**
     * Get the permis delivre par.
     *
     * @return string Returns the permis delivre par.
     */
    public function getPermisDelivrePar() {
        return $this->permisDelivrePar;
    }

    /**
     * Get the permis expire le.
     *
     * @return DateTime|null Returns the permis expire le.
     */
    public function getPermisExpireLe() {
        return $this->permisExpireLe;
    }

    /**
     * Get the personne a prevenir.
     *
     * @return string Returns the personne a prevenir.
     */
    public function getPersonneAPrevenir() {
        return $this->personneAPrevenir;
    }

    /**
     * Get the plafond gmp.
     *
     * @return float Returns the plafond gmp.
     */
    public function getPlafondGmp() {
        return $this->plafondGmp;
    }

    /**
     * Get the plafond ss1.
     *
     * @return float Returns the plafond ss1.
     */
    public function getPlafondSs1() {
        return $this->plafondSs1;
    }

    /**
     * Get the plafond ss30.
     *
     * @return bool Returns the plafond ss30.
     */
    public function getPlafondSs30() {
        return $this->plafondSs30;
    }

    /**
     * Get the pourcent abat.
     *
     * @return float Returns the pourcent abat.
     */
    public function getPourcentAbat() {
        return $this->pourcentAbat;
    }

    /**
     * Get the pourcent act.
     *
     * @return float Returns the pourcent act.
     */
    public function getPourcentAct() {
        return $this->pourcentAct;
    }

    /**
     * Get the pourcent effectif ducs.
     *
     * @return float Returns the pourcent effectif ducs.
     */
    public function getPourcentEffectifDucs() {
        return $this->pourcentEffectifDucs;
    }

    /**
     * Get the pourcent remu hor.
     *
     * @return float Returns the pourcent remu hor.
     */
    public function getPourcentRemuHor() {
        return $this->pourcentRemuHor;
    }

    /**
     * Get the prenom.
     *
     * @return string Returns the prenom.
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Get the prenom conjoint.
     *
     * @return string Returns the prenom conjoint.
     */
    public function getPrenomConjoint() {
        return $this->prenomConjoint;
    }

    /**
     * Get the prime.
     *
     * @return bool Returns the prime.
     */
    public function getPrime() {
        return $this->prime;
    }

    /**
     * Get the prud college.
     *
     * @return string Returns the prud college.
     */
    public function getPrudCollege() {
        return $this->prudCollege;
    }

    /**
     * Get the prud lieu vote.
     *
     * @return string Returns the prud lieu vote.
     */
    public function getPrudLieuVote() {
        return $this->prudLieuVote;
    }

    /**
     * Get the prud section.
     *
     * @return string Returns the prud section.
     */
    public function getPrudSection() {
        return $this->prudSection;
    }

    /**
     * Get the qualification.
     *
     * @return string Returns the qualification.
     */
    public function getQualification() {
        return $this->qualification;
    }

    /**
     * Get the regle calcul.
     *
     * @return string Returns the regle calcul.
     */
    public function getRegleCalcul() {
        return $this->regleCalcul;
    }

    /**
     * Get the regroup virement.
     *
     * @return string Returns the regroup virement.
     */
    public function getRegroupVirement() {
        return $this->regroupVirement;
    }

    /**
     * Get the regul tds.
     *
     * @return bool Returns the regul tds.
     */
    public function getRegulTds() {
        return $this->regulTds;
    }

    /**
     * Get the rib.
     *
     * @return string Returns the rib.
     */
    public function getRib() {
        return $this->rib;
    }

    /**
     * Get the salaire base.
     *
     * @return float Returns the salaire base.
     */
    public function getSalaireBase() {
        return $this->salaireBase;
    }

    /**
     * Get the service.
     *
     * @return string Returns the service.
     */
    public function getService() {
        return $this->service;
    }

    /**
     * Get the sexe.
     *
     * @return string Returns the sexe.
     */
    public function getSexe() {
        return $this->sexe;
    }

    /**
     * Get the situation fam.
     *
     * @return string Returns the situation fam.
     */
    public function getSituationFam() {
        return $this->situationFam;
    }

    /**
     * Get the taux1.
     *
     * @return float Returns the taux1.
     */
    public function getTaux1() {
        return $this->taux1;
    }

    /**
     * Get the taux2.
     *
     * @return float Returns the taux2.
     */
    public function getTaux2() {
        return $this->taux2;
    }

    /**
     * Get the taux3.
     *
     * @return float Returns the taux3.
     */
    public function getTaux3() {
        return $this->taux3;
    }

    /**
     * Get the taux4.
     *
     * @return float Returns the taux4.
     */
    public function getTaux4() {
        return $this->taux4;
    }

    /**
     * Get the taux5.
     *
     * @return float Returns the taux5.
     */
    public function getTaux5() {
        return $this->taux5;
    }

    /**
     * Get the taux absence.
     *
     * @return float Returns the taux absence.
     */
    public function getTauxAbsence() {
        return $this->tauxAbsence;
    }

    /**
     * Get the taux ancien.
     *
     * @return float Returns the taux ancien.
     */
    public function getTauxAncien() {
        return $this->tauxAncien;
    }

    /**
     * Get the taux h sup.
     *
     * @return float Returns the taux h sup.
     */
    public function getTauxHSup() {
        return $this->tauxHSup;
    }

    /**
     * Get the taux pension civile.
     *
     * @return float Returns the taux pension civile.
     */
    public function getTauxPensionCivile() {
        return $this->tauxPensionCivile;
    }

    /**
     * Get the taux pension militaire.
     *
     * @return float Returns the taux pension militaire.
     */
    public function getTauxPensionMilitaire() {
        return $this->tauxPensionMilitaire;
    }

    /**
     * Get the taxe salaire.
     *
     * @return bool Returns the taxe salaire.
     */
    public function getTaxeSalaire() {
        return $this->taxeSalaire;
    }

    /**
     * Get the tds100.
     *
     * @return float Returns the tds100.
     */
    public function getTds100() {
        return $this->tds100;
    }

    /**
     * Get the tds102.
     *
     * @return float Returns the tds102.
     */
    public function getTds102() {
        return $this->tds102;
    }

    /**
     * Get the tds103.
     *
     * @return float Returns the tds103.
     */
    public function getTds103() {
        return $this->tds103;
    }

    /**
     * Get the tds105.
     *
     * @return float Returns the tds105.
     */
    public function getTds105() {
        return $this->tds105;
    }

    /**
     * Get the tds107.
     *
     * @return bool Returns the tds107.
     */
    public function getTds107() {
        return $this->tds107;
    }

    /**
     * Get the tds108.
     *
     * @return bool Returns the tds108.
     */
    public function getTds108() {
        return $this->tds108;
    }

    /**
     * Get the tds109.
     *
     * @return bool Returns the tds109.
     */
    public function getTds109() {
        return $this->tds109;
    }

    /**
     * Get the tds110.
     *
     * @return bool Returns the tds110.
     */
    public function getTds110() {
        return $this->tds110;
    }

    /**
     * Get the tds112.
     *
     * @return float Returns the tds112.
     */
    public function getTds112() {
        return $this->tds112;
    }

    /**
     * Get the tds113.
     *
     * @return bool Returns the tds113.
     */
    public function getTds113() {
        return $this->tds113;
    }

    /**
     * Get the tds117.
     *
     * @return float Returns the tds117.
     */
    public function getTds117() {
        return $this->tds117;
    }

    /**
     * Get the tds119.
     *
     * @return bool Returns the tds119.
     */
    public function getTds119() {
        return $this->tds119;
    }

    /**
     * Get the tds120.
     *
     * @return bool Returns the tds120.
     */
    public function getTds120() {
        return $this->tds120;
    }

    /**
     * Get the tds121.
     *
     * @return bool Returns the tds121.
     */
    public function getTds121() {
        return $this->tds121;
    }

    /**
     * Get the tds122.
     *
     * @return bool Returns the tds122.
     */
    public function getTds122() {
        return $this->tds122;
    }

    /**
     * Get the tds125.
     *
     * @return float Returns the tds125.
     */
    public function getTds125() {
        return $this->tds125;
    }

    /**
     * Get the tds127.
     *
     * @return float Returns the tds127.
     */
    public function getTds127() {
        return $this->tds127;
    }

    /**
     * Get the tds128.
     *
     * @return string Returns the tds128.
     */
    public function getTds128() {
        return $this->tds128;
    }

    /**
     * Get the tds132.
     *
     * @return float Returns the tds132.
     */
    public function getTds132() {
        return $this->tds132;
    }

    /**
     * Get the tds133.
     *
     * @return string Returns the tds133.
     */
    public function getTds133() {
        return $this->tds133;
    }

    /**
     * Get the tds134.
     *
     * @return float Returns the tds134.
     */
    public function getTds134() {
        return $this->tds134;
    }

    /**
     * Get the tds135.
     *
     * @return float Returns the tds135.
     */
    public function getTds135() {
        return $this->tds135;
    }

    /**
     * Get the tds136.
     *
     * @return float Returns the tds136.
     */
    public function getTds136() {
        return $this->tds136;
    }

    /**
     * Get the tds138.
     *
     * @return string Returns the tds138.
     */
    public function getTds138() {
        return $this->tds138;
    }

    /**
     * Get the tds139.
     *
     * @return string Returns the tds139.
     */
    public function getTds139() {
        return $this->tds139;
    }

    /**
     * Get the tds141.
     *
     * @return float Returns the tds141.
     */
    public function getTds141() {
        return $this->tds141;
    }

    /**
     * Get the tds59.
     *
     * @return string Returns the tds59.
     */
    public function getTds59() {
        return $this->tds59;
    }

    /**
     * Get the tds60.
     *
     * @return bool Returns the tds60.
     */
    public function getTds60() {
        return $this->tds60;
    }

    /**
     * Get the tds61.
     *
     * @return string Returns the tds61.
     */
    public function getTds61() {
        return $this->tds61;
    }

    /**
     * Get the tds75.
     *
     * @return int Returns the tds75.
     */
    public function getTds75() {
        return $this->tds75;
    }

    /**
     * Get the tds76.
     *
     * @return string Returns the tds76.
     */
    public function getTds76() {
        return $this->tds76;
    }

    /**
     * Get the tds77.
     *
     * @return string Returns the tds77.
     */
    public function getTds77() {
        return $this->tds77;
    }

    /**
     * Get the tds78.
     *
     * @return bool Returns the tds78.
     */
    public function getTds78() {
        return $this->tds78;
    }

    /**
     * Get the tds81.
     *
     * @return float Returns the tds81.
     */
    public function getTds81() {
        return $this->tds81;
    }

    /**
     * Get the tds82.
     *
     * @return float Returns the tds82.
     */
    public function getTds82() {
        return $this->tds82;
    }

    /**
     * Get the tds84.
     *
     * @return float Returns the tds84.
     */
    public function getTds84() {
        return $this->tds84;
    }

    /**
     * Get the tds85.
     *
     * @return float Returns the tds85.
     */
    public function getTds85() {
        return $this->tds85;
    }

    /**
     * Get the tds86.
     *
     * @return float Returns the tds86.
     */
    public function getTds86() {
        return $this->tds86;
    }

    /**
     * Get the tds87.
     *
     * @return float Returns the tds87.
     */
    public function getTds87() {
        return $this->tds87;
    }

    /**
     * Get the tds88.
     *
     * @return float Returns the tds88.
     */
    public function getTds88() {
        return $this->tds88;
    }

    /**
     * Get the tds89.
     *
     * @return float Returns the tds89.
     */
    public function getTds89() {
        return $this->tds89;
    }

    /**
     * Get the tds90.
     *
     * @return float Returns the tds90.
     */
    public function getTds90() {
        return $this->tds90;
    }

    /**
     * Get the tds91.
     *
     * @return float Returns the tds91.
     */
    public function getTds91() {
        return $this->tds91;
    }

    /**
     * Get the tds92.
     *
     * @return float Returns the tds92.
     */
    public function getTds92() {
        return $this->tds92;
    }

    /**
     * Get the tds93.
     *
     * @return float Returns the tds93.
     */
    public function getTds93() {
        return $this->tds93;
    }

    /**
     * Get the tds94.
     *
     * @return float Returns the tds94.
     */
    public function getTds94() {
        return $this->tds94;
    }

    /**
     * Get the tds95.
     *
     * @return float Returns the tds95.
     */
    public function getTds95() {
        return $this->tds95;
    }

    /**
     * Get the tel1.
     *
     * @return string Returns the tel1.
     */
    public function getTel1() {
        return $this->tel1;
    }

    /**
     * Get the tel conjoint.
     *
     * @return string Returns the tel conjoint.
     */
    public function getTelConjoint() {
        return $this->telConjoint;
    }

    /**
     * Get the tel pers a prevenir.
     *
     * @return string Returns the tel pers a prevenir.
     */
    public function getTelPersAPrevenir() {
        return $this->telPersAPrevenir;
    }

    /**
     * Get the temps passe.
     *
     * @return bool Returns the temps passe.
     */
    public function getTempsPasse() {
        return $this->tempsPasse;
    }

    /**
     * Get the titre.
     *
     * @return string Returns the titre.
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Get the transfert entree1.
     *
     * @return bool Returns the transfert entree1.
     */
    public function getTransfertEntree1() {
        return $this->transfertEntree1;
    }

    /**
     * Get the transfert entree2.
     *
     * @return bool Returns the transfert entree2.
     */
    public function getTransfertEntree2() {
        return $this->transfertEntree2;
    }

    /**
     * Get the transfert sortie1.
     *
     * @return bool Returns the transfert sortie1.
     */
    public function getTransfertSortie1() {
        return $this->transfertSortie1;
    }

    /**
     * Get the transfert sortie2.
     *
     * @return bool Returns the transfert sortie2.
     */
    public function getTransfertSortie2() {
        return $this->transfertSortie2;
    }

    /**
     * Get the travaille jf.
     *
     * @return bool Returns the travaille jf.
     */
    public function getTravailleJf() {
        return $this->travailleJf;
    }

    /**
     * Get the type contrat.
     *
     * @return string Returns the type contrat.
     */
    public function getTypeContrat() {
        return $this->typeContrat;
    }

    /**
     * Get the type nationalite.
     *
     * @return string Returns the type nationalite.
     */
    public function getTypeNationalite() {
        return $this->typeNationalite;
    }

    /**
     * Get the type paiement.
     *
     * @return string Returns the type paiement.
     */
    public function getTypePaiement() {
        return $this->typePaiement;
    }

    /**
     * Get the vrp multicarte.
     *
     * @return bool Returns the vrp multicarte.
     */
    public function getVrpMulticarte() {
        return $this->vrpMulticarte;
    }

    /**
     * Get the plafond ss2.
     *
     * @return float Returns the plafond ss2.
     */
    public function getplafondSs2() {
        return $this->plafondSs2;
    }

    /**
     * Set the a transferer en p.
     *
     * @param bool $aTransfererEnP The a transferer en p.
     * @return Employes Returns this Employes.
     */
    public function setATransfererEnP($aTransfererEnP) {
        $this->aTransfererEnP = $aTransfererEnP;
        return $this;
    }

    /**
     * Set the administratif.
     *
     * @param bool $administratif The administratif.
     * @return Employes Returns this Employes.
     */
    public function setAdministratif($administratif) {
        $this->administratif = $administratif;
        return $this;
    }

    /**
     * Set the alleg particulier.
     *
     * @param bool $allegParticulier The alleg particulier.
     * @return Employes Returns this Employes.
     */
    public function setAllegParticulier($allegParticulier) {
        $this->allegParticulier = $allegParticulier;
        return $this;
    }

    /**
     * Set the autre alleg.
     *
     * @param bool $autreAlleg The autre alleg.
     * @return Employes Returns this Employes.
     */
    public function setAutreAlleg($autreAlleg) {
        $this->autreAlleg = $autreAlleg;
        return $this;
    }

    /**
     * Set the btq.
     *
     * @param string $btq The btq.
     * @return Employes Returns this Employes.
     */
    public function setBtq($btq) {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string $bureauDistributeur The bureau distributeur.
     * @return Employes Returns this Employes.
     */
    public function setBureauDistributeur($bureauDistributeur) {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the calcul particip.
     *
     * @param bool $calculParticip The calcul particip.
     * @return Employes Returns this Employes.
     */
    public function setCalculParticip($calculParticip) {
        $this->calculParticip = $calculParticip;
        return $this;
    }

    /**
     * Set the carte sejour delivree le.
     *
     * @param DateTime|null $carteSejourDelivreeLe The carte sejour delivree le.
     * @return Employes Returns this Employes.
     */
    public function setCarteSejourDelivreeLe(DateTime $carteSejourDelivreeLe = null) {
        $this->carteSejourDelivreeLe = $carteSejourDelivreeLe;
        return $this;
    }

    /**
     * Set the carte sejour expire le.
     *
     * @param DateTime|null $carteSejourExpireLe The carte sejour expire le.
     * @return Employes Returns this Employes.
     */
    public function setCarteSejourExpireLe(DateTime $carteSejourExpireLe = null) {
        $this->carteSejourExpireLe = $carteSejourExpireLe;
        return $this;
    }

    /**
     * Set the carte travail delivree le.
     *
     * @param DateTime|null $carteTravailDelivreeLe The carte travail delivree le.
     * @return Employes Returns this Employes.
     */
    public function setCarteTravailDelivreeLe(DateTime $carteTravailDelivreeLe = null) {
        $this->carteTravailDelivreeLe = $carteTravailDelivreeLe;
        return $this;
    }

    /**
     * Set the carte travail expire le.
     *
     * @param DateTime|null $carteTravailExpireLe The carte travail expire le.
     * @return Employes Returns this Employes.
     */
    public function setCarteTravailExpireLe(DateTime $carteTravailExpireLe = null) {
        $this->carteTravailExpireLe = $carteTravailExpireLe;
        return $this;
    }

    /**
     * Set the cas part ss.
     *
     * @param bool $casPartSs The cas part ss.
     * @return Employes Returns this Employes.
     */
    public function setCasPartSs($casPartSs) {
        $this->casPartSs = $casPartSs;
        return $this;
    }

    /**
     * Set the categ population.
     *
     * @param string $categPopulation The categ population.
     * @return Employes Returns this Employes.
     */
    public function setCategPopulation($categPopulation) {
        $this->categPopulation = $categPopulation;
        return $this;
    }

    /**
     * Set the categ salarie.
     *
     * @param string $categSalarie The categ salarie.
     * @return Employes Returns this Employes.
     */
    public function setCategSalarie($categSalarie) {
        $this->categSalarie = $categSalarie;
        return $this;
    }

    /**
     * Set the categorie permis.
     *
     * @param string $categoriePermis The categorie permis.
     * @return Employes Returns this Employes.
     */
    public function setCategoriePermis($categoriePermis) {
        $this->categoriePermis = $categoriePermis;
        return $this;
    }

    /**
     * Set the cddcdi.
     *
     * @param bool $cddcdi The cddcdi.
     * @return Employes Returns this Employes.
     */
    public function setCddcdi($cddcdi) {
        $this->cddcdi = $cddcdi;
        return $this;
    }

    /**
     * Set the classification.
     *
     * @param string $classification The classification.
     * @return Employes Returns this Employes.
     */
    public function setClassification($classification) {
        $this->classification = $classification;
        return $this;
    }

    /**
     * Set the cle deux.
     *
     * @param string $cleDeux The cle deux.
     * @return Employes Returns this Employes.
     */
    public function setCleDeux($cleDeux) {
        $this->cleDeux = $cleDeux;
        return $this;
    }

    /**
     * Set the code at.
     *
     * @param int $codeAt The code at.
     * @return Employes Returns this Employes.
     */
    public function setCodeAt($codeAt) {
        $this->codeAt = $codeAt;
        return $this;
    }

    /**
     * Set the code centre urssaf.
     *
     * @param string $codeCentreUrssaf The code centre urssaf.
     * @return Employes Returns this Employes.
     */
    public function setCodeCentreUrssaf($codeCentreUrssaf) {
        $this->codeCentreUrssaf = $codeCentreUrssaf;
        return $this;
    }

    /**
     * Set the code convention.
     *
     * @param string $codeConvention The code convention.
     * @return Employes Returns this Employes.
     */
    public function setCodeConvention($codeConvention) {
        $this->codeConvention = $codeConvention;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return Employes Returns this Employes.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code naf.
     *
     * @param int $codeNaf The code naf.
     * @return Employes Returns this Employes.
     */
    public function setCodeNaf($codeNaf) {
        $this->codeNaf = $codeNaf;
        return $this;
    }

    /**
     * Set the code officiel commune.
     *
     * @param string $codeOfficielCommune The code officiel commune.
     * @return Employes Returns this Employes.
     */
    public function setCodeOfficielCommune($codeOfficielCommune) {
        $this->codeOfficielCommune = $codeOfficielCommune;
        return $this;
    }

    /**
     * Set the code pays naissance.
     *
     * @param string $codePaysNaissance The code pays naissance.
     * @return Employes Returns this Employes.
     */
    public function setCodePaysNaissance($codePaysNaissance) {
        $this->codePaysNaissance = $codePaysNaissance;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string $codePostal The code postal.
     * @return Employes Returns this Employes.
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code type sal.
     *
     * @param string $codeTypeSal The code type sal.
     * @return Employes Returns this Employes.
     */
    public function setCodeTypeSal($codeTypeSal) {
        $this->codeTypeSal = $codeTypeSal;
        return $this;
    }

    /**
     * Set the commune naissance.
     *
     * @param string $communeNaissance The commune naissance.
     * @return Employes Returns this Employes.
     */
    public function setCommuneNaissance($communeNaissance) {
        $this->communeNaissance = $communeNaissance;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string $complement The complement.
     * @return Employes Returns this Employes.
     */
    public function setComplement($complement) {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the compte tiers.
     *
     * @param string $compteTiers The compte tiers.
     * @return Employes Returns this Employes.
     */
    public function setCompteTiers($compteTiers) {
        $this->compteTiers = $compteTiers;
        return $this;
    }

    /**
     * Set the cpt accompte.
     *
     * @param int $cptAccompte The cpt accompte.
     * @return Employes Returns this Employes.
     */
    public function setCptAccompte($cptAccompte) {
        $this->cptAccompte = $cptAccompte;
        return $this;
    }

    /**
     * Set the ctrl taux sal base.
     *
     * @param bool $ctrlTauxSalBase The ctrl taux sal base.
     * @return Employes Returns this Employes.
     */
    public function setCtrlTauxSalBase($ctrlTauxSalBase) {
        $this->ctrlTauxSalBase = $ctrlTauxSalBase;
        return $this;
    }

    /**
     * Set the cum30 ss.
     *
     * @param float $cum30Ss The cum30 ss.
     * @return Employes Returns this Employes.
     */
    public function setCum30Ss($cum30Ss) {
        $this->cum30Ss = $cum30Ss;
        return $this;
    }

    /**
     * Set the cum base csg.
     *
     * @param float $cumBaseCsg The cum base csg.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseCsg($cumBaseCsg) {
        $this->cumBaseCsg = $cumBaseCsg;
        return $this;
    }

    /**
     * Set the cum base gmp.
     *
     * @param float $cumBaseGmp The cum base gmp.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseGmp($cumBaseGmp) {
        $this->cumBaseGmp = $cumBaseGmp;
        return $this;
    }

    /**
     * Set the cum base ss.
     *
     * @param float $cumBaseSs The cum base ss.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseSs($cumBaseSs) {
        $this->cumBaseSs = $cumBaseSs;
        return $this;
    }

    /**
     * Set the cum base tr a.
     *
     * @param float $cumBaseTrA The cum base tr a.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseTrA($cumBaseTrA) {
        $this->cumBaseTrA = $cumBaseTrA;
        return $this;
    }

    /**
     * Set the cum base tr a caisse1.
     *
     * @param float $cumBaseTrACaisse1 The cum base tr a caisse1.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseTrACaisse1($cumBaseTrACaisse1) {
        $this->cumBaseTrACaisse1 = $cumBaseTrACaisse1;
        return $this;
    }

    /**
     * Set the cum base tr a caisse2.
     *
     * @param float $cumBaseTrACaisse2 The cum base tr a caisse2.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseTrACaisse2($cumBaseTrACaisse2) {
        $this->cumBaseTrACaisse2 = $cumBaseTrACaisse2;
        return $this;
    }

    /**
     * Set the cum base tr a caisse3.
     *
     * @param float $cumBaseTrACaisse3 The cum base tr a caisse3.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseTrACaisse3($cumBaseTrACaisse3) {
        $this->cumBaseTrACaisse3 = $cumBaseTrACaisse3;
        return $this;
    }

    /**
     * Set the cum base tr b.
     *
     * @param float $cumBaseTrB The cum base tr b.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseTrB($cumBaseTrB) {
        $this->cumBaseTrB = $cumBaseTrB;
        return $this;
    }

    /**
     * Set the cum base tr b caisse1.
     *
     * @param float $cumBaseTrBCaisse1 The cum base tr b caisse1.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseTrBCaisse1($cumBaseTrBCaisse1) {
        $this->cumBaseTrBCaisse1 = $cumBaseTrBCaisse1;
        return $this;
    }

    /**
     * Set the cum base tr b caisse2.
     *
     * @param float $cumBaseTrBCaisse2 The cum base tr b caisse2.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseTrBCaisse2($cumBaseTrBCaisse2) {
        $this->cumBaseTrBCaisse2 = $cumBaseTrBCaisse2;
        return $this;
    }

    /**
     * Set the cum base tr b caisse3.
     *
     * @param float $cumBaseTrBCaisse3 The cum base tr b caisse3.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseTrBCaisse3($cumBaseTrBCaisse3) {
        $this->cumBaseTrBCaisse3 = $cumBaseTrBCaisse3;
        return $this;
    }

    /**
     * Set the cum base tr c.
     *
     * @param float $cumBaseTrC The cum base tr c.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseTrC($cumBaseTrC) {
        $this->cumBaseTrC = $cumBaseTrC;
        return $this;
    }

    /**
     * Set the cum base tr c caisse1.
     *
     * @param float $cumBaseTrCCaisse1 The cum base tr c caisse1.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseTrCCaisse1($cumBaseTrCCaisse1) {
        $this->cumBaseTrCCaisse1 = $cumBaseTrCCaisse1;
        return $this;
    }

    /**
     * Set the cum base tr c caisse2.
     *
     * @param float $cumBaseTrCCaisse2 The cum base tr c caisse2.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseTrCCaisse2($cumBaseTrCCaisse2) {
        $this->cumBaseTrCCaisse2 = $cumBaseTrCCaisse2;
        return $this;
    }

    /**
     * Set the cum base tr c caisse3.
     *
     * @param float $cumBaseTrCCaisse3 The cum base tr c caisse3.
     * @return Employes Returns this Employes.
     */
    public function setCumBaseTrCCaisse3($cumBaseTrCCaisse3) {
        $this->cumBaseTrCCaisse3 = $cumBaseTrCCaisse3;
        return $this;
    }

    /**
     * Set the cum brut abat non lim.
     *
     * @param float $cumBrutAbatNonLim The cum brut abat non lim.
     * @return Employes Returns this Employes.
     */
    public function setCumBrutAbatNonLim($cumBrutAbatNonLim) {
        $this->cumBrutAbatNonLim = $cumBrutAbatNonLim;
        return $this;
    }

    /**
     * Set the cum brut al.
     *
     * @param float $cumBrutAl The cum brut al.
     * @return Employes Returns this Employes.
     */
    public function setCumBrutAl($cumBrutAl) {
        $this->cumBrutAl = $cumBrutAl;
        return $this;
    }

    /**
     * Set the cum brut non abattu.
     *
     * @param float $cumBrutNonAbattu The cum brut non abattu.
     * @return Employes Returns this Employes.
     */
    public function setCumBrutNonAbattu($cumBrutNonAbattu) {
        $this->cumBrutNonAbattu = $cumBrutNonAbattu;
        return $this;
    }

    /**
     * Set the cum cp dus.
     *
     * @param float $cumCpDus The cum cp dus.
     * @return Employes Returns this Employes.
     */
    public function setCumCpDus($cumCpDus) {
        $this->cumCpDus = $cumCpDus;
        return $this;
    }

    /**
     * Set the cum cp dus1.
     *
     * @param float $cumCpDus1 The cum cp dus1.
     * @return Employes Returns this Employes.
     */
    public function setCumCpDus1($cumCpDus1) {
        $this->cumCpDus1 = $cumCpDus1;
        return $this;
    }

    /**
     * Set the cum cp pris.
     *
     * @param float $cumCpPris The cum cp pris.
     * @return Employes Returns this Employes.
     */
    public function setCumCpPris($cumCpPris) {
        $this->cumCpPris = $cumCpPris;
        return $this;
    }

    /**
     * Set the cum cp pris1.
     *
     * @param float $cumCpPris1 The cum cp pris1.
     * @return Employes Returns this Employes.
     */
    public function setCumCpPris1($cumCpPris1) {
        $this->cumCpPris1 = $cumCpPris1;
        return $this;
    }

    /**
     * Set the cum h repos remplace.
     *
     * @param float $cumHReposRemplace The cum h repos remplace.
     * @return Employes Returns this Employes.
     */
    public function setCumHReposRemplace($cumHReposRemplace) {
        $this->cumHReposRemplace = $cumHReposRemplace;
        return $this;
    }

    /**
     * Set the cum h service.
     *
     * @param float $cumHService The cum h service.
     * @return Employes Returns this Employes.
     */
    public function setCumHService($cumHService) {
        $this->cumHService = $cumHService;
        return $this;
    }

    /**
     * Set the cum h sup.
     *
     * @param float $cumHSup The cum h sup.
     * @return Employes Returns this Employes.
     */
    public function setCumHSup($cumHSup) {
        $this->cumHSup = $cumHSup;
        return $this;
    }

    /**
     * Set the cum h sup rcit.
     *
     * @param float $cumHSupRcit The cum h sup rcit.
     * @return Employes Returns this Employes.
     */
    public function setCumHSupRcit($cumHSupRcit) {
        $this->cumHSupRcit = $cumHSupRcit;
        return $this;
    }

    /**
     * Set the cum heure paye.
     *
     * @param float $cumHeurePaye The cum heure paye.
     * @return Employes Returns this Employes.
     */
    public function setCumHeurePaye($cumHeurePaye) {
        $this->cumHeurePaye = $cumHeurePaye;
        return $this;
    }

    /**
     * Set the cum heure trav.
     *
     * @param float $cumHeureTrav The cum heure trav.
     * @return Employes Returns this Employes.
     */
    public function setCumHeureTrav($cumHeureTrav) {
        $this->cumHeureTrav = $cumHeureTrav;
        return $this;
    }

    /**
     * Set the cum j repos recup.
     *
     * @param float $cumJReposRecup The cum j repos recup.
     * @return Employes Returns this Employes.
     */
    public function setCumJReposRecup($cumJReposRecup) {
        $this->cumJReposRecup = $cumJReposRecup;
        return $this;
    }

    /**
     * Set the cum jour paye.
     *
     * @param float $cumJourPaye The cum jour paye.
     * @return Employes Returns this Employes.
     */
    public function setCumJourPaye($cumJourPaye) {
        $this->cumJourPaye = $cumJourPaye;
        return $this;
    }

    /**
     * Set the cum jour trav.
     *
     * @param float $cumJourTrav The cum jour trav.
     * @return Employes Returns this Employes.
     */
    public function setCumJourTrav($cumJourTrav) {
        $this->cumJourTrav = $cumJourTrav;
        return $this;
    }

    /**
     * Set the cum mt cp pris.
     *
     * @param float $cumMtCpPris The cum mt cp pris.
     * @return Employes Returns this Employes.
     */
    public function setCumMtCpPris($cumMtCpPris) {
        $this->cumMtCpPris = $cumMtCpPris;
        return $this;
    }

    /**
     * Set the cum mt cp pris1.
     *
     * @param float $cumMtCpPris1 The cum mt cp pris1.
     * @return Employes Returns this Employes.
     */
    public function setCumMtCpPris1($cumMtCpPris1) {
        $this->cumMtCpPris1 = $cumMtCpPris1;
        return $this;
    }

    /**
     * Set the cum net a payer.
     *
     * @param float $cumNetAPayer The cum net a payer.
     * @return Employes Returns this Employes.
     */
    public function setCumNetAPayer($cumNetAPayer) {
        $this->cumNetAPayer = $cumNetAPayer;
        return $this;
    }

    /**
     * Set the cum net imposable.
     *
     * @param float $cumNetImposable The cum net imposable.
     * @return Employes Returns this Employes.
     */
    public function setCumNetImposable($cumNetImposable) {
        $this->cumNetImposable = $cumNetImposable;
        return $this;
    }

    /**
     * Set the cum plaf1 caisse1.
     *
     * @param float $cumPlaf1Caisse1 The cum plaf1 caisse1.
     * @return Employes Returns this Employes.
     */
    public function setCumPlaf1Caisse1($cumPlaf1Caisse1) {
        $this->cumPlaf1Caisse1 = $cumPlaf1Caisse1;
        return $this;
    }

    /**
     * Set the cum plaf1 caisse2.
     *
     * @param float $cumPlaf1Caisse2 The cum plaf1 caisse2.
     * @return Employes Returns this Employes.
     */
    public function setCumPlaf1Caisse2($cumPlaf1Caisse2) {
        $this->cumPlaf1Caisse2 = $cumPlaf1Caisse2;
        return $this;
    }

    /**
     * Set the cum plaf1 caisse3.
     *
     * @param float $cumPlaf1Caisse3 The cum plaf1 caisse3.
     * @return Employes Returns this Employes.
     */
    public function setCumPlaf1Caisse3($cumPlaf1Caisse3) {
        $this->cumPlaf1Caisse3 = $cumPlaf1Caisse3;
        return $this;
    }

    /**
     * Set the cum plaf2 caisse1.
     *
     * @param float $cumPlaf2Caisse1 The cum plaf2 caisse1.
     * @return Employes Returns this Employes.
     */
    public function setCumPlaf2Caisse1($cumPlaf2Caisse1) {
        $this->cumPlaf2Caisse1 = $cumPlaf2Caisse1;
        return $this;
    }

    /**
     * Set the cum plaf2 caisse2.
     *
     * @param float $cumPlaf2Caisse2 The cum plaf2 caisse2.
     * @return Employes Returns this Employes.
     */
    public function setCumPlaf2Caisse2($cumPlaf2Caisse2) {
        $this->cumPlaf2Caisse2 = $cumPlaf2Caisse2;
        return $this;
    }

    /**
     * Set the cum plaf2 caisse3.
     *
     * @param float $cumPlaf2Caisse3 The cum plaf2 caisse3.
     * @return Employes Returns this Employes.
     */
    public function setCumPlaf2Caisse3($cumPlaf2Caisse3) {
        $this->cumPlaf2Caisse3 = $cumPlaf2Caisse3;
        return $this;
    }

    /**
     * Set the cum plafond gmp.
     *
     * @param float $cumPlafondGmp The cum plafond gmp.
     * @return Employes Returns this Employes.
     */
    public function setCumPlafondGmp($cumPlafondGmp) {
        $this->cumPlafondGmp = $cumPlafondGmp;
        return $this;
    }

    /**
     * Set the cum plafond ss1.
     *
     * @param float $cumPlafondSs1 The cum plafond ss1.
     * @return Employes Returns this Employes.
     */
    public function setCumPlafondSs1($cumPlafondSs1) {
        $this->cumPlafondSs1 = $cumPlafondSs1;
        return $this;
    }

    /**
     * Set the cum plafond ss2.
     *
     * @param float $cumPlafondSs2 The cum plafond ss2.
     * @return Employes Returns this Employes.
     */
    public function setCumPlafondSs2($cumPlafondSs2) {
        $this->cumPlafondSs2 = $cumPlafondSs2;
        return $this;
    }

    /**
     * Set the cum prov cp.
     *
     * @param float $cumProvCp The cum prov cp.
     * @return Employes Returns this Employes.
     */
    public function setCumProvCp($cumProvCp) {
        $this->cumProvCp = $cumProvCp;
        return $this;
    }

    /**
     * Set the cum prov cp1.
     *
     * @param float $cumProvCp1 The cum prov cp1.
     * @return Employes Returns this Employes.
     */
    public function setCumProvCp1($cumProvCp1) {
        $this->cumProvCp1 = $cumProvCp1;
        return $this;
    }

    /**
     * Set the cum repos comp.
     *
     * @param float $cumReposComp The cum repos comp.
     * @return Employes Returns this Employes.
     */
    public function setCumReposComp($cumReposComp) {
        $this->cumReposComp = $cumReposComp;
        return $this;
    }

    /**
     * Set the date ancien.
     *
     * @param DateTime|null $dateAncien The date ancien.
     * @return Employes Returns this Employes.
     */
    public function setDateAncien(DateTime $dateAncien = null) {
        $this->dateAncien = $dateAncien;
        return $this;
    }

    /**
     * Set the date embauche.
     *
     * @param DateTime|null $dateEmbauche The date embauche.
     * @return Employes Returns this Employes.
     */
    public function setDateEmbauche(DateTime $dateEmbauche = null) {
        $this->dateEmbauche = $dateEmbauche;
        return $this;
    }

    /**
     * Set the date entree1.
     *
     * @param DateTime|null $dateEntree1 The date entree1.
     * @return Employes Returns this Employes.
     */
    public function setDateEntree1(DateTime $dateEntree1 = null) {
        $this->dateEntree1 = $dateEntree1;
        return $this;
    }

    /**
     * Set the date entree2.
     *
     * @param DateTime|null $dateEntree2 The date entree2.
     * @return Employes Returns this Employes.
     */
    public function setDateEntree2(DateTime $dateEntree2 = null) {
        $this->dateEntree2 = $dateEntree2;
        return $this;
    }

    /**
     * Set the date licenciement.
     *
     * @param DateTime|null $dateLicenciement The date licenciement.
     * @return Employes Returns this Employes.
     */
    public function setDateLicenciement(DateTime $dateLicenciement = null) {
        $this->dateLicenciement = $dateLicenciement;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     * @return Employes Returns this Employes.
     */
    public function setDateModification(DateTime $dateModification = null) {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the date naiss conjoint.
     *
     * @param DateTime|null $dateNaissConjoint The date naiss conjoint.
     * @return Employes Returns this Employes.
     */
    public function setDateNaissConjoint(DateTime $dateNaissConjoint = null) {
        $this->dateNaissConjoint = $dateNaissConjoint;
        return $this;
    }

    /**
     * Set the date naissance.
     *
     * @param DateTime|null $dateNaissance The date naissance.
     * @return Employes Returns this Employes.
     */
    public function setDateNaissance(DateTime $dateNaissance = null) {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * Set the date sortie1.
     *
     * @param DateTime|null $dateSortie1 The date sortie1.
     * @return Employes Returns this Employes.
     */
    public function setDateSortie1(DateTime $dateSortie1 = null) {
        $this->dateSortie1 = $dateSortie1;
        return $this;
    }

    /**
     * Set the date sortie2.
     *
     * @param DateTime|null $dateSortie2 The date sortie2.
     * @return Employes Returns this Employes.
     */
    public function setDateSortie2(DateTime $dateSortie2 = null) {
        $this->dateSortie2 = $dateSortie2;
        return $this;
    }

    /**
     * Set the date visite medicale.
     *
     * @param DateTime|null $dateVisiteMedicale The date visite medicale.
     * @return Employes Returns this Employes.
     */
    public function setDateVisiteMedicale(DateTime $dateVisiteMedicale = null) {
        $this->dateVisiteMedicale = $dateVisiteMedicale;
        return $this;
    }

    /**
     * Set the date visite reprise.
     *
     * @param DateTime|null $dateVisiteReprise The date visite reprise.
     * @return Employes Returns this Employes.
     */
    public function setDateVisiteReprise(DateTime $dateVisiteReprise = null) {
        $this->dateVisiteReprise = $dateVisiteReprise;
        return $this;
    }

    /**
     * Set the dept naissance.
     *
     * @param string $deptNaissance The dept naissance.
     * @return Employes Returns this Employes.
     */
    public function setDeptNaissance($deptNaissance) {
        $this->deptNaissance = $deptNaissance;
        return $this;
    }

    /**
     * Set the dern num prime.
     *
     * @param int $dernNumPrime The dern num prime.
     * @return Employes Returns this Employes.
     */
    public function setDernNumPrime($dernNumPrime) {
        $this->dernNumPrime = $dernNumPrime;
        return $this;
    }

    /**
     * Set the dim type2.
     *
     * @param bool $dimType2 The dim type2.
     * @return Employes Returns this Employes.
     */
    public function setDimType2($dimType2) {
        $this->dimType2 = $dimType2;
        return $this;
    }

    /**
     * Set the dir non salarie.
     *
     * @param bool $dirNonSalarie The dir non salarie.
     * @return Employes Returns this Employes.
     */
    public function setDirNonSalarie($dirNonSalarie) {
        $this->dirNonSalarie = $dirNonSalarie;
        return $this;
    }

    /**
     * Set the dom banque.
     *
     * @param string $domBanque The dom banque.
     * @return Employes Returns this Employes.
     */
    public function setDomBanque($domBanque) {
        $this->domBanque = $domBanque;
        return $this;
    }

    /**
     * Set the ed taux sal base.
     *
     * @param bool $edTauxSalBase The ed taux sal base.
     * @return Employes Returns this Employes.
     */
    public function setEdTauxSalBase($edTauxSalBase) {
        $this->edTauxSalBase = $edTauxSalBase;
        return $this;
    }

    /**
     * Set the effectif.
     *
     * @param bool $effectif The effectif.
     * @return Employes Returns this Employes.
     */
    public function setEffectif($effectif) {
        $this->effectif = $effectif;
        return $this;
    }

    /**
     * Set the effectif das.
     *
     * @param bool $effectifDas The effectif das.
     * @return Employes Returns this Employes.
     */
    public function setEffectifDas($effectifDas) {
        $this->effectifDas = $effectifDas;
        return $this;
    }

    /**
     * Set the emploi.
     *
     * @param string $emploi The emploi.
     * @return Employes Returns this Employes.
     */
    public function setEmploi($emploi) {
        $this->emploi = $emploi;
        return $this;
    }

    /**
     * Set the fictif.
     *
     * @param bool $fictif The fictif.
     * @return Employes Returns this Employes.
     */
    public function setFictif($fictif) {
        $this->fictif = $fictif;
        return $this;
    }

    /**
     * Set the fraction etab.
     *
     * @param string $fractionEtab The fraction etab.
     * @return Employes Returns this Employes.
     */
    public function setFractionEtab($fractionEtab) {
        $this->fractionEtab = $fractionEtab;
        return $this;
    }

    /**
     * Set the gestion maj dim.
     *
     * @param string $gestionMajDim The gestion maj dim.
     * @return Employes Returns this Employes.
     */
    public function setGestionMajDim($gestionMajDim) {
        $this->gestionMajDim = $gestionMajDim;
        return $this;
    }

    /**
     * Set the gestion maj jf.
     *
     * @param string $gestionMajJf The gestion maj jf.
     * @return Employes Returns this Employes.
     */
    public function setGestionMajJf($gestionMajJf) {
        $this->gestionMajJf = $gestionMajJf;
        return $this;
    }

    /**
     * Set the gestion maj nuit.
     *
     * @param string $gestionMajNuit The gestion maj nuit.
     * @return Employes Returns this Employes.
     */
    public function setGestionMajNuit($gestionMajNuit) {
        $this->gestionMajNuit = $gestionMajNuit;
        return $this;
    }

    /**
     * Set the grille anc1.
     *
     * @param string $grilleAnc1 The grille anc1.
     * @return Employes Returns this Employes.
     */
    public function setGrilleAnc1($grilleAnc1) {
        $this->grilleAnc1 = $grilleAnc1;
        return $this;
    }

    /**
     * Set the grille anc2.
     *
     * @param string $grilleAnc2 The grille anc2.
     * @return Employes Returns this Employes.
     */
    public function setGrilleAnc2($grilleAnc2) {
        $this->grilleAnc2 = $grilleAnc2;
        return $this;
    }

    /**
     * Set the grille anc3.
     *
     * @param string $grilleAnc3 The grille anc3.
     * @return Employes Returns this Employes.
     */
    public function setGrilleAnc3($grilleAnc3) {
        $this->grilleAnc3 = $grilleAnc3;
        return $this;
    }

    /**
     * Set the h nuit type2.
     *
     * @param bool $hNuitType2 The h nuit type2.
     * @return Employes Returns this Employes.
     */
    public function setHNuitType2($hNuitType2) {
        $this->hNuitType2 = $hNuitType2;
        return $this;
    }

    /**
     * Set the handicape.
     *
     * @param bool $handicape The handicape.
     * @return Employes Returns this Employes.
     */
    public function setHandicape($handicape) {
        $this->handicape = $handicape;
        return $this;
    }

    /**
     * Set the lieu travail conjoint.
     *
     * @param string $lieuTravailConjoint The lieu travail conjoint.
     * @return Employes Returns this Employes.
     */
    public function setLieuTravailConjoint($lieuTravailConjoint) {
        $this->lieuTravailConjoint = $lieuTravailConjoint;
        return $this;
    }

    /**
     * Set the matricule.
     *
     * @param string $matricule The matricule.
     * @return Employes Returns this Employes.
     */
    public function setMatricule($matricule) {
        $this->matricule = $matricule;
        return $this;
    }

    /**
     * Set the mensualisation tache.
     *
     * @param string $mensualisationTache The mensualisation tache.
     * @return Employes Returns this Employes.
     */
    public function setMensualisationTache($mensualisationTache) {
        $this->mensualisationTache = $mensualisationTache;
        return $this;
    }

    /**
     * Set the mention cp.
     *
     * @param bool $mentionCp The mention cp.
     * @return Employes Returns this Employes.
     */
    public function setMentionCp($mentionCp) {
        $this->mentionCp = $mentionCp;
        return $this;
    }

    /**
     * Set the min garanti.
     *
     * @param float $minGaranti The min garanti.
     * @return Employes Returns this Employes.
     */
    public function setMinGaranti($minGaranti) {
        $this->minGaranti = $minGaranti;
        return $this;
    }

    /**
     * Set the montant1.
     *
     * @param float $montant1 The montant1.
     * @return Employes Returns this Employes.
     */
    public function setMontant1($montant1) {
        $this->montant1 = $montant1;
        return $this;
    }

    /**
     * Set the montant2.
     *
     * @param float $montant2 The montant2.
     * @return Employes Returns this Employes.
     */
    public function setMontant2($montant2) {
        $this->montant2 = $montant2;
        return $this;
    }

    /**
     * Set the montant3.
     *
     * @param float $montant3 The montant3.
     * @return Employes Returns this Employes.
     */
    public function setMontant3($montant3) {
        $this->montant3 = $montant3;
        return $this;
    }

    /**
     * Set the montant4.
     *
     * @param float $montant4 The montant4.
     * @return Employes Returns this Employes.
     */
    public function setMontant4($montant4) {
        $this->montant4 = $montant4;
        return $this;
    }

    /**
     * Set the montant5.
     *
     * @param float $montant5 The montant5.
     * @return Employes Returns this Employes.
     */
    public function setMontant5($montant5) {
        $this->montant5 = $montant5;
        return $this;
    }

    /**
     * Set the montant avantage.
     *
     * @param float $montantAvantage The montant avantage.
     * @return Employes Returns this Employes.
     */
    public function setMontantAvantage($montantAvantage) {
        $this->montantAvantage = $montantAvantage;
        return $this;
    }

    /**
     * Set the mt base acompte.
     *
     * @param float $mtBaseAcompte The mt base acompte.
     * @return Employes Returns this Employes.
     */
    public function setMtBaseAcompte($mtBaseAcompte) {
        $this->mtBaseAcompte = $mtBaseAcompte;
        return $this;
    }

    /**
     * Set the nationalite.
     *
     * @param string $nationalite The nationalite.
     * @return Employes Returns this Employes.
     */
    public function setNationalite($nationalite) {
        $this->nationalite = $nationalite;
        return $this;
    }

    /**
     * Set the nb heure mois.
     *
     * @param float $nbHeureMois The nb heure mois.
     * @return Employes Returns this Employes.
     */
    public function setNbHeureMois($nbHeureMois) {
        $this->nbHeureMois = $nbHeureMois;
        return $this;
    }

    /**
     * Set the nb heure sal.
     *
     * @param float $nbHeureSal The nb heure sal.
     * @return Employes Returns this Employes.
     */
    public function setNbHeureSal($nbHeureSal) {
        $this->nbHeureSal = $nbHeureSal;
        return $this;
    }

    /**
     * Set the nb heure sup.
     *
     * @param float $nbHeureSup The nb heure sup.
     * @return Employes Returns this Employes.
     */
    public function setNbHeureSup($nbHeureSup) {
        $this->nbHeureSup = $nbHeureSup;
        return $this;
    }

    /**
     * Set the nb heure trav.
     *
     * @param float $nbHeureTrav The nb heure trav.
     * @return Employes Returns this Employes.
     */
    public function setNbHeureTrav($nbHeureTrav) {
        $this->nbHeureTrav = $nbHeureTrav;
        return $this;
    }

    /**
     * Set the nb jour base cp.
     *
     * @param float $nbJourBaseCp The nb jour base cp.
     * @return Employes Returns this Employes.
     */
    public function setNbJourBaseCp($nbJourBaseCp) {
        $this->nbJourBaseCp = $nbJourBaseCp;
        return $this;
    }

    /**
     * Set the nb points.
     *
     * @param int $nbPoints The nb points.
     * @return Employes Returns this Employes.
     */
    public function setNbPoints($nbPoints) {
        $this->nbPoints = $nbPoints;
        return $this;
    }

    /**
     * Set the niveau confidentialite.
     *
     * @param string $niveauConfidentialite The niveau confidentialite.
     * @return Employes Returns this Employes.
     */
    public function setNiveauConfidentialite($niveauConfidentialite) {
        $this->niveauConfidentialite = $niveauConfidentialite;
        return $this;
    }

    /**
     * Set the nom conjoint.
     *
     * @param string $nomConjoint The nom conjoint.
     * @return Employes Returns this Employes.
     */
    public function setNomConjoint($nomConjoint) {
        $this->nomConjoint = $nomConjoint;
        return $this;
    }

    /**
     * Set the nom marital.
     *
     * @param string $nomMarital The nom marital.
     * @return Employes Returns this Employes.
     */
    public function setNomMarital($nomMarital) {
        $this->nomMarital = $nomMarital;
        return $this;
    }

    /**
     * Set the nom naissance.
     *
     * @param string $nomNaissance The nom naissance.
     * @return Employes Returns this Employes.
     */
    public function setNomNaissance($nomNaissance) {
        $this->nomNaissance = $nomNaissance;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string $nomVille The nom ville.
     * @return Employes Returns this Employes.
     */
    public function setNomVille($nomVille) {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string $nomVoie The nom voie.
     * @return Employes Returns this Employes.
     */
    public function setNomVoie($nomVoie) {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the nombre enfants.
     *
     * @param string $nombreEnfants The nombre enfants.
     * @return Employes Returns this Employes.
     */
    public function setNombreEnfants($nombreEnfants) {
        $this->nombreEnfants = $nombreEnfants;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string $numVoie The num voie.
     * @return Employes Returns this Employes.
     */
    public function setNumVoie($numVoie) {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     * @return Employes Returns this Employes.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero carte sejour.
     *
     * @param string $numeroCarteSejour The numero carte sejour.
     * @return Employes Returns this Employes.
     */
    public function setNumeroCarteSejour($numeroCarteSejour) {
        $this->numeroCarteSejour = $numeroCarteSejour;
        return $this;
    }

    /**
     * Set the numero carte travail.
     *
     * @param string $numeroCarteTravail The numero carte travail.
     * @return Employes Returns this Employes.
     */
    public function setNumeroCarteTravail($numeroCarteTravail) {
        $this->numeroCarteTravail = $numeroCarteTravail;
        return $this;
    }

    /**
     * Set the numero cas part secu.
     *
     * @param int $numeroCasPartSecu The numero cas part secu.
     * @return Employes Returns this Employes.
     */
    public function setNumeroCasPartSecu($numeroCasPartSecu) {
        $this->numeroCasPartSecu = $numeroCasPartSecu;
        return $this;
    }

    /**
     * Set the numero grille type.
     *
     * @param int $numeroGrilleType The numero grille type.
     * @return Employes Returns this Employes.
     */
    public function setNumeroGrilleType($numeroGrilleType) {
        $this->numeroGrilleType = $numeroGrilleType;
        return $this;
    }

    /**
     * Set the numero insee.
     *
     * @param string $numeroInsee The numero insee.
     * @return Employes Returns this Employes.
     */
    public function setNumeroInsee($numeroInsee) {
        $this->numeroInsee = $numeroInsee;
        return $this;
    }

    /**
     * Set the numero permis.
     *
     * @param string $numeroPermis The numero permis.
     * @return Employes Returns this Employes.
     */
    public function setNumeroPermis($numeroPermis) {
        $this->numeroPermis = $numeroPermis;
        return $this;
    }

    /**
     * Set the orphelin.
     *
     * @param bool $orphelin The orphelin.
     * @return Employes Returns this Employes.
     */
    public function setOrphelin($orphelin) {
        $this->orphelin = $orphelin;
        return $this;
    }

    /**
     * Set the pas gestion pdp.
     *
     * @param bool $pasGestionPdp The pas gestion pdp.
     * @return Employes Returns this Employes.
     */
    public function setPasGestionPdp($pasGestionPdp) {
        $this->pasGestionPdp = $pasGestionPdp;
        return $this;
    }

    /**
     * Set the pas gestion pdp1.
     *
     * @param bool $pasGestionPdp1 The pas gestion pdp1.
     * @return Employes Returns this Employes.
     */
    public function setPasGestionPdp1($pasGestionPdp1) {
        $this->pasGestionPdp1 = $pasGestionPdp1;
        return $this;
    }

    /**
     * Set the pension.
     *
     * @param bool $pension The pension.
     * @return Employes Returns this Employes.
     */
    public function setPension($pension) {
        $this->pension = $pension;
        return $this;
    }

    /**
     * Set the periodicite.
     *
     * @param string $periodicite The periodicite.
     * @return Employes Returns this Employes.
     */
    public function setPeriodicite($periodicite) {
        $this->periodicite = $periodicite;
        return $this;
    }

    /**
     * Set the permis delivre le.
     *
     * @param DateTime|null $permisDelivreLe The permis delivre le.
     * @return Employes Returns this Employes.
     */
    public function setPermisDelivreLe(DateTime $permisDelivreLe = null) {
        $this->permisDelivreLe = $permisDelivreLe;
        return $this;
    }

    /**
     * Set the permis delivre par.
     *
     * @param string $permisDelivrePar The permis delivre par.
     * @return Employes Returns this Employes.
     */
    public function setPermisDelivrePar($permisDelivrePar) {
        $this->permisDelivrePar = $permisDelivrePar;
        return $this;
    }

    /**
     * Set the permis expire le.
     *
     * @param DateTime|null $permisExpireLe The permis expire le.
     * @return Employes Returns this Employes.
     */
    public function setPermisExpireLe(DateTime $permisExpireLe = null) {
        $this->permisExpireLe = $permisExpireLe;
        return $this;
    }

    /**
     * Set the personne a prevenir.
     *
     * @param string $personneAPrevenir The personne a prevenir.
     * @return Employes Returns this Employes.
     */
    public function setPersonneAPrevenir($personneAPrevenir) {
        $this->personneAPrevenir = $personneAPrevenir;
        return $this;
    }

    /**
     * Set the plafond gmp.
     *
     * @param float $plafondGmp The plafond gmp.
     * @return Employes Returns this Employes.
     */
    public function setPlafondGmp($plafondGmp) {
        $this->plafondGmp = $plafondGmp;
        return $this;
    }

    /**
     * Set the plafond ss1.
     *
     * @param float $plafondSs1 The plafond ss1.
     * @return Employes Returns this Employes.
     */
    public function setPlafondSs1($plafondSs1) {
        $this->plafondSs1 = $plafondSs1;
        return $this;
    }

    /**
     * Set the plafond ss30.
     *
     * @param bool $plafondSs30 The plafond ss30.
     * @return Employes Returns this Employes.
     */
    public function setPlafondSs30($plafondSs30) {
        $this->plafondSs30 = $plafondSs30;
        return $this;
    }

    /**
     * Set the pourcent abat.
     *
     * @param float $pourcentAbat The pourcent abat.
     * @return Employes Returns this Employes.
     */
    public function setPourcentAbat($pourcentAbat) {
        $this->pourcentAbat = $pourcentAbat;
        return $this;
    }

    /**
     * Set the pourcent act.
     *
     * @param float $pourcentAct The pourcent act.
     * @return Employes Returns this Employes.
     */
    public function setPourcentAct($pourcentAct) {
        $this->pourcentAct = $pourcentAct;
        return $this;
    }

    /**
     * Set the pourcent effectif ducs.
     *
     * @param float $pourcentEffectifDucs The pourcent effectif ducs.
     * @return Employes Returns this Employes.
     */
    public function setPourcentEffectifDucs($pourcentEffectifDucs) {
        $this->pourcentEffectifDucs = $pourcentEffectifDucs;
        return $this;
    }

    /**
     * Set the pourcent remu hor.
     *
     * @param float $pourcentRemuHor The pourcent remu hor.
     * @return Employes Returns this Employes.
     */
    public function setPourcentRemuHor($pourcentRemuHor) {
        $this->pourcentRemuHor = $pourcentRemuHor;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string $prenom The prenom.
     * @return Employes Returns this Employes.
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the prenom conjoint.
     *
     * @param string $prenomConjoint The prenom conjoint.
     * @return Employes Returns this Employes.
     */
    public function setPrenomConjoint($prenomConjoint) {
        $this->prenomConjoint = $prenomConjoint;
        return $this;
    }

    /**
     * Set the prime.
     *
     * @param bool $prime The prime.
     * @return Employes Returns this Employes.
     */
    public function setPrime($prime) {
        $this->prime = $prime;
        return $this;
    }

    /**
     * Set the prud college.
     *
     * @param string $prudCollege The prud college.
     * @return Employes Returns this Employes.
     */
    public function setPrudCollege($prudCollege) {
        $this->prudCollege = $prudCollege;
        return $this;
    }

    /**
     * Set the prud lieu vote.
     *
     * @param string $prudLieuVote The prud lieu vote.
     * @return Employes Returns this Employes.
     */
    public function setPrudLieuVote($prudLieuVote) {
        $this->prudLieuVote = $prudLieuVote;
        return $this;
    }

    /**
     * Set the prud section.
     *
     * @param string $prudSection The prud section.
     * @return Employes Returns this Employes.
     */
    public function setPrudSection($prudSection) {
        $this->prudSection = $prudSection;
        return $this;
    }

    /**
     * Set the qualification.
     *
     * @param string $qualification The qualification.
     * @return Employes Returns this Employes.
     */
    public function setQualification($qualification) {
        $this->qualification = $qualification;
        return $this;
    }

    /**
     * Set the regle calcul.
     *
     * @param string $regleCalcul The regle calcul.
     * @return Employes Returns this Employes.
     */
    public function setRegleCalcul($regleCalcul) {
        $this->regleCalcul = $regleCalcul;
        return $this;
    }

    /**
     * Set the regroup virement.
     *
     * @param string $regroupVirement The regroup virement.
     * @return Employes Returns this Employes.
     */
    public function setRegroupVirement($regroupVirement) {
        $this->regroupVirement = $regroupVirement;
        return $this;
    }

    /**
     * Set the regul tds.
     *
     * @param bool $regulTds The regul tds.
     * @return Employes Returns this Employes.
     */
    public function setRegulTds($regulTds) {
        $this->regulTds = $regulTds;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string $rib The rib.
     * @return Employes Returns this Employes.
     */
    public function setRib($rib) {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the salaire base.
     *
     * @param float $salaireBase The salaire base.
     * @return Employes Returns this Employes.
     */
    public function setSalaireBase($salaireBase) {
        $this->salaireBase = $salaireBase;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string $service The service.
     * @return Employes Returns this Employes.
     */
    public function setService($service) {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the sexe.
     *
     * @param string $sexe The sexe.
     * @return Employes Returns this Employes.
     */
    public function setSexe($sexe) {
        $this->sexe = $sexe;
        return $this;
    }

    /**
     * Set the situation fam.
     *
     * @param string $situationFam The situation fam.
     * @return Employes Returns this Employes.
     */
    public function setSituationFam($situationFam) {
        $this->situationFam = $situationFam;
        return $this;
    }

    /**
     * Set the taux1.
     *
     * @param float $taux1 The taux1.
     * @return Employes Returns this Employes.
     */
    public function setTaux1($taux1) {
        $this->taux1 = $taux1;
        return $this;
    }

    /**
     * Set the taux2.
     *
     * @param float $taux2 The taux2.
     * @return Employes Returns this Employes.
     */
    public function setTaux2($taux2) {
        $this->taux2 = $taux2;
        return $this;
    }

    /**
     * Set the taux3.
     *
     * @param float $taux3 The taux3.
     * @return Employes Returns this Employes.
     */
    public function setTaux3($taux3) {
        $this->taux3 = $taux3;
        return $this;
    }

    /**
     * Set the taux4.
     *
     * @param float $taux4 The taux4.
     * @return Employes Returns this Employes.
     */
    public function setTaux4($taux4) {
        $this->taux4 = $taux4;
        return $this;
    }

    /**
     * Set the taux5.
     *
     * @param float $taux5 The taux5.
     * @return Employes Returns this Employes.
     */
    public function setTaux5($taux5) {
        $this->taux5 = $taux5;
        return $this;
    }

    /**
     * Set the taux absence.
     *
     * @param float $tauxAbsence The taux absence.
     * @return Employes Returns this Employes.
     */
    public function setTauxAbsence($tauxAbsence) {
        $this->tauxAbsence = $tauxAbsence;
        return $this;
    }

    /**
     * Set the taux ancien.
     *
     * @param float $tauxAncien The taux ancien.
     * @return Employes Returns this Employes.
     */
    public function setTauxAncien($tauxAncien) {
        $this->tauxAncien = $tauxAncien;
        return $this;
    }

    /**
     * Set the taux h sup.
     *
     * @param float $tauxHSup The taux h sup.
     * @return Employes Returns this Employes.
     */
    public function setTauxHSup($tauxHSup) {
        $this->tauxHSup = $tauxHSup;
        return $this;
    }

    /**
     * Set the taux pension civile.
     *
     * @param float $tauxPensionCivile The taux pension civile.
     * @return Employes Returns this Employes.
     */
    public function setTauxPensionCivile($tauxPensionCivile) {
        $this->tauxPensionCivile = $tauxPensionCivile;
        return $this;
    }

    /**
     * Set the taux pension militaire.
     *
     * @param float $tauxPensionMilitaire The taux pension militaire.
     * @return Employes Returns this Employes.
     */
    public function setTauxPensionMilitaire($tauxPensionMilitaire) {
        $this->tauxPensionMilitaire = $tauxPensionMilitaire;
        return $this;
    }

    /**
     * Set the taxe salaire.
     *
     * @param bool $taxeSalaire The taxe salaire.
     * @return Employes Returns this Employes.
     */
    public function setTaxeSalaire($taxeSalaire) {
        $this->taxeSalaire = $taxeSalaire;
        return $this;
    }

    /**
     * Set the tds100.
     *
     * @param float $tds100 The tds100.
     * @return Employes Returns this Employes.
     */
    public function setTds100($tds100) {
        $this->tds100 = $tds100;
        return $this;
    }

    /**
     * Set the tds102.
     *
     * @param float $tds102 The tds102.
     * @return Employes Returns this Employes.
     */
    public function setTds102($tds102) {
        $this->tds102 = $tds102;
        return $this;
    }

    /**
     * Set the tds103.
     *
     * @param float $tds103 The tds103.
     * @return Employes Returns this Employes.
     */
    public function setTds103($tds103) {
        $this->tds103 = $tds103;
        return $this;
    }

    /**
     * Set the tds105.
     *
     * @param float $tds105 The tds105.
     * @return Employes Returns this Employes.
     */
    public function setTds105($tds105) {
        $this->tds105 = $tds105;
        return $this;
    }

    /**
     * Set the tds107.
     *
     * @param bool $tds107 The tds107.
     * @return Employes Returns this Employes.
     */
    public function setTds107($tds107) {
        $this->tds107 = $tds107;
        return $this;
    }

    /**
     * Set the tds108.
     *
     * @param bool $tds108 The tds108.
     * @return Employes Returns this Employes.
     */
    public function setTds108($tds108) {
        $this->tds108 = $tds108;
        return $this;
    }

    /**
     * Set the tds109.
     *
     * @param bool $tds109 The tds109.
     * @return Employes Returns this Employes.
     */
    public function setTds109($tds109) {
        $this->tds109 = $tds109;
        return $this;
    }

    /**
     * Set the tds110.
     *
     * @param bool $tds110 The tds110.
     * @return Employes Returns this Employes.
     */
    public function setTds110($tds110) {
        $this->tds110 = $tds110;
        return $this;
    }

    /**
     * Set the tds112.
     *
     * @param float $tds112 The tds112.
     * @return Employes Returns this Employes.
     */
    public function setTds112($tds112) {
        $this->tds112 = $tds112;
        return $this;
    }

    /**
     * Set the tds113.
     *
     * @param bool $tds113 The tds113.
     * @return Employes Returns this Employes.
     */
    public function setTds113($tds113) {
        $this->tds113 = $tds113;
        return $this;
    }

    /**
     * Set the tds117.
     *
     * @param float $tds117 The tds117.
     * @return Employes Returns this Employes.
     */
    public function setTds117($tds117) {
        $this->tds117 = $tds117;
        return $this;
    }

    /**
     * Set the tds119.
     *
     * @param bool $tds119 The tds119.
     * @return Employes Returns this Employes.
     */
    public function setTds119($tds119) {
        $this->tds119 = $tds119;
        return $this;
    }

    /**
     * Set the tds120.
     *
     * @param bool $tds120 The tds120.
     * @return Employes Returns this Employes.
     */
    public function setTds120($tds120) {
        $this->tds120 = $tds120;
        return $this;
    }

    /**
     * Set the tds121.
     *
     * @param bool $tds121 The tds121.
     * @return Employes Returns this Employes.
     */
    public function setTds121($tds121) {
        $this->tds121 = $tds121;
        return $this;
    }

    /**
     * Set the tds122.
     *
     * @param bool $tds122 The tds122.
     * @return Employes Returns this Employes.
     */
    public function setTds122($tds122) {
        $this->tds122 = $tds122;
        return $this;
    }

    /**
     * Set the tds125.
     *
     * @param float $tds125 The tds125.
     * @return Employes Returns this Employes.
     */
    public function setTds125($tds125) {
        $this->tds125 = $tds125;
        return $this;
    }

    /**
     * Set the tds127.
     *
     * @param float $tds127 The tds127.
     * @return Employes Returns this Employes.
     */
    public function setTds127($tds127) {
        $this->tds127 = $tds127;
        return $this;
    }

    /**
     * Set the tds128.
     *
     * @param string $tds128 The tds128.
     * @return Employes Returns this Employes.
     */
    public function setTds128($tds128) {
        $this->tds128 = $tds128;
        return $this;
    }

    /**
     * Set the tds132.
     *
     * @param float $tds132 The tds132.
     * @return Employes Returns this Employes.
     */
    public function setTds132($tds132) {
        $this->tds132 = $tds132;
        return $this;
    }

    /**
     * Set the tds133.
     *
     * @param string $tds133 The tds133.
     * @return Employes Returns this Employes.
     */
    public function setTds133($tds133) {
        $this->tds133 = $tds133;
        return $this;
    }

    /**
     * Set the tds134.
     *
     * @param float $tds134 The tds134.
     * @return Employes Returns this Employes.
     */
    public function setTds134($tds134) {
        $this->tds134 = $tds134;
        return $this;
    }

    /**
     * Set the tds135.
     *
     * @param float $tds135 The tds135.
     * @return Employes Returns this Employes.
     */
    public function setTds135($tds135) {
        $this->tds135 = $tds135;
        return $this;
    }

    /**
     * Set the tds136.
     *
     * @param float $tds136 The tds136.
     * @return Employes Returns this Employes.
     */
    public function setTds136($tds136) {
        $this->tds136 = $tds136;
        return $this;
    }

    /**
     * Set the tds138.
     *
     * @param string $tds138 The tds138.
     * @return Employes Returns this Employes.
     */
    public function setTds138($tds138) {
        $this->tds138 = $tds138;
        return $this;
    }

    /**
     * Set the tds139.
     *
     * @param string $tds139 The tds139.
     * @return Employes Returns this Employes.
     */
    public function setTds139($tds139) {
        $this->tds139 = $tds139;
        return $this;
    }

    /**
     * Set the tds141.
     *
     * @param float $tds141 The tds141.
     * @return Employes Returns this Employes.
     */
    public function setTds141($tds141) {
        $this->tds141 = $tds141;
        return $this;
    }

    /**
     * Set the tds59.
     *
     * @param string $tds59 The tds59.
     * @return Employes Returns this Employes.
     */
    public function setTds59($tds59) {
        $this->tds59 = $tds59;
        return $this;
    }

    /**
     * Set the tds60.
     *
     * @param bool $tds60 The tds60.
     * @return Employes Returns this Employes.
     */
    public function setTds60($tds60) {
        $this->tds60 = $tds60;
        return $this;
    }

    /**
     * Set the tds61.
     *
     * @param string $tds61 The tds61.
     * @return Employes Returns this Employes.
     */
    public function setTds61($tds61) {
        $this->tds61 = $tds61;
        return $this;
    }

    /**
     * Set the tds75.
     *
     * @param int $tds75 The tds75.
     * @return Employes Returns this Employes.
     */
    public function setTds75($tds75) {
        $this->tds75 = $tds75;
        return $this;
    }

    /**
     * Set the tds76.
     *
     * @param string $tds76 The tds76.
     * @return Employes Returns this Employes.
     */
    public function setTds76($tds76) {
        $this->tds76 = $tds76;
        return $this;
    }

    /**
     * Set the tds77.
     *
     * @param string $tds77 The tds77.
     * @return Employes Returns this Employes.
     */
    public function setTds77($tds77) {
        $this->tds77 = $tds77;
        return $this;
    }

    /**
     * Set the tds78.
     *
     * @param bool $tds78 The tds78.
     * @return Employes Returns this Employes.
     */
    public function setTds78($tds78) {
        $this->tds78 = $tds78;
        return $this;
    }

    /**
     * Set the tds81.
     *
     * @param float $tds81 The tds81.
     * @return Employes Returns this Employes.
     */
    public function setTds81($tds81) {
        $this->tds81 = $tds81;
        return $this;
    }

    /**
     * Set the tds82.
     *
     * @param float $tds82 The tds82.
     * @return Employes Returns this Employes.
     */
    public function setTds82($tds82) {
        $this->tds82 = $tds82;
        return $this;
    }

    /**
     * Set the tds84.
     *
     * @param float $tds84 The tds84.
     * @return Employes Returns this Employes.
     */
    public function setTds84($tds84) {
        $this->tds84 = $tds84;
        return $this;
    }

    /**
     * Set the tds85.
     *
     * @param float $tds85 The tds85.
     * @return Employes Returns this Employes.
     */
    public function setTds85($tds85) {
        $this->tds85 = $tds85;
        return $this;
    }

    /**
     * Set the tds86.
     *
     * @param float $tds86 The tds86.
     * @return Employes Returns this Employes.
     */
    public function setTds86($tds86) {
        $this->tds86 = $tds86;
        return $this;
    }

    /**
     * Set the tds87.
     *
     * @param float $tds87 The tds87.
     * @return Employes Returns this Employes.
     */
    public function setTds87($tds87) {
        $this->tds87 = $tds87;
        return $this;
    }

    /**
     * Set the tds88.
     *
     * @param float $tds88 The tds88.
     * @return Employes Returns this Employes.
     */
    public function setTds88($tds88) {
        $this->tds88 = $tds88;
        return $this;
    }

    /**
     * Set the tds89.
     *
     * @param float $tds89 The tds89.
     * @return Employes Returns this Employes.
     */
    public function setTds89($tds89) {
        $this->tds89 = $tds89;
        return $this;
    }

    /**
     * Set the tds90.
     *
     * @param float $tds90 The tds90.
     * @return Employes Returns this Employes.
     */
    public function setTds90($tds90) {
        $this->tds90 = $tds90;
        return $this;
    }

    /**
     * Set the tds91.
     *
     * @param float $tds91 The tds91.
     * @return Employes Returns this Employes.
     */
    public function setTds91($tds91) {
        $this->tds91 = $tds91;
        return $this;
    }

    /**
     * Set the tds92.
     *
     * @param float $tds92 The tds92.
     * @return Employes Returns this Employes.
     */
    public function setTds92($tds92) {
        $this->tds92 = $tds92;
        return $this;
    }

    /**
     * Set the tds93.
     *
     * @param float $tds93 The tds93.
     * @return Employes Returns this Employes.
     */
    public function setTds93($tds93) {
        $this->tds93 = $tds93;
        return $this;
    }

    /**
     * Set the tds94.
     *
     * @param float $tds94 The tds94.
     * @return Employes Returns this Employes.
     */
    public function setTds94($tds94) {
        $this->tds94 = $tds94;
        return $this;
    }

    /**
     * Set the tds95.
     *
     * @param float $tds95 The tds95.
     * @return Employes Returns this Employes.
     */
    public function setTds95($tds95) {
        $this->tds95 = $tds95;
        return $this;
    }

    /**
     * Set the tel1.
     *
     * @param string $tel1 The tel1.
     * @return Employes Returns this Employes.
     */
    public function setTel1($tel1) {
        $this->tel1 = $tel1;
        return $this;
    }

    /**
     * Set the tel conjoint.
     *
     * @param string $telConjoint The tel conjoint.
     * @return Employes Returns this Employes.
     */
    public function setTelConjoint($telConjoint) {
        $this->telConjoint = $telConjoint;
        return $this;
    }

    /**
     * Set the tel pers a prevenir.
     *
     * @param string $telPersAPrevenir The tel pers a prevenir.
     * @return Employes Returns this Employes.
     */
    public function setTelPersAPrevenir($telPersAPrevenir) {
        $this->telPersAPrevenir = $telPersAPrevenir;
        return $this;
    }

    /**
     * Set the temps passe.
     *
     * @param bool $tempsPasse The temps passe.
     * @return Employes Returns this Employes.
     */
    public function setTempsPasse($tempsPasse) {
        $this->tempsPasse = $tempsPasse;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string $titre The titre.
     * @return Employes Returns this Employes.
     */
    public function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Set the transfert entree1.
     *
     * @param bool $transfertEntree1 The transfert entree1.
     * @return Employes Returns this Employes.
     */
    public function setTransfertEntree1($transfertEntree1) {
        $this->transfertEntree1 = $transfertEntree1;
        return $this;
    }

    /**
     * Set the transfert entree2.
     *
     * @param bool $transfertEntree2 The transfert entree2.
     * @return Employes Returns this Employes.
     */
    public function setTransfertEntree2($transfertEntree2) {
        $this->transfertEntree2 = $transfertEntree2;
        return $this;
    }

    /**
     * Set the transfert sortie1.
     *
     * @param bool $transfertSortie1 The transfert sortie1.
     * @return Employes Returns this Employes.
     */
    public function setTransfertSortie1($transfertSortie1) {
        $this->transfertSortie1 = $transfertSortie1;
        return $this;
    }

    /**
     * Set the transfert sortie2.
     *
     * @param bool $transfertSortie2 The transfert sortie2.
     * @return Employes Returns this Employes.
     */
    public function setTransfertSortie2($transfertSortie2) {
        $this->transfertSortie2 = $transfertSortie2;
        return $this;
    }

    /**
     * Set the travaille jf.
     *
     * @param bool $travailleJf The travaille jf.
     * @return Employes Returns this Employes.
     */
    public function setTravailleJf($travailleJf) {
        $this->travailleJf = $travailleJf;
        return $this;
    }

    /**
     * Set the type contrat.
     *
     * @param string $typeContrat The type contrat.
     * @return Employes Returns this Employes.
     */
    public function setTypeContrat($typeContrat) {
        $this->typeContrat = $typeContrat;
        return $this;
    }

    /**
     * Set the type nationalite.
     *
     * @param string $typeNationalite The type nationalite.
     * @return Employes Returns this Employes.
     */
    public function setTypeNationalite($typeNationalite) {
        $this->typeNationalite = $typeNationalite;
        return $this;
    }

    /**
     * Set the type paiement.
     *
     * @param string $typePaiement The type paiement.
     * @return Employes Returns this Employes.
     */
    public function setTypePaiement($typePaiement) {
        $this->typePaiement = $typePaiement;
        return $this;
    }

    /**
     * Set the vrp multicarte.
     *
     * @param bool $vrpMulticarte The vrp multicarte.
     * @return Employes Returns this Employes.
     */
    public function setVrpMulticarte($vrpMulticarte) {
        $this->vrpMulticarte = $vrpMulticarte;
        return $this;
    }

    /**
     * Set the plafond ss2.
     *
     * @param float $plafondSs2 The plafond ss2.
     * @return Employes Returns this Employes.
     */
    public function setplafondSs2($plafondSs2) {
        $this->plafondSs2 = $plafondSs2;
        return $this;
    }
}
