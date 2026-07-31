<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the LinkedInSegment data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/linkedinsegment?view=bingads-13 LinkedInSegment Data Object
     * 
     * @uses LinkedInSegmentStatus
     * @uses ProfileType
     * @used-by AddLinkedInSegmentsRequest
     * @used-by GetLinkedInSegmentsResponse
     * @used-by UpdateLinkedInSegmentsRequest
     */
    class LinkedInSegment
    {
        /**
         * The LinkedIn segment ID.
         * @var integer
         */
        public $Id;

        /**
         * The name of the LinkedIn segment.
         * @var string
         */
        public $Name;

        /**
         * The reach of the LinkedIn segment.
         * @var integer
         */
        public $Reach;

        /**
         * The status of hte LinkedIn segment.
         * @var LinkedInSegmentStatus
         */
        public $Status;

        /**
         * The type of the LinkedIn segment.
         * @var ProfileType
         */
        public $Type;
    }

}
