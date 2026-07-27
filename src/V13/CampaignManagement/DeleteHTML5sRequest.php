<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes array of HTML5 assets from a specified campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletehtml5s?view=bingads-13 DeleteHTML5s Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteHTML5s
     */
    final class DeleteHTML5sRequest
    {
        /**
         * Array of HTML5 asset IDs to delete from the specified campaign.
         * @var integer[]
         */
        public $HTML5AssetIds;
    }
}
