<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates the specified audiences.
     * @link http://msdn.microsoft.com/en-us/library/mt807652(v=msads.110).aspx UpdateAudiences Request Object
     * 
     * @uses Audience
     * @used-by BingAdsCampaignManagementService::UpdateAudiences
     */
    final class UpdateAudiencesRequest
    {
        /**
         * A list of audiences to update.
         * @var Audience[]
         */
        public $Audiences;
    }
}
