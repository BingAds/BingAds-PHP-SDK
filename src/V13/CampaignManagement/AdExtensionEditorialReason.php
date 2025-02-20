<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that you can use to determine the component of an ad extension that failed editorial review, and the reason for the failure.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adextensioneditorialreason?view=bingads-13 AdExtensionEditorialReason Data Object
     * 
     * @used-by AdExtensionEditorialReasonCollection
     */
    final class AdExtensionEditorialReason
    {
        /**
         * The component of the ad extension that failed editorial review.
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
