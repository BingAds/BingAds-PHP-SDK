<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/linkedinsegment?view=bingads-13 LinkedInSegment Data Object
     * 
     * @uses LinkedInSegmentStatus
     * @uses LinkedInSegmentType
     * @used-by AddLinkedInSegmentsRequest
     * @used-by UpdateLinkedInSegmentsRequest
     */
    class LinkedInSegment
    {
        /**
         * Reserved.
         * @var integer
         */
        public $Id;

        /**
         * Reserved.
         * @var string
         */
        public $Name;

        /**
         * Reserved.
         * @var integer
         */
        public $Reach;

        /**
         * Reserved.
         * @var LinkedInSegmentStatus
         */
        public $Status;

        /**
         * Reserved.
         * @var LinkedInSegmentType
         */
        public $Type;
    }

}
