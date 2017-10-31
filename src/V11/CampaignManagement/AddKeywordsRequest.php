<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds one or more keywords to an ad group.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/addkeywords?view=bingads-11 AddKeywords Request Object
     * 
     * @uses Keyword
     * @used-by BingAdsCampaignManagementService::AddKeywords
     */
    final class AddKeywordsRequest
    {
        /**
         * The identifier of the ad group to add the keywords to.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The list of keywords to add to the ad group.
         * @var Keyword[]
         */
        public $Keywords;
    }
}
