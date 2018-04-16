<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/productaudience?view=bingads-11 ProductAudience Data Object
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
