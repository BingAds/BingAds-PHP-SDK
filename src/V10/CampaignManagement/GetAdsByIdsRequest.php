<?php
// Generated on 6/7/2017 5:54:10 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Retrieves the specified ads from the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236296(v=msads.100).aspx GetAdsByIds Request Object
     * 
     * @uses AdType
     * @used-by BingAdsCampaignManagementService::GetAdsByIds
     */
    final class GetAdsByIdsRequest
    {
        /**
         * The identifier of the ad group that contains the ads to get.
         * @var integer
         */
        public $AdGroupId;

        /**
         * A maximum of 20 identifiers of the requested ads.
         * @var integer[]
         */
        public $AdIds;

        /**
         * One or more types of ads to return.
         * @var AdType[]
         */
        public $AdTypes;
    }
}
