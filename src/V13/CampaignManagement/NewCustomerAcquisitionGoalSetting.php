<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/newcustomeracquisitiongoalsetting?view=bingads-13 NewCustomerAcquisitionGoalSetting Data Object
     */
    final class NewCustomerAcquisitionGoalSetting extends Setting
    {
        /**
         * Reserved.
         * @var float
         */
        public $AdditionalConversionValue;

        /**
         * Reserved.
         * @var boolean
         */
        public $NewCustomerAcquisitionBidOnlyMode;

        /**
         * Reserved.
         * @var integer
         */
        public $NewCustomerAcquisitionGoalId;
    }

}
