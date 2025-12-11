<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addlinkedinsegments?view=bingads-13 AddLinkedInSegments Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddLinkedInSegments
     */
    final class AddLinkedInSegmentsResponse
    {
        /**
         * Reserved.
         * @var integer[]
         */
        public $LinkedInSegmentIds;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
