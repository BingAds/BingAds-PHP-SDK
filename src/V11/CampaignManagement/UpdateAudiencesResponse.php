<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates the specified audiences.
     * @link http://msdn.microsoft.com/en-us/library/mt807652(v=msads.110).aspx UpdateAudiences Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateAudiences
     */
    final class UpdateAudiencesResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
