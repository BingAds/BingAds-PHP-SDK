<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an offline conversion that you send to Microsoft Advertising.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/offlineconversion?view=bingads-13 OfflineConversion Data Object
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
         * Reserved for future use.
         * @var double
         */
        public $ExternalAttributionCredit;

        /**
         * Reserved for future use.
         * @var string
         */
        public $ExternalAttributionModel;

        /**
         * The MSCLKID for the offline conversion.
         * @var string
         */
        public $MicrosoftClickId;
    }

}
