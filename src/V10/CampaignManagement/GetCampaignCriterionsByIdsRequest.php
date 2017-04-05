<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets the specified campaign criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn913135(v=msads.100).aspx GetCampaignCriterionsByIds Request Object
     * 
     * @uses CampaignCriterionType
     * @used-by BingAdsCampaignManagementService::GetCampaignCriterionsByIds
     */
    final class GetCampaignCriterionsByIdsRequest
    {
        /**
         * A list of unique identifiers that identify the campaign criterions to get.
         * @var integer[]
         */
        public $CampaignCriterionIds;

        /**
         * The unique identifier of the campaign whose criterions you want to get.
         * @var integer
         */
        public $CampaignId;

        /**
         * The type of campaign criterions to get, for example ProductScope or Webpage.
         * @var CampaignCriterionType
         */
        public $CriterionType;
    }
}
