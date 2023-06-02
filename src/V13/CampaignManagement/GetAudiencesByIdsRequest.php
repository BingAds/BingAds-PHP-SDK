<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves the specified audiences from the specified account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getaudiencesbyids?view=bingads-13 GetAudiencesByIds Request Object
     * 
     * @uses AudienceType
     * @uses AudienceAdditionalField
     * @used-by BingAdsCampaignManagementService::GetAudiencesByIds
     */
    final class GetAudiencesByIdsRequest
    {
        /**
         * A maximum of 100 identifiers of the requested audiences.
         * @var integer[]
         */
        public $AudienceIds;

        /**
         * The type of audiences to return.
         * @var AudienceType
         */
        public $Type;

        /**
         * The additional field values enable you to get the latest features using the current version of Campaign Management API, and in the next version the corresponding elements will be included by default.
         * @var AudienceAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
