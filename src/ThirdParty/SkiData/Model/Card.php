<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\SkiData\Model;

use DateTime;
use WBW\Library\Core\ThirdParty\SkiData\Traits\CardTrait;

/**
 * Card.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\SkiData\Model
 */
class Card {

    use CardTrait;

    /**
     * Article number.
     *
     * @var int
     */
    private $articleNumber;

    /**
     * Currency residual value.
     *
     * @var string
     */
    private $currencyResidualValue;

    /**
     * Display text.
     *
     * @var bool
     */
    private $displayText;

    /**
     * Display text 1.
     *
     * @var string
     */
    private $displayText1;

    /**
     * Display text 2.
     *
     * @var string
     */
    private $displayText2;

    /**
     * Entry barrier closed.
     *
     * @var bool
     */
    private $entryBarrierClosed;

    /**
     * Exit barrier closed.
     *
     * @var bool
     */
    private $exitBarrierClosed;

    /**
     * Expires.
     *
     * @var DateTime
     */
    private $expires;

    /**
     * Is neutral.
     *
     * @var bool
     */
    private $isNeutral;

    /**
     * Personnal no.
     *
     * @var int
     */
    private $personnalNo;

    /**
     * Production counter.
     *
     * @var int
     */
    private $productionCounter;

    /**
     * Production facility number.
     *
     * @var int
     */
    private $productionFacilityNumber;

    /**
     * Production state.
     *
     * @var int
     */
    private $productionState;

    /**
     * Reason for production.
     *
     * @var int
     */
    private $reasonProduction;

    /**
     * Residual value.
     *
     * @var int
     */
    private $residualValue;

    /**
     * Retain ticket at entry.
     *
     * @var bool
     */
    private $retainTicketEntry;

    /**
     * Retain ticket at exit.
     *
     * @var bool
     */
    private $retainTicketExit;

    /**
     * Serial no.
     *
     * @var string
     */
    private $serialNo;

    /**
     * Serial number KeyCard/Swatch.
     *
     * @var string
     */
    private $serialNumberKeyCardSwatch;

    /**
     * Suspend period from.
     *
     * @var DateTime
     */
    private $suspendPeriodFrom;

    /**
     * Suspend period until.
     *
     * @var DateTime
     */
    private $suspendPeriodUntil;

    /**
     *  ticket number.
     *
     * @var string
     */
    private $ticketNumber;

    /**
     * Ticket sub type.
     *
     * @var string
     */
    private $ticketSubType;

    /**
     * Ticket type.
     *
     * @var int
     */
    private $ticketType;

    /**
     * Use valid car parks.
     *
     * @var bool
     */
    private $useValidCarParks;

    /**
     * User number.
     *
     * @var int
     */
    private $userNumber;

    /**
     * Valid from.
     *
     * @var DateTime
     */
    private $validFrom;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Get the article number.
     *
     * @return int Returns the article number.
     */
    public function getArticleNumber() {
        return $this->articleNumber;
    }

    /**
     * Get the currency residual value.
     *
     * @return string Returns the currency residual value.
     */
    public function getCurrencyResidualValue() {
        return $this->currencyResidualValue;
    }

    /**
     * Get the display text.
     *
     * @return bool Returns the display text.
     */
    public function getDisplayText() {
        return $this->displayText;
    }

    /**
     * Get the display text 1.
     *
     * @return string Returns the display text 1.
     */
    public function getDisplayText1() {
        return $this->displayText1;
    }

    /**
     * Get the display text 2.
     *
     * @return string Returns the display text 2.
     */
    public function getDisplayText2() {
        return $this->displayText2;
    }

    /**
     * Get the entry barrier closed.
     *
     * @return bool Returns the entry barrier closed.
     */
    public function getEntryBarrierClosed() {
        return $this->entryBarrierClosed;
    }

    /**
     * Get the exit barrier closed.
     *
     * @return bool Returns the exit barrier closed.
     */
    public function getExitBarrierClosed() {
        return $this->exitBarrierClosed;
    }

    /**
     * Get the expires.
     *
     * @return DateTime Returns the expires.
     */
    public function getExpires() {
        return $this->expires;
    }

    /**
     * Get the is neutral.
     *
     * @return bool Returns the is neutral.
     */
    public function getNeutral() {
        return $this->isNeutral;
    }

    /**
     * Get the personnal no.
     *
     * @return int Returns the personnal no.
     */
    public function getPersonnalNo() {
        return $this->personnalNo;
    }

    /**
     * Get the production counter.
     *
     * @return int Returns the production counter.
     */
    public function getProductionCounter() {
        return $this->productionCounter;
    }

    /**
     * Get the production facility number.
     *
     * @return int Returns the production facility number.
     */
    public function getProductionFacilityNumber() {
        return $this->productionFacilityNumber;
    }

    /**
     * Get the production state.
     *
     * @return int Returns the production state.
     */
    public function getProductionState() {
        return $this->productionState;
    }

