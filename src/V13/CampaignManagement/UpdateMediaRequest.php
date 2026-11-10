<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates advertiser-settable properties of existing image media in an account's asset library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatemedia?view=bingads-13 UpdateMedia Request Object
     * 
     * @uses Media
     * @used-by BingAdsCampaignManagementService::UpdateMedia
     */
    final class UpdateMediaRequest
    {
        /**
         * The identifier of the account that owns the asset library.
         * @var integer
         */
        public $AccountId;

        /**
         * An array of existing image media to update.
         * @var Media[]
         */
        public $Media;
    }
}
