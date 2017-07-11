<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the negative site URLs of the specified campaigns.
     * @link http://msdn.microsoft.com/en-us/library/dn277525(v=msads.110).aspx GetNegativeSitesByCampaignIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetNegativeSitesByCampaignIds
     */
    final class GetNegativeSitesByCampaignIdsRequest
    {
        /**
         * The identifier of the account that contains the campaigns.
         * @var integer
         */
        public $AccountId;

        /**
         * An array of identifiers of the campaigns that contain the negative site URLs that you want to get.
         * @var integer[]
         */
        public $CampaignIds;
    }
}
