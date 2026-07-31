<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getlinkedinsegments?view=bingads-13 GetLinkedInSegments Response Object
     * 
     * @uses LinkedInSegment
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetLinkedInSegments
     */
    final class GetLinkedInSegmentsResponse
    {
        /**
         * Reserved.
         * @var LinkedInSegment[]
         */
        public $LinkedInSegments;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
