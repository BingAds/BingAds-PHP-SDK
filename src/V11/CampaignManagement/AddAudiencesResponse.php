<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds one or more audiences.
     * @link http://msdn.microsoft.com/en-us/library/mt807651(v=msads.110).aspx AddAudiences Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddAudiences
     */
    final class AddAudiencesResponse
    {
        /**
         * A list of unique system identifiers corresponding to the audiences that were added.
         * @var integer[]
         */
        public $AudienceIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
