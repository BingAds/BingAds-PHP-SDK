<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds array of LinkedIn segments to a specified campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addlinkedinsegments?view=bingads-13 AddLinkedInSegments Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddLinkedInSegments
     */
    final class AddLinkedInSegmentsResponse
    {
        /**
         * The LinkedIn segment IDs.
         * @var integer[]
         */
        public $LinkedInSegmentIds;

        /**
         * An array of BatchError objects that contain details for any request items that weren't successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
