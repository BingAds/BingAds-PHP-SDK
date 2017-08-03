<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets the specified ad groups that exist within a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277529(v=msads.100).aspx GetAdGroupsByIds Request Object
     * 
     * @uses AdGroupAdditionalField
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

        /**
         * The list of additional elements that you want included within each returned AdGroup object.
         * @var AdGroupAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
