<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes array of LinkedIn segments from a specified campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletelinkedinsegments?view=bingads-13 DeleteLinkedInSegments Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteLinkedInSegments
     */
    final class DeleteLinkedInSegmentsRequest
    {
        /**
         * Array of LinkedIn segment IDs to delete from the specified campaign.
         * @var integer[]
         */
        public $LinkedInSegmentIds;
    }
}
