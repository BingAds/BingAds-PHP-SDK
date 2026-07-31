<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieve HTML5 assets by their IDs.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/gethtml5sbyids?view=bingads-13 GetHTML5sByIds Response Object
     * 
     * @uses HTML5
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetHTML5sByIds
     */
    final class GetHTML5sByIdsResponse
    {
        /**
         * An array of the HTML5 assets.
         * @var HTML5[]
         */
        public $HTML5Assets;

        /**
         * An array BatchError that contains details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
