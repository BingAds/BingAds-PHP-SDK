<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Criterion for length of hotel stay in nights.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/hotellengthofstaycriterion?view=bingads-13 HotelLengthOfStayCriterion Data Object
     */
    final class HotelLengthOfStayCriterion extends Criterion
    {
        /**
         * Maxmimum of nights prior to the hotel stay.
         * @var integer
         */
        public $MaxNights;

        /**
         * Minimum of days prior to the hotel stay.
         * @var integer
         */
        public $MinNights;
    }

}
