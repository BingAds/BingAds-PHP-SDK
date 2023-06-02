<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/audienceinfo?view=bingads-13 AudienceInfo Data Object
     * 
     * @uses AudienceType
     * @used-by AudienceDimension
     */
    final class AudienceInfo
    {
        /**
         * Reserved.
         * @var integer
         */
        public $Id;

        /**
         * Reserved.
         * @var AudienceType
         */
        public $Type;
    }

}
