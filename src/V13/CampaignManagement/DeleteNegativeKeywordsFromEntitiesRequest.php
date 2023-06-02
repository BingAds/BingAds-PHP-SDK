<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes negative keywords from the specified campaign or ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletenegativekeywordsfromentities?view=bingads-13 DeleteNegativeKeywordsFromEntities Request Object
     * 
     * @uses EntityNegativeKeyword
     * @used-by BingAdsCampaignManagementService::DeleteNegativeKeywordsFromEntities
     */
    final class DeleteNegativeKeywordsFromEntitiesRequest
    {
        /**
         * An array of negative keyword with associated entity such as a campaign or ad group.
         * @var EntityNegativeKeyword[]
         */
        public $EntityNegativeKeywords;
    }
}
