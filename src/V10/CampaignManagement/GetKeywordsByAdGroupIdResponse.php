<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Retrieves the keywords for an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236311(v=msads.100).aspx GetKeywordsByAdGroupId Response Object
     * 
     * @uses Keyword
     * @used-by BingAdsCampaignManagementService::GetKeywordsByAdGroupId
     */
    final class GetKeywordsByAdGroupIdResponse
    {
        /**
         * An array of Keyword objects that represents the retrieved keywords.
         * @var Keyword[]
         */
        public $Keywords;
    }
}
