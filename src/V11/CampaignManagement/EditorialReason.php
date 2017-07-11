<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an object that you can use to determine the component of an ad or keyword that failed editorial review, and the reason for the failure.
     * @link http://msdn.microsoft.com/en-us/library/ff728493(v=msads.110).aspx EditorialReason Data Object
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
         * A list of countries where the ad or keyword failed editorial review.
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
