<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds array of HTML5 assets to a specified campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addhtml5s?view=bingads-13 AddHTML5s Request Object
     * 
     * @uses HTML5
     * @used-by BingAdsCampaignManagementService::AddHTML5s
     */
    final class AddHTML5sRequest
    {
        /**
         * Array of HTML5 assets to add to the specified campaign.
         * @var HTML5[]
         */
        public $HTML5Assets;
    }
}
