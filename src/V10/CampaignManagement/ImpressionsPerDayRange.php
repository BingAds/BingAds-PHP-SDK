<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the minimum and maximum impressions per day for a website.
     * @link http://msdn.microsoft.com/en-us/library/dd796854(v=msads.100).aspx ImpressionsPerDayRange Data Object
     * 
     * @used-by PlacementDetail
     */
    final class ImpressionsPerDayRange
    {
        /**
         * The maximum number of impressions per day for the website.
         * @var integer
         */
        public $Maximum;

        /**
         * The minimum number of impressions per day for the website.
         * @var integer
         */
        public $Minimum;
    }

}