    /**
     * Get the reason for production.
     *
     * @return int Returns the reason for production.
     */
    public function getReasonProduction() {
        return $this->reasonProduction;
    }

    /**
     * Get the residual value.
     *
     * @return int Returns the residual value.
     */
    public function getResidualValue() {
        return $this->residualValue;
    }

    /**
     * Get the retain ticket at entry.
     *
     * @return bool Returns the retain ticket at entry.
     */
    public function getRetainTicketEntry() {
        return $this->retainTicketEntry;
    }

    /**
     * Get the retain ticket exit.
     *
     * @return bool Returns the retain ticket ax exit.
     */
    public function getRetainTicketExit() {
        return $this->retainTicketExit;
    }

    /**
     * Get the serial no.
     *
     * @return string Returns the serial no.
     */
    public function getSerialNo() {
        return $this->serialNo;
    }

    /**
     * Get the serial number KeyCard/Swatch.
     *
     * @return string Returns the serial number KeyCard/Swatch.
     */
    public function getSerialNumberKeyCardSwatch() {
        return $this->serialNumberKeyCardSwatch;
    }

    /**
     * Get the suspend period from.
     *
     * @return DateTime Returns the suspend period from.
     */
    public function getSuspendPeriodFrom() {
        return $this->suspendPeriodFrom;
    }

    /**
     * Get the suspend period until.
     *
     * @return DateTime Returns the suspend period until.
     */
    public function getSuspendPeriodUntil() {
        return $this->suspendPeriodUntil;
    }

    /**
     * Get the ticket number.
     *
     * @return string Returns the ticket number.
     */
    public function getTicketNumber() {
        return $this->ticketNumber;
    }

    /**
     * Get the ticket sub type.
     *
     * @return string Returns the ticket sub type.
     */
    public function getTicketSubType() {
        return $this->ticketSubType;
    }

    /**
     * Get the ticket type.
     *
     * @return int Returns the ticket type.
     */
    public function getTicketType() {
        return $this->ticketType;
    }

    /**
     * Get the use valid car parks.
     *
     * @return bool Returns the use valid car parks.
     */
    public function getUseValidCarParks() {
        return $this->useValidCarParks;
    }

    /**
     * Get the user number.
     *
     * @return int Returns the user number.
     */
    public function getUserNumber() {
        return $this->userNumber;
    }

    /**
     * Get the valid from.
     *
     * @return DateTime Returns the valid from.
     */
    public function getValidFrom() {
        return $this->validFrom;
    }

    /**
     * Set the article number.
     *
     * @param int $articleNumber The article number.
     * @return Card Returns this card.
     */
    public function setArticleNumber($articleNumber) {
        $this->articleNumber = $articleNumber;
        return $this;
    }

    /**
     * Set the currency residual value.
     *
     * @param string $currencyResidualValue The currency residual value.
     * @return Card Returns this card.
     */
    public function setCurrencyResidualValue($currencyResidualValue) {
        $this->currencyResidualValue = $currencyResidualValue;
        return $this;
    }

    /**
     * Set the display text.
     *
     * @param bool $displayText The display text.
     * @return Card Returns this card.
     */
    public function setDisplayText($displayText) {
        $this->displayText = $displayText;
        return $this;
    }

    /**
     * Set the display text 1.
     *
     * @param string $displayText1 The display text 1.
     * @return Card Returns this card.
     */
    public function setDisplayText1($displayText1) {
        $this->displayText1 = $displayText1;
        return $this;
    }

    /**
     * Set the display text 2.
     *
     * @param string $displayText2 The display text 2.
     * @return Card Returns this card.
     */
    public function setDisplayText2($displayText2) {
        $this->displayText2 = $displayText2;
        return $this;
    }

    /**
     * Set the entry barrier closed.
     *
     * @param bool $entryBarrierClosed The entry barrier closed.
     * @return Card Returns this card.
     */
    public function setEntryBarrierClosed($entryBarrierClosed) {
        $this->entryBarrierClosed = $entryBarrierClosed;
        return $this;
    }

    /**
     * Set the exit barrier closed.
     *
     * @param bool $exitBarrierClosed The exit barrier closed.
     * @return Card Returns this card.
     */
    public function setExitBarrierClosed($exitBarrierClosed) {
        $this->exitBarrierClosed = $exitBarrierClosed;
        return $this;
    }

    /**
     * Set the expires.
     *
     * @param DateTime|null $expires The expires.
     * @return Card Returns this card.
     */
    public function setExpires(DateTime $expires = null) {
        $this->expires = $expires;
        return $this;
    }

    /**
     * Set the is neutral.
     *
     * @param bool $isNeutral The is neutral.
     * @return Card Returns this card.
     */
    public function setNeutral($isNeutral) {
        $this->isNeutral = $isNeutral;
        return $this;
    }

