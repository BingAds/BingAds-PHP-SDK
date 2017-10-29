<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes one or more keywords in a specified ad group.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/deletekeywords?version=11 DeleteKeywords Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteKeywords
     */
    final class DeleteKeywordsRequest
    {
        /**
         * The identifier of the ad group that contains the keywords to delete.
         * @var integer
         */
        public $AdGroupId;

        /**
         * A maximum of 1,000 keywords identifiers to delete.
         * @var integer[]
         */
        public $KeywordIds;
    }
}
