<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes array of HTML5 assets from a specified campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletehtml5s?view=bingads-13 DeleteHTML5s Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteHTML5s
     */
    final class DeleteHTML5sResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that weren't successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
