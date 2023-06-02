<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a collection of ads or keywords that failed editorial review, and the reason for the failure.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/editorialreasoncollection?view=bingads-13 EditorialReasonCollection Data Object
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
