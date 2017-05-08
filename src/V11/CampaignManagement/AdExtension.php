<?php
// Generated on 5/7/2017 5:48:20 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the base object of an ad extension.
     * @link http://msdn.microsoft.com/en-us/library/hh527708(v=msads.110).aspx AdExtension Data Object
     * 
     * @uses KeyValuePairOfstringstring
     * @uses Schedule
     * @uses AdExtensionStatus
     * @used-by AdExtensionAssociation
     * @used-by AddAdExtensionsRequest
     * @used-by GetAdExtensionsByIdsResponse
     * @used-by UpdateAdExtensionsRequest
     */
    class AdExtension
    {
        /**
         * This element determines whether the preference is for the ad extension to be displayed on mobile devices or all devices.
         * @var integer
         */
        public $DevicePreference;

        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The unique Bing Ads identifier of the ad extension.
         * @var integer
         */
        public $Id;

        /**
         * Determines the calendar day and time ranges when the ad extension is eligible to be shown in ads.
         * @var Schedule
         */
        public $Scheduling;

        /**
         * The status of the ad extension.
         * @var AdExtensionStatus
         */
        public $Status;

        /**
         * The type of ad extension.
         * @var string
         */
        public $Type;

        /**
         * The number of times the contents of the ad extension has been updated.
         * @var integer
         */
        public $Version;
    }

}
