<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds negative keywords to the specified campaign or ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addnegativekeywordstoentities?view=bingads-13 AddNegativeKeywordsToEntities Request Object
     * 
     * @uses EntityNegativeKeyword
     * @used-by BingAdsCampaignManagementService::AddNegativeKeywordsToEntities
     */
    final class AddNegativeKeywordsToEntitiesRequest
    {
        /**
         * An array of negative keyword with associated entity such as a campaign or ad group.
         * @var EntityNegativeKeyword[]
         */
        public $EntityNegativeKeywords;
    }
}
