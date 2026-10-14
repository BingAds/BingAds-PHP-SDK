<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatemedia?view=bingads-13 UpdateMedia Request Object
     *
     * @uses Media
     * @used-by BingAdsCampaignManagementService::UpdateMedia
     */
    final class UpdateMediaRequest
    {
        /**
         * Reserved.
         * @var integer
         */
        public $AccountId;

        /**
         * Reserved.
         * @var Media[]
         */
        public $Media;
    }
}
