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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAchatVenteAutomateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAchatVenteStopTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBonsAPayerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCompCliFrsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolConserveMoisRbTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolControleEditionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolControleRefTireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCptTransfImmoCommunsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDetailCbTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDetailImmoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEdi400Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEditAnaContrepasseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGestionPmagClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGestionTraitePapierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGestionVirementFrnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolImmoDetailLignesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolImmoDetailParCptTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolImmoEditEnsembleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolImmoSsTotImmoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolImmoTotParCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolImmoTransfertForfaitVersReelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolImmoTriAnalytiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolImmoTriParDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolImmoTriParServiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolIsClientExpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolLettrePvautBoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMultiEchClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMultiEchFrnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMultiEchParCodeLibAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolNePlusAfficherTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRebutVautCessionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRegroupFourCptEchTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRepAssTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRepBudgetTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRepCarTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRepCbTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRepClTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRepComptaGenTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRepDecTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRepDosRevTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRepEmpruntsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRepEsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRepImmoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRepLocFiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRepPartielleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRepSubvTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRepVmpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRevisSoldeEnEuroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRevisVoirSoldeExTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSaisieCaisseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSauverPeriodiciteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSuiviAuxClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSuiviAuxFrnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSuiviDevisesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTransfertImmoOkTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateRevisionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateTransfCbTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateTransfCliDouteuxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateTransfertEchCbTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateTransfertEcheanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateTransfertEchLfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateTransfIntCourusTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateTransfIntExtournesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateTransfLfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateTransfProvCpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDebutCalculImmoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeFinCalculImmoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeRevisionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTransfImmoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntFolioRevisionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntFolioTransfImmoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntImmoJoursParAnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumChronoBoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLotCliDouteuxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLotEcritTransAssuranceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLotEcritTransBauxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLotEcritTransCarTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLotEcritTransfCbTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLotEcritTransfImmoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLotEcritTransfLfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLotEcritTransPeriodiciteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLotEcritTransSubventionsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLotIntCourusTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLotIntExtournesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLotProvCpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPeriodiciteUtiliserLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntProchainLotLcrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntProchainLotLettrePTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntProchainLotTraiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntProchainNumCbTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntProchainNumImmoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntProchainNumLfTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntProchainNumPjTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntRefRemiseLcrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntRefVirementFrnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTypePmagClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAchatVenteLocalTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeIcsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeJournalRevisionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeJournalTransfImmoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteDebutAssuranceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteDebutBailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteDebutCarTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteDebutSubventionsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteFinAssuranceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteFinBailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteFinCarTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteFinSubventionsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteTvacarTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringControleExistEcrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDelaiRejetEffetTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDotFrancCentimeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringImmoTypeLiasseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibVariable1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibVariable2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibVariable3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMiseEnPortefeuilleBicFTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMiseEnPortefeuilleDomFTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMiseEnPortefeuilleIbanFTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMiseEnPortefeuilleRibFTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNivTriAnalytiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNivTriBureauTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNivTriFamilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNivTriNatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNivTriServiceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNivTriSiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNivTriZl1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNivTriZl2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNivTriZl3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomLettrePcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomLettrePTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOptionImportMvtRbTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRacineImportMvtRbTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSaisieNumPieceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeTransfertImmoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeTransfertTiersFTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeTransfertTiersTrait;

