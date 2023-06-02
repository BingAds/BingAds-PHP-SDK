<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds one or more audiences.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addaudiences?view=bingads-13 AddAudiences Response Object
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
