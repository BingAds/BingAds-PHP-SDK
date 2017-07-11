<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes one or more campaign criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn913125(v=msads.110).aspx DeleteCampaignCriterions Request Object
     * 
     * @uses CampaignCriterionType
     * @used-by BingAdsCampaignManagementService::DeleteCampaignCriterions
     */
    final class DeleteCampaignCriterionsRequest
    {
        public $CampaignCriterionIds;
        public $CampaignId;
        public $CriterionType;
    }
}
