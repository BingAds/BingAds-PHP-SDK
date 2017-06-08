<?php
// Generated on 6/7/2017 5:55:37 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes the specified ad group criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn236302(v=msads.110).aspx DeleteAdGroupCriterions Request Object
     * 
     * @uses AdGroupCriterionType
     * @used-by BingAdsCampaignManagementService::DeleteAdGroupCriterions
     */
    final class DeleteAdGroupCriterionsRequest
    {
        public $AdGroupCriterionIds;
        public $AdGroupId;
        public $CriterionType;
    }
}
