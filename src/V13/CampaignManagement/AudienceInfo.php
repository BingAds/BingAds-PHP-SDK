<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * An object containing and ID an type for an audience.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/audienceinfo?view=bingads-13 AudienceInfo Data Object
     * 
     * @uses AudienceType
     * @used-by AudienceDimension
     */
    final class AudienceInfo
    {
        /**
         * The ID of the audience.
         * @var integer
         */
        public $Id;

        /**
         * The type of the audience.
         * @var AudienceType
         */
        public $Type;
    }

}
