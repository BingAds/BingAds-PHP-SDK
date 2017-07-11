<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Retrieves the specified audiences from the specified account.
     * @link http://msdn.microsoft.com/en-us/library/mt807654(v=msads.110).aspx GetAudiencesByIds Request Object
     * 
     * @uses AudienceType
     * @used-by BingAdsCampaignManagementService::GetAudiencesByIds
     */
    final class GetAudiencesByIdsRequest
    {
        public $AudienceIds;
        public $Type;
    }
}
