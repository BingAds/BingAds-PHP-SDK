<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds one or more ad group criterions.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addadgroupcriterions?view=bingads-13 AddAdGroupCriterions Response Object
     * 
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::AddAdGroupCriterions
     */
    final class AddAdGroupCriterionsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the criterion that were added.
         * @var integer[]
         */
        public $AdGroupCriterionIds;

        /**
         * An array of BatchErrorCollection objects that contain details for any criterion that were not successfully added.
         * @var BatchErrorCollection[]
         */
        public $NestedPartialErrors;
    }
}
