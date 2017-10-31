<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes negative keywords from the specified campaign or ad group.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/deletenegativekeywordsfromentities?view=bingads-11 DeleteNegativeKeywordsFromEntities Response Object
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
