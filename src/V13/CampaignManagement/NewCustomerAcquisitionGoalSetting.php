<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the new customer acquisition goal setting data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/newcustomeracquisitiongoalsetting?view=bingads-13 NewCustomerAcquisitionGoalSetting Data Object
     */
    final class NewCustomerAcquisitionGoalSetting extends Setting
    {
        /**
         * The target amount you want to pay for a new customer's purchase of your product or service.
         * @var float
         */
        public $AdditionalConversionValue;

        /**
         * Enable new customer acqisition bid only mode.
         * @var boolean
         */
        public $NewCustomerAcquisitionBidOnlyMode;

        /**
         * The identifier for the new customer acquisition goal.
         * @var integer
         */
        public $NewCustomerAcquisitionGoalId;
    }

}
