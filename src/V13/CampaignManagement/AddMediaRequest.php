<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds the specified media to an account's media library.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/addmedia?view=bingads-13 AddMedia Request Object
     * 
     * @uses Media
     * @used-by BingAdsCampaignManagementService::AddMedia
     */
    final class AddMediaRequest
    {
        /**
         * The identifier of the account that owns the media library.
         * @var integer
         */
        public $AccountId;

        /**
         * An array of Media to add to the account's media library.
         * @var Media[]
         */
        public $Media;
    }
}
