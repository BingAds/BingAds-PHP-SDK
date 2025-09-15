<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addhtml5s?view=bingads-13 AddHTML5s Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddHTML5s
     */
    final class AddHTML5sResponse
    {
        /**
         * Reserved.
         * @var integer[]
         */
        public $HTML5AssetIds;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
