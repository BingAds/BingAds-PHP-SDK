<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves the specified audiences from the specified account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getaudiencesbyids?view=bingads-13 GetAudiencesByIds Response Object
     * 
     * @uses Audience
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAudiencesByIds
     */
    final class GetAudiencesByIdsResponse
    {
        /**
         * The list of audiences that corresponds directly to the audience identifiers that you specified in the request.
         * @var Audience[]
         */
        public $Audiences;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
