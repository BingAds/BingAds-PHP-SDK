<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes one or more keywords in a specified ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletekeywords?view=bingads-13 DeleteKeywords Request Object
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
