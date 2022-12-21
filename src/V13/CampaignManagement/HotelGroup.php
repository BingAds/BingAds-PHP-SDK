<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that organizes your hotel ads.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/hotelgroup?view=bingads-13 HotelGroup Data Object
     * 
     * @uses HotelListing
     * @uses HotelListingType
     */
    final class HotelGroup extends Criterion
    {
        /**
         * Defines a hotel listing.
         * @var HotelListing
         */
        public $Listing;

        /**
         * Defines the type of hotel listing.
         * @var HotelListingType
         */
        public $ListingType;

        /**
         * The ID of the parent criterion.
         * @var integer
         */
        public $ParentCriterionId;
    }

}
