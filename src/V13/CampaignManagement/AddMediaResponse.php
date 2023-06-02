<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds the specified media to an account's asset library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addmedia?view=bingads-13 AddMedia Response Object
     * 
     * @used-by BingAdsCampaignManagementService::AddMedia
     */
    final class AddMediaResponse
    {
        /**
         * The identifiers of the media that you added to the library.
         * @var integer[]
         */
        public $MediaIds;
    }
}
