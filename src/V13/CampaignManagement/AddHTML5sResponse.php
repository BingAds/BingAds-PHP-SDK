<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds array of HTML5 assets to a specified campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addhtml5s?view=bingads-13 AddHTML5s Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddHTML5s
     */
    final class AddHTML5sResponse
    {
        /**
         * The HTML5 asset IDs.
         * @var integer[]
         */
        public $HTML5AssetIds;

        /**
         * An array of BatchError objects that contain details for any request items that weren't successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
