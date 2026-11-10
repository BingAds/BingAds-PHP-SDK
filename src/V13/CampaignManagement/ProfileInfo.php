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
         * The Microsoft Advertising identifier of the LinkedIn profile segment.
         * @var integer
         */
        public $Id;

        /**
         * The LinkedIn profile type.
         * @var ProfileType
         */
        public $Type;
    }

}
