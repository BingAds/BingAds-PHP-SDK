<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the specified ad groups within the specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277529(v=msads.110).aspx GetAdGroupsByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetAdGroupsByIds
     */
    final class GetAdGroupsByIdsRequest
    {
        /**
         * The identifier of the campaign that contains the ad groups to get.
         * @var integer
         */
        public $CampaignId;

        /**
         * A maximum of 1,000 identifiers of the ad groups to get.
         * @var integer[]
         */
        public $AdGroupIds;
    }
}
