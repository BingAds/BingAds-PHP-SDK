<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/gethtml5sbyids?view=bingads-13 GetHTML5sByIds Response Object
     * 
     * @uses HTML5
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetHTML5sByIds
     */
    final class GetHTML5sByIdsResponse
    {
        /**
         * Reserved.
         * @var HTML5[]
         */
        public $HTML5Assets;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
