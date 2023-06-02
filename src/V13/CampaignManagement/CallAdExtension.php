<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that specifies a click-to-call phone number to include in a text ad.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/calladextension?view=bingads-13 CallAdExtension Data Object
     */
    final class CallAdExtension extends AdExtension
    {
        /**
         * The country code where the phone number is registered.
         * @var string
         */
        public $CountryCode;

        /**
         * The option to show both your phone number and website, or just your phone number, to people seeing your ads on a smartphone.
         * @var boolean
         */
        public $IsCallOnly;

        /**
         * Determines whether call tracking is enabled for the call ad extension.
         * @var boolean
         */
        public $IsCallTrackingEnabled;

        /**
         * The clickable phone number to include in the ad.
         * @var string
         */
        public $PhoneNumber;

        /**
         * You can either use your own phone number or use a Microsoft Advertising forwarding phone number.
         * @var boolean
         */
        public $RequireTollFreeTrackingNumber;
    }

}
