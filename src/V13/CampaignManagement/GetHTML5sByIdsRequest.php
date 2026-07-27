<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieve HTML5 assets by their IDs.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/gethtml5sbyids?view=bingads-13 GetHTML5sByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetHTML5sByIds
     */
    final class GetHTML5sByIdsRequest
    {
        /**
         * An array of the HTML5 asset IDs.
         * @var integer[]
         */
        public $HTML5AssetIds;
    }
}
