<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getlinkedinsegments?view=bingads-13 GetLinkedInSegments Request Object
     * 
     * @uses ProfileType
     * @used-by BingAdsCampaignManagementService::GetLinkedInSegments
     */
    final class GetLinkedInSegmentsRequest
    {
        /**
         * Reserved.
         * @var integer[]
         */
        public $LinkedInSegmentIds;

        /**
         * Reserved.
         * @var ProfileType
         */
        public $Type;
    }
}
