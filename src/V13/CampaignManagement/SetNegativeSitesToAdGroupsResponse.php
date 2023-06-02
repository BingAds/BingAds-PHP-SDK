<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Sets the negative site URLs directly to ad groups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/setnegativesitestoadgroups?view=bingads-13 SetNegativeSitesToAdGroups Response Object
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
