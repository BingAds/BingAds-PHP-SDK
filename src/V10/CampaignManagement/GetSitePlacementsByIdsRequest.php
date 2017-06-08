<?php
// Generated on 6/7/2017 5:54:10 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Retrieves the specified website-placement bids from the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277539(v=msads.100).aspx GetSitePlacementsByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetSitePlacementsByIds
     */
    final class GetSitePlacementsByIdsRequest
    {
        /**
         * The identifier of the ad group that contains the website placement bids to be retrieved.
         * @var integer
         */
        public $AdGroupId;

        /**
         * An array of identifiers that identifies the website placement bids to be retrieved.
         * @var integer[]
         */
        public $SitePlacementIds;
    }
}
