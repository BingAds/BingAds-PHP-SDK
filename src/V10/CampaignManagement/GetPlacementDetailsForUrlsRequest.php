<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Retrieves placement information for the specified URLs.
     * @link http://msdn.microsoft.com/en-us/library/dn277530(v=msads.100).aspx GetPlacementDetailsForUrls Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetPlacementDetailsForUrls
     */
    final class GetPlacementDetailsForUrlsRequest
    {
        /**
         * An array of URLs from the publisher websites where you want to display your text ads.
         * @var string[]
         */
        public $Urls;
    }
}
