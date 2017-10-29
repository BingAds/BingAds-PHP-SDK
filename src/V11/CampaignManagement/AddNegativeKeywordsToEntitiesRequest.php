<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds negative keywords to the specified campaign or ad group.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/addnegativekeywordstoentities?version=11 AddNegativeKeywordsToEntities Request Object
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
