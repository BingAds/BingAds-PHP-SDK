<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object to retract or restate an offline conversion via the ApplyOfflineConversionAdjustments operation.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/offlineconversionadjustment?view=bingads-13 OfflineConversionAdjustment Data Object
     * 
     * @used-by ApplyOfflineConversionAdjustmentsRequest
     */
    final class OfflineConversionAdjustment
    {
        /**
         * The currency code for the restated offline conversion.
         * @var string
         */
        public $AdjustmentCurrencyCode;

        /**
         * The date and time when the adjustment occurred.
         * @var \DateTime
         */
        public $AdjustmentTime;

        /**
         * Determines whether to retract or restate the offline conversion.
         * @var string
         */
        public $AdjustmentType;

        /**
         * The adjusted offline conversion value.
         * @var double
         */
        public $AdjustmentValue;

        /**
         * The conversion goal name.
         * @var string
         */
        public $ConversionName;

        /**
         * The date and time when the original offline conversion occurred.
         * @var \DateTime
         */
        public $ConversionTime;

        /**
         * The MSCLKID for the offline conversion.
         * @var string
         */
        public $MicrosoftClickId;
    }

}
