<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds one or more campaign criterions that help determine whether ads in each campaign get served.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addcampaigncriterions?view=bingads-13 AddCampaignCriterions Response Object
     * 
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::AddCampaignCriterions
     */
    final class AddCampaignCriterionsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the criterion that were added.
         * @var integer[]
         */
        public $CampaignCriterionIds;

        /**
         * An array of BatchErrorCollection objects that contain details for any criterion that were not successfully added.
         * @var BatchErrorCollection[]
         */
        public $NestedPartialErrors;
    }
}
