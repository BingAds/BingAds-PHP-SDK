<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes array of LinkedIn segments from a specified campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletelinkedinsegments?view=bingads-13 DeleteLinkedInSegments Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteLinkedInSegments
     */
    final class DeleteLinkedInSegmentsResponse
    {
        /**
         * An array BatchError that contains details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
