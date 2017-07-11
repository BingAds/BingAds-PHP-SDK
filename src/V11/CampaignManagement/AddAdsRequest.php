<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds one or more ads to an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277506(v=msads.110).aspx AddAds Request Object
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
