<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes the specified audiences.
     * @link http://msdn.microsoft.com/en-us/library/mt807653(v=msads.110).aspx DeleteAudiences Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAudiences
     */
    final class DeleteAudiencesResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
