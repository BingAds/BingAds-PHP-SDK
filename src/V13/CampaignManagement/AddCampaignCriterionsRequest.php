<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds one or more campaign criterions that help determine whether ads in each campaign get served.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addcampaigncriterions?view=bingads-13 AddCampaignCriterions Request Object
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
         * The type of criterion to add, for example Webpage.
         * @var CampaignCriterionType
         */
        public $CriterionType;
    }
}
