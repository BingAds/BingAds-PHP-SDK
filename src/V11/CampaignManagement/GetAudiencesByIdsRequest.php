<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Retrieves the specified audiences from the specified account.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getaudiencesbyids?view=bingads-11 GetAudiencesByIds Request Object
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
         * One or more types of audiences to return.
         * @var AudienceType
         */
        public $Type;

        /**
         * The list of additional properties that you want included within each returned Audience object.
         * @var AudienceAdditionalField
         */
        public $ReturnAdditionalFields;

        /**
         * Determines whether or not to return the list of campaign types that support this audience.
         * @var boolean
         */
        public $ReturnSupportedCampaignTypes;
    }
}
