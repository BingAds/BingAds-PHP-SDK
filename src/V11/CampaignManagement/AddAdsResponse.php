<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds one or more ads to an ad group.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/addads?version=11 AddAds Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddAds
     */
    final class AddAdsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the ads that were added.
         * @var integer[]
         */
        public $AdIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
