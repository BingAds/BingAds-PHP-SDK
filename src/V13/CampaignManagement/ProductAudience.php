<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a product audience that you can use to remarket products from your Microsoft Merchant Center store.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/productaudience?view=bingads-13 ProductAudience Data Object
     * 
     * @uses ProductAudienceType
     */
    final class ProductAudience extends Audience
    {
        /**
         * Determines whether to remarket your products to general visitors, product searchers, product viewers, shopping cart abandoners, or past buyers.
         * @var ProductAudienceType
         */
        public $ProductAudienceType;

        /**
         * The Microsoft Advertising identifier of the Universal Event Tracking (UET) tag that is used with the remarketing list.
         * @var integer
         */
        public $TagId;
    }

}
