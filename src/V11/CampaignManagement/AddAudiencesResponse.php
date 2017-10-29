<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds one or more audiences.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/addaudiences?version=11 AddAudiences Response Object
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
