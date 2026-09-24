<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves LinkedIn segments associated with the account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getlinkedinsegments?view=bingads-13 GetLinkedInSegments Request Object
     * 
     * @uses LinkedInSegmentType
     * @used-by BingAdsCampaignManagementService::GetLinkedInSegments
     */
    final class GetLinkedInSegmentsRequest
    {
        /**
         * An array of LinkedIn segments to retrieve.
         * @var integer[]
         */
        public $LinkedInSegmentIds;

        /**
         * The type of LinkedIn segment to retrieve.
         * @var LinkedInSegmentType
         */
        public $Type;
    }
}
