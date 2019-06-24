<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves the specified audiences from the specified account.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getaudiencesbyids?view=bingads-13 GetAudiencesByIds Request Object
     * 
     * @uses AudienceType
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
         * One or more types of audiences to return.
         * @var AudienceType
         */
        public $Type;
    }
}
