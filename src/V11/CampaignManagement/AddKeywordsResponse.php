<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds one or more keywords to an ad group.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/addkeywords?view=bingads-11 AddKeywords Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddKeywords
     */
    final class AddKeywordsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the keywords that were added.
         * @var integer[]
         */
        public $KeywordIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
