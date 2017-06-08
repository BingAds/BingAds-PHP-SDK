<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a specific country or region target with bid adjustment.
     * @link http://msdn.microsoft.com/en-us/library/bb671882(v=msads.100).aspx CountryTargetBid Data Object
     * 
     * @used-by CountryTarget
     */
    final class CountryTargetBid
    {
        /**
         * The percent amount by which to adjust the base bid if the user is in the targeted country/region.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * The country to target.
         * @var string
         */
        public $CountryAndRegion;

        /**
         * Set this element to true if you want to exclude the location from targeting.
         * @var boolean
         */
        public $IsExcluded;
    }

}
