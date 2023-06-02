<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object to retract or restate an online conversion.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/onlineconversionadjustment?view=bingads-13 OnlineConversionAdjustment Data Object
     * 
     * @used-by ApplyOnlineConversionAdjustmentsRequest
     */
    final class OnlineConversionAdjustment
    {
        /**
         * The currency code for the restated online conversion.
         * @var string
         */
        public $AdjustmentCurrencyCode;

        /**
         * The date and time when the adjustment occurred.
         * @var \DateTime
         */
        public $AdjustmentTime;

        /**
         * Determines whether to retract or restate the online conversion.
         * @var string
         */
        public $AdjustmentType;

        /**
         * The adjusted online conversion value.
         * @var double
         */
        public $AdjustmentValue;

        /**
         * The conversion goal name.
         * @var string
         */
        public $ConversionName;

        /**
         * The ID for this transaction.
         * @var string
         */
        public $TransactionId;
    }

}
