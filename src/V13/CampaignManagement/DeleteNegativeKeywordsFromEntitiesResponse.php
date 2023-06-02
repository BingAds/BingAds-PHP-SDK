<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes negative keywords from the specified campaign or ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletenegativekeywordsfromentities?view=bingads-13 DeleteNegativeKeywordsFromEntities Response Object
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
