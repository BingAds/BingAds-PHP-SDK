<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Retrieves all the website-placement bids from the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277535(v=msads.100).aspx GetSitePlacementsByAdGroupId Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetSitePlacementsByAdGroupId
     */
    final class GetSitePlacementsByAdGroupIdRequest
    {
        /**
         * The identifier of the ad group that contains the website placement bids that will be retrieved.
         * @var integer
         */
        public $AdGroupId;
    }
}
