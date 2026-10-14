<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatemedia?view=bingads-13 UpdateMedia Response Object
     *
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateMedia
     */
    final class UpdateMediaResponse
    {
        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
