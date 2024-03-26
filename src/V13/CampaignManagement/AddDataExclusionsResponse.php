<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adddataexclusions?view=bingads-13 AddDataExclusions Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddDataExclusions
     */
    final class AddDataExclusionsResponse
    {
        /**
         * Reserved.
         * @var integer[]
         */
        public $DataExclusionIds;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
