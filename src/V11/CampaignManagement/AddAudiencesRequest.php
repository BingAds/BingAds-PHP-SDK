<?php
// Generated on 7/10/2017 3:08:23 PM

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
