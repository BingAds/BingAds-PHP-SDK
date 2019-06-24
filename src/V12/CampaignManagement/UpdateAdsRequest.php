<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Updates the specified ads within an ad group.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/updateads?view=bingads-12 UpdateAds Request Object
     * 
     * @uses Ad
     * @used-by BingAdsCampaignManagementService::UpdateAds
     */
    final class UpdateAdsRequest
    {
        /**
         * The ID of the ad group that contains the ads to update.
         * @var integer
         */
        public $AdGroupId;

        /**
         * A list of ads to update.
         * @var Ad[]
         */
        public $Ads;
    }
}
