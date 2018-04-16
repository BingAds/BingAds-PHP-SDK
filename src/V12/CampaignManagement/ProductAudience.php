<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/productaudience?view=bingads-12 ProductAudience Data Object
     * 
     * @uses ProductAudienceType
     */
    final class ProductAudience extends Audience
    {
        /**
         * Reserved.
         * @var ProductAudienceType
         */
        public $ProductAudienceType;

        /**
         * Reserved.
         * @var integer
         */
        public $TagId;
    }

}
