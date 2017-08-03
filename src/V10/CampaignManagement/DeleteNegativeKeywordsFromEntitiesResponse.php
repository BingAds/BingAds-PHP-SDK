<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Deletes negative keywords from the specified campaign or ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn743725(v=msads.100).aspx DeleteNegativeKeywordsFromEntities Response Object
     * 
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::DeleteNegativeKeywordsFromEntities
     */
    final class DeleteNegativeKeywordsFromEntitiesResponse
    {
        /**
         * An array of BatchErrorCollection objects that contain details for any criterion that were not successfully deleted.
         * @var BatchErrorCollection[]
         */
        public $NestedPartialErrors;
    }
}
