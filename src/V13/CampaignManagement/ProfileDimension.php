<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the profile dimension data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/profiledimension?view=bingads-13 ProfileDimension Data Object
     * 
     * @uses ProfileInfo
     */
    final class ProfileDimension extends AudienceGroupDimension
    {
        /**
         * Reserved.
         * @var ProfileInfo[]
         */
        public $Profiles;
    }

}
