<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Adds one or more keywords to an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277513(v=msads.100).aspx AddKeywords Request Object
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
         * An array of Keyword objects to add to the specified ad group.
         * @var Keyword[]
         */
        public $Keywords;
    }
}
