<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Adds one or more keywords to an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277513(v=msads.100).aspx AddKeywords Response Object
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
