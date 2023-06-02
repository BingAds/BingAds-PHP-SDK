<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds the specified media to an account's asset library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addmedia?view=bingads-13 AddMedia Request Object
     * 
     * @uses Media
     * @used-by BingAdsCampaignManagementService::AddMedia
     */
    final class AddMediaRequest
    {
        /**
         * The identifier of the account that owns the asset library.
         * @var integer
         */
        public $AccountId;

        /**
         * An array of Media to add to the account's asset library.
         * @var Media[]
         */
        public $Media;
    }
}
