<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Retrieves the keywords with the specified editorial review status.
     * @link http://msdn.microsoft.com/en-us/library/dn277501(v=msads.110).aspx GetKeywordsByEditorialStatus Response Object
     * 
     * @uses Keyword
     * @used-by BingAdsCampaignManagementService::GetKeywordsByEditorialStatus
     */
    final class GetKeywordsByEditorialStatusResponse
    {
        /**
         * An array of Keyword objects that contains information about the keywords that were retrieved.
         * @var Keyword[]
         */
        public $Keywords;
    }
}
