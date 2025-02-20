<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that you can use to determine the component of an ad or keyword that failed editorial review, and the reason for the failure.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/editorialreason?view=bingads-13 EditorialReason Data Object
     * 
     * @used-by EditorialReasonCollection
     */
    final class EditorialReason
    {
        /**
         * The component of the ad or keyword that failed editorial review.
         * @var string
         */
        public $Location;

        /**
         * A list of countries or regions where the ad or keyword failed editorial review.
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
