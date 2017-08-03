<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Adds one or more campaign criterions that help determine whether ads in each campaign get served.
     * @link http://msdn.microsoft.com/en-us/library/dn913127(v=msads.100).aspx AddCampaignCriterions Request Object
     * 
     * @uses CampaignCriterion
     * @uses CampaignCriterionType
     * @used-by BingAdsCampaignManagementService::AddCampaignCriterions
     */
    final class AddCampaignCriterionsRequest
    {
        /**
         * A list of criterions that help determine whether ads in each campaign get served.
         * @var CampaignCriterion[]
         */
        public $CampaignCriterions;

        /**
         * The type of campaign criterion to add, for example ProductScope or Webpage.
         * @var CampaignCriterionType
         */
        public $CriterionType;
    }
}
