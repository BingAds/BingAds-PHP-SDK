<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets labels by label identifiers.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getlabelsbyids?view=bingads-13 GetLabelsByIds Response Object
     * 
     * @uses Label
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetLabelsByIds
     */
    final class GetLabelsByIdsResponse
    {
        /**
         * An array of Label objects that corresponds directly to the label identifiers that you specified in the request.
         * @var Label[]
         */
        public $Labels;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
