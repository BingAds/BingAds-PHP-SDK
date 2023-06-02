<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes one or more campaign criterions.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletecampaigncriterions?view=bingads-13 DeleteCampaignCriterions Request Object
     * 
     * @uses CampaignCriterionType
     * @used-by BingAdsCampaignManagementService::DeleteCampaignCriterions
     */
    final class DeleteCampaignCriterionsRequest
    {
        /**
         * A list of unique system identifiers corresponding to the campaign criterions that you want to delete.
         * @var integer[]
         */
        public $CampaignCriterionIds;

        /**
         * The identifier of the campaign that owns the criterions to delete.
         * @var integer
         */
        public $CampaignId;

        /**
         * The type of criterion to delete, for example Webpage.
         * @var CampaignCriterionType
         */
        public $CriterionType;
    }
}
