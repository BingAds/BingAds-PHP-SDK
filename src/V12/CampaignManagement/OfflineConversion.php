<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines an offline conversion that you send to Bing Ads.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/offlineconversion?view=bingads-12 OfflineConversion Data Object
     * 
     * @used-by ApplyOfflineConversionsRequest
     */
    final class OfflineConversion
    {
        /**
         * The currency code for the offline conversion.
         * @var string
         */
        public $ConversionCurrencyCode;

        /**
         * The conversion goal name.
         * @var string
         */
        public $ConversionName;

        /**
         * The date and time when the offline conversion occurred.
         * @var \DateTime
         */
        public $ConversionTime;

        /**
         * The offline conversion value.
         * @var double
         */
        public $ConversionValue;

        /**
         * The MSCLKID for the offline conversion.
         * @var string
         */
        public $MicrosoftClickId;
    }

}