/**
 * Dossier3.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Dossier3 {

    use BoolAchatVenteAutomateTrait;
    use StringAchatVenteLocalTvaTrait;
    use BoolAchatVenteStopTvaTrait;
    use BoolBonsAPayerTrait;
    use StringCodeIcsTrait;
    use StringCodeJournalRevisionTrait;
    use StringCodeJournalTransfImmoTrait;
    use BoolCompCliFrsTrait;
    use StringCompteDebutAssuranceTrait;
    use StringCompteDebutBailTrait;
    use StringCompteDebutCarTrait;
    use StringCompteDebutSubventionsTrait;
    use StringCompteFinAssuranceTrait;
    use StringCompteFinBailTrait;
    use StringCompteFinCarTrait;
    use StringCompteFinSubventionsTrait;
    use StringCompteTvacarTrait;
    use BoolConserveMoisRbTrait;
    use BoolControleEditionTrait;
    use StringControleExistEcrTrait;
    use BoolControleRefTireTrait;
    use BoolCptTransfImmoCommunsTrait;
    use DateTimeDateRevisionTrait;
    use DateTimeDateTransfCbTrait;
    use DateTimeDateTransfCliDouteuxTrait;
    use DateTimeDateTransfIntCourusTrait;
    use DateTimeDateTransfIntExtournesTrait;
    use DateTimeDateTransfLfTrait;
    use DateTimeDateTransfProvCpTrait;
    use DateTimeDateTransfertEchCbTrait;
    use DateTimeDateTransfertEchLfTrait;
    use DateTimeDateTransfertEcheanceTrait;
    use DateTimeDebutCalculImmoTrait;
    use StringDelaiRejetEffetTrait;
    use BoolDetailCbTrait;
    use BoolDetailImmoTrait;
    use StringDotFrancCentimeTrait;
    use BoolEdi400Trait;
    use BoolEditAnaContrepasseTrait;
    use DateTimeFinCalculImmoTrait;
    use IntFolioRevisionTrait;
    use IntFolioTransfImmoTrait;
    use BoolGestionPmagClientTrait;
    use BoolGestionTraitePapierTrait;
    use BoolGestionVirementFrnTrait;
    use BoolImmoDetailLignesTrait;
    use BoolImmoDetailParCptTrait;
    use BoolImmoEditEnsembleTrait;
    use IntImmoJoursParAnTrait;
    use BoolImmoSsTotImmoTrait;
    use BoolImmoTotParCompteTrait;
    use BoolImmoTransfertForfaitVersReelTrait;
    use BoolImmoTriAnalytiqueTrait;
    use BoolImmoTriParDateTrait;
    use BoolImmoTriParServiceTrait;
    use StringImmoTypeLiasseTrait;
    use BoolIsClientExpTrait;
    use BoolLettrePvautBoTrait;
    use StringLibVariable1Trait;
    use StringLibVariable2Trait;
    use StringLibVariable3Trait;
    use StringMiseEnPortefeuilleBicFTrait;
    use StringMiseEnPortefeuilleDomFTrait;
    use StringMiseEnPortefeuilleIbanFTrait;
    use StringMiseEnPortefeuilleRibFTrait;
    use BoolMultiEchClientTrait;
    use BoolMultiEchFrnTrait;
    use BoolMultiEchParCodeLibAutoTrait;
    use BoolNePlusAfficherTrait;
    use StringNivTriAnalytiqueTrait;
    use StringNivTriBureauTrait;
    use StringNivTriFamilleTrait;
    use StringNivTriNatTrait;
    use StringNivTriServiceTrait;
    use StringNivTriSiteTrait;
    use StringNivTriZl1Trait;
    use StringNivTriZl2Trait;
    use StringNivTriZl3Trait;
    use StringNomLettrePTrait;
    use StringNomLettrePcTrait;
    use IntNumChronoBoTrait;
    use IntNumLotCliDouteuxTrait;
    use IntNumLotEcritTransAssuranceTrait;
    use IntNumLotEcritTransBauxTrait;
    use IntNumLotEcritTransCarTrait;
    use IntNumLotEcritTransPeriodiciteTrait;
    use IntNumLotEcritTransSubventionsTrait;
    use IntNumLotEcritTransfCbTrait;
    use IntNumLotEcritTransfImmoTrait;
    use IntNumLotEcritTransfLfTrait;
    use IntNumLotIntCourusTrait;
    use IntNumLotIntExtournesTrait;
    use IntNumLotProvCpTrait;
    use StringOptionImportMvtRbTrait;
    use DateTimePeriodeRevisionTrait;
    use DateTimePeriodeTransfImmoTrait;
    use IntPeriodiciteUtiliserLibelleTrait;
    use IntProchainLotLcrTrait;
    use IntProchainLotLettrePTrait;
    use IntProchainLotTraiteTrait;
    use IntProchainNumCbTrait;
    use IntProchainNumImmoTrait;
    use IntProchainNumLfTrait;
    use IntProchainNumPjTrait;
    use StringRacineImportMvtRbTrait;
    use BoolRebutVautCessionTrait;
    use IntRefRemiseLcrTrait;
    use IntRefVirementFrnTrait;
    use BoolRegroupFourCptEchTrait;
    use BoolRepAssTrait;
    use BoolRepBudgetTrait;
    use BoolRepCarTrait;
    use BoolRepCbTrait;
    use BoolRepClTrait;
    use BoolRepComptaGenTrait;
    use BoolRepDecTvaTrait;
    use BoolRepDosRevTrait;
    use BoolRepEsTrait;
    use BoolRepEmpruntsTrait;
    use BoolRepImmoTrait;
    use BoolRepLocFiTrait;
    use BoolRepPartielleTrait;
    use BoolRepSubvTrait;
    use BoolRepVmpTrait;
    use BoolRevisSoldeEnEuroTrait;
    use BoolRevisVoirSoldeExTrait;
    use BoolSaisieCaisseTrait;
    use StringSaisieNumPieceTrait;
    use BoolSauverPeriodiciteTrait;
    use BoolSuiviAuxClientTrait;
    use BoolSuiviAuxFrnTrait;
    use BoolSuiviDevisesTrait;
    use BoolTransfertImmoOkTrait;
    use IntTypePmagClientTrait;
    use StringTypeTransfertImmoTrait;
    use StringTypeTransfertTiersTrait;
    use StringTypeTransfertTiersFTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}