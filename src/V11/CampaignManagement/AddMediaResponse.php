<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds the specified media to an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn277518(v=msads.110).aspx AddMedia Response Object
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
