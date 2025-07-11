<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the profile info data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/profileinfo?view=bingads-13 ProfileInfo Data Object
     * 
     * @uses ProfileType
     * @used-by ProfileDimension
     */
    final class ProfileInfo
    {
        /**
         * Reserved.
         * @var integer
         */
        public $Id;

        /**
         * Reserved.
         * @var ProfileType
         */
        public $Type;
    }

}
