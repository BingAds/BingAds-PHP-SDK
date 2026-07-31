<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the specified LinkedIn segments.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatelinkedinsegments?view=bingads-13 UpdateLinkedInSegments Request Object
     * 
     * @uses LinkedInSegment
     * @used-by BingAdsCampaignManagementService::UpdateLinkedInSegments
     */
    final class UpdateLinkedInSegmentsRequest
    {
        /**
         * An array of the LinkedIn segments to update.
         * @var LinkedInSegment[]
         */
        public $LinkedInSegments;
    }
}
