<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the base object of an ad extension.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adextension?view=bingads-13 AdExtension Data Object
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
         * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The unique Microsoft Advertising identifier of the ad extension.
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
         * Tracks the number of times the ad extension has been updated.
         * @var integer
         */
        public $Version;
    }

}
