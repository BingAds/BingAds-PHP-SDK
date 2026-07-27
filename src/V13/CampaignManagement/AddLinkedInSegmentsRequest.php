<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds array of LinkedIn segments to a specified campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addlinkedinsegments?view=bingads-13 AddLinkedInSegments Request Object
     * 
     * @uses LinkedInSegment
     * @used-by BingAdsCampaignManagementService::AddLinkedInSegments
     */
    final class AddLinkedInSegmentsRequest
    {
        /**
         * Array of LinkedIn segments to add to the specified campaign.
         * @var LinkedInSegment[]
         */
        public $LinkedInSegments;
    }
}
