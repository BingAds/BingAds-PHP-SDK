<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Sets the negative site URLs of the specified ad groups.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/setnegativesitestoadgroups?view=bingads-12 SetNegativeSitesToAdGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::SetNegativeSitesToAdGroups
     */
    final class SetNegativeSitesToAdGroupsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
