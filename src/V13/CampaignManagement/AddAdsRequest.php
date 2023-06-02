<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds one or more ads to an ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addads?view=bingads-13 AddAds Request Object
     * 
     * @uses Ad
     * @used-by BingAdsCampaignManagementService::AddAds
     */
    final class AddAdsRequest
    {
        /**
         * The identifier of the ad group to add the ads to.
         * @var integer
         */
        public $AdGroupId;

        /**
         * An array of up to 50 ads that you want added to the ad group.
         * @var Ad[]
         */
        public $Ads;
    }
}
