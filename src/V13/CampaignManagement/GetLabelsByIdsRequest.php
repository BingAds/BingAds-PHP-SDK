<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets labels by label identifiers.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getlabelsbyids?view=bingads-13 GetLabelsByIds Request Object
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