    /**
     * Set the personnal no.
     *
     * @param int $personnalNo The personnal no.
     * @return Card Returns this card.
     */
    public function setPersonnalNo($personnalNo) {
        $this->personnalNo = $personnalNo;
        return $this;
    }

    /**
     * Set the production counter.
     *
     * @param int $productionCounter The production counter.
     * @return Card Returns this card.
     */
    public function setProductionCounter($productionCounter) {
        $this->productionCounter = $productionCounter;
        return $this;
    }

    /**
     * Set the production facility number.
     *
     * @param int $productionFacilityNumber The production facility number.
     * @return Card Returns this card.
     */
    public function setProductionFacilityNumber($productionFacilityNumber) {
        $this->productionFacilityNumber = $productionFacilityNumber;
        return $this;
    }

    /**
     * Set the production state.
     *
     * @param int $productionState The production state.
     * @return Card Returns this card.
     */
    public function setProductionState($productionState) {
        $this->productionState = $productionState;
        return $this;
    }

    /**
     * Set the reason for production.
     *
     * @param int $reasonProduction The reason for production.
     * @return Card Returns this card.
     */
    public function setReasonProduction($reasonProduction) {
        $this->reasonProduction = $reasonProduction;
        return $this;
    }

    /**
     * Set the residual value.
     *
     * @param int $residualValue The residual value.
     * @return Card Returns this card.
     */
    public function setResidualValue($residualValue) {
        $this->residualValue = $residualValue;
        return $this;
    }

    /**
     * Set the retain ticket at entry.
     *
     * @param bool $retainTicketEntry The retain ticket at entry.
     * @return Card Returns this card.
     */
    public function setRetainTicketEntry($retainTicketEntry) {
        $this->retainTicketEntry = $retainTicketEntry;
        return $this;
    }

    /**
     * Set the retain ticket at exit.
     *
     * @param bool $retainTicketExit The retain ticket at exit.
     * @return Card Returns this card.
     */
    public function setRetainTicketExit($retainTicketExit) {
        $this->retainTicketExit = $retainTicketExit;
        return $this;
    }

    /**
     * Set the serial no.
     *
     * @param string $serialNo The serial no.
     * @return Card Returns this card.
     */
    public function setSerialNo($serialNo) {
        $this->serialNo = $serialNo;
        return $this;
    }

    /**
     * Set the serial number KeyCard/Swatch.
     *
     * @param string $serialNumberKeyCardSwatch The serial number KeyCard/Swatch.
     * @return Card Returns this card.
     */
    public function setSerialNumberKeyCardSwatch($serialNumberKeyCardSwatch) {
        $this->serialNumberKeyCardSwatch = $serialNumberKeyCardSwatch;
        return $this;
    }

    /**
     * Set the suspend period from.
     *
     * @param DateTime|null $suspendPeriodFrom The suspend period from.
     * @return Card Returns this card.
     */
    public function setSuspendPeriodFrom(DateTime $suspendPeriodFrom = null) {
        $this->suspendPeriodFrom = $suspendPeriodFrom;
        return $this;
    }

    /**
     * Set the suspend period until.
     *
     * @param DateTime|null $suspendPeriodUntil The suspend period until.
     * @return Card Returns this card.
     */
    public function setSuspendPeriodUntil(DateTime $suspendPeriodUntil = null) {
        $this->suspendPeriodUntil = $suspendPeriodUntil;
        return $this;
    }

    /**
     * Set the ticket number.
     *
     * @param string $ticketNumber The ticket number.
     * @return Card Returns this card.
     */
    public function setTicketNumber($ticketNumber) {
        $this->ticketNumber = $ticketNumber;
        return $this;
    }

    /**
     * Set the ticket sub type.
     *
     * @param string $ticketSubType The ticket sub type.
     * @return Card Returns this card.
     */
    public function setTicketSubType($ticketSubType) {
        $this->ticketSubType = $ticketSubType;
        return $this;
    }

    /**
     * Set the ticket type.
     *
     * @param int $ticketType The ticket type.
     * @return Card Returns this card.
     */
    public function setTicketType($ticketType) {
        $this->ticketType = $ticketType;
        return $this;
    }

    /**
     * Set the use valid car parks.
     *
     * @param bool $useValidCarParks The use valid car parks.
     * @return Card Returns this card.
     */
    public function setUseValidCarParks($useValidCarParks) {
        $this->useValidCarParks = $useValidCarParks;
        return $this;
    }

    /**
     * Set the user number.
     *
     * @param int $userNumber The user number.
     * @return Card Returns this card.
     */
    public function setUserNumber($userNumber) {
        $this->userNumber = $userNumber;
        return $this;
    }

    /**
     * Set the valid from.
     *
     * @param DateTime|null $validFrom The valid from.
     * @return Card Returns this card.
     */
    public function setValidFrom(DateTime $validFrom = null) {
        $this->validFrom = $validFrom;
        return $this;
    }
}
