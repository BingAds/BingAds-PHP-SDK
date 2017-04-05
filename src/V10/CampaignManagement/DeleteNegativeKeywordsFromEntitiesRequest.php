<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Deletes negative keywords from the specified campaign or ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn743725(v=msads.100).aspx DeleteNegativeKeywordsFromEntities Request Object
     * 
     * @uses EntityNegativeKeyword
     * @used-by BingAdsCampaignManagementService::DeleteNegativeKeywordsFromEntities
     */
    final class DeleteNegativeKeywordsFromEntitiesRequest
    {
        /**
         * An array of negative keyword with associated entity such as a campaign or ad group.
         * @var EntityNegativeKeyword[]
         */
        public $EntityNegativeKeywords;
    }
}
