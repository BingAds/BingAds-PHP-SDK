<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a collection of ads or keywords that failed editorial review, and the reason for the failure.
     * @link http://msdn.microsoft.com/en-us/library/ff728504(v=msads.110).aspx EditorialReasonCollection Data Object
     * 
     * @uses AppealStatus
     * @uses EditorialReason
     * @used-by GetEditorialReasonsByIdsResponse
     */
    final class EditorialReasonCollection
    {
        /**
         * Identifies the ad group which is the parent of the ad or keyword that failed editorial review.
         * @var integer
         */
        public $AdGroupId;

        /**
         * Identifies the ad or keyword that failed editorial review.
         * @var integer
         */
        public $AdOrKeywordId;

        /**
         * A value that determines whether you can appeal the issues found by the editorial review.
         * @var AppealStatus
         */
        public $AppealStatus;

        /**
         * An array of editorial reasons that you can use to determine the component of an ad or keyword that failed editorial review, and the reason for the failure.
         * @var EditorialReason[]
         */
        public $Reasons;
    }

}
