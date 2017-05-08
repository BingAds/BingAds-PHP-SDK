<?php
// Generated on 5/7/2017 5:48:20 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds one or more audiences.
     * @link http://msdn.microsoft.com/en-us/library/mt807651(v=msads.110).aspx AddAudiences Request Object
     * 
     * @uses Audience
     * @used-by BingAdsCampaignManagementService::AddAudiences
     */
    final class AddAudiencesRequest
    {
        /**
         * The list of audiences to add.
         * @var Audience[]
         */
        public $Audiences;
    }
}
