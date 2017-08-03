<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the specified campaign criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn913135(v=msads.110).aspx GetCampaignCriterionsByIds Response Object
     * 
     * @uses CampaignCriterion
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetCampaignCriterionsByIds
     */
    final class GetCampaignCriterionsByIdsResponse
    {
        /**
         * The list of campaign criterions that correspond directly to the identifiers specified in the request.
         * @var CampaignCriterion[]
         */
        public $CampaignCriterions;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
