<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the specified ads within an ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateads?view=bingads-13 UpdateAds Request Object
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
