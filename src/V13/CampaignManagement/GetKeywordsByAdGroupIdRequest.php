<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the keywords within an ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getkeywordsbyadgroupid?view=bingads-13 GetKeywordsByAdGroupId Request Object
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
