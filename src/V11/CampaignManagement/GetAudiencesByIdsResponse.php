<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Retrieves the specified audiences from the specified account.
     * @link http://msdn.microsoft.com/en-us/library/mt807654(v=msads.110).aspx GetAudiencesByIds Response Object
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
