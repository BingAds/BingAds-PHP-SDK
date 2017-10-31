<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates the keywords within a specified ad group.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/updatekeywords?view=bingads-11 UpdateKeywords Request Object
     * 
     * @uses Keyword
     * @used-by BingAdsCampaignManagementService::UpdateKeywords
     */
    final class UpdateKeywordsRequest
    {
        /**
         * The identifier of the ad group whose keywords will be updated.
         * @var integer
         */
        public $AdGroupId;

        /**
         * An array of Keyword objects that contains the updated keyword information.
         * @var Keyword[]
         */
        public $Keywords;
    }
}
