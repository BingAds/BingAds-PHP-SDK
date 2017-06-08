<?php
// Generated on 6/7/2017 5:54:10 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Updates the specified ads within a particular ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277531(v=msads.100).aspx UpdateAds Request Object
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
