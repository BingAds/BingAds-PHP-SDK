<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that you can use to determine the component of an asset group that failed editorial review, and the reason for the failure.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/assetgroupeditorialreason?view=bingads-13 AssetGroupEditorialReason Data Object
     * 
     * @used-by AssetGroupEditorialReasonCollection
     */
    final class AssetGroupEditorialReason
    {
        /**
         * The component of the asset group that failed editorial review.
         * @var string
         */
        public $Location;

        /**
         * The list of publisher countries or regions whose editorial guidelines do not allow the specified term.
         * @var string[]
         */
        public $PublisherCountries;

        /**
         * A code that identifies the reason for the failure.
         * @var integer
         */
        public $ReasonCode;

        /**
         * The term that failed editorial review.
         * @var string
         */
        public $Term;
    }

}
