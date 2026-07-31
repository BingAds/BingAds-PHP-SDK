<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the specified Universal Event Tracking (UET) tags.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getuettagsbyids?view=bingads-13 GetUetTagsByIds Request Object
     * 
     * @uses UetTagAdditionalField
     * @used-by BingAdsCampaignManagementService::GetUetTagsByIds
     */
    final class GetUetTagsByIdsRequest
    {
        /**
         * A maximum of 100 identifiers of the UET tags that you want to get.
         * @var integer[]
         */
        public $TagIds;

        /**
         * The list of additional properties that you want included within each returned UetTag object.
         * @var UetTagAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
