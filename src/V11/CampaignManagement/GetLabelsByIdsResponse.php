<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets labels by label identifiers.
     * @link http://msdn.microsoft.com/en-us/library/mt803291(v=msads.110).aspx GetLabelsByIds Response Object
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
