<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets conversion value rules by the account ID.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getconversionvaluerulesbyaccountid?view=bingads-13 GetConversionValueRulesByAccountId Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetConversionValueRulesByAccountId
     */
    final class GetConversionValueRulesByAccountIdRequest
    {
        /**
         * Fetch conversion value rules from this account ID.
         * @var integer
         */
        public $AccountId;

        /**
         * The locale identifier (LCID) for the request.
         * @var integer
         */
        public $Lcid;
    }
}
