<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets conversion value rules by their IDs.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getconversionvaluerulesbyids?view=bingads-13 GetConversionValueRulesByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetConversionValueRulesByIds
     */
    final class GetConversionValueRulesByIdsRequest
    {
        /**
         * The IDs of the conversion value rules to fetch.
         * @var integer[]
         */
        public $RuleIds;

        /**
         * The locale identifier (LCID) for the request.
         * @var integer
         */
        public $Lcid;
    }
}
