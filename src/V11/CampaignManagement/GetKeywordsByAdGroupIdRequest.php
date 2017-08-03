<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the keywords within an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236311(v=msads.110).aspx GetKeywordsByAdGroupId Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetKeywordsByAdGroupId
     */
    final class GetKeywordsByAdGroupIdRequest
    {
        /**
         * The identifier of the ad group that keywords are returned for.
         * @var integer
         */
        public $AdGroupId;
    }
}
