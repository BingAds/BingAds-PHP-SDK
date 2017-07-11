<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the specified campaign criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn913135(v=msads.110).aspx GetCampaignCriterionsByIds Request Object
     * 
     * @uses CampaignCriterionType
     * @used-by BingAdsCampaignManagementService::GetCampaignCriterionsByIds
     */
    final class GetCampaignCriterionsByIdsRequest
    {
        public $CampaignCriterionIds;
        public $CampaignId;
        public $CriterionType;
    }
}
