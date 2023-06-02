<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a hotel listing.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/hotellisting?view=bingads-13 HotelListing Data Object
     * 
     * @used-by HotelGroup
     */
    final class HotelListing
    {
        /**
         * The attribute for the hotel listing.
         * @var string
         */
        public $Attribute;

        /**
         * The operand for the hotel listing.
         * @var string
         */
        public $Operand;
    }

}
