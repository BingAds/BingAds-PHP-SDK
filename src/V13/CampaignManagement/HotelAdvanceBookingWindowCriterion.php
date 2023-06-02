<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Criterion for the number of days the booking is made prior to the hotel stay.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/hoteladvancebookingwindowcriterion?view=bingads-13 HotelAdvanceBookingWindowCriterion Data Object
     */
    final class HotelAdvanceBookingWindowCriterion extends Criterion
    {
        /**
         * Maxmimum of days prior to the hotel stay.
         * @var integer
         */
        public $MaxDays;

        /**
         * Minimum number of days prior to the hotel stay.
         * @var integer
         */
        public $MinDays;
    }

}
