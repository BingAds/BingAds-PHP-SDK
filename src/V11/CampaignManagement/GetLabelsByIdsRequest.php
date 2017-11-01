<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets labels by label identifiers.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getlabelsbyids?view=bingads-11 GetLabelsByIds Request Object
     * 
     * @uses Paging
     * @used-by BingAdsCampaignManagementService::GetLabelsByIds
     */
    final class GetLabelsByIdsRequest
    {
        /**
         * The identifiers of the labels to get.
         * @var integer[]
         */
        public $LabelIds;

        /**
         * Determines the index and size of label results per page.
         * @var Paging
         */
        public $PageInfo;
    }
}
