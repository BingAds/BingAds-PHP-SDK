<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves LinkedIn segments associated with the account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getlinkedinsegments?view=bingads-13 GetLinkedInSegments Response Object
     * 
     * @uses LinkedInSegment
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetLinkedInSegments
     */
    final class GetLinkedInSegmentsResponse
    {
        /**
         * An array of retrieved LinkedIn segments.
         * @var LinkedInSegment[]
         */
        public $LinkedInSegments;

        /**
         * An array BatchError that contains details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
