<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the specified LinkedIn segments.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatelinkedinsegments?view=bingads-13 UpdateLinkedInSegments Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateLinkedInSegments
     */
    final class UpdateLinkedInSegmentsResponse
    {
        /**
         * n array BatchError that contains details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
