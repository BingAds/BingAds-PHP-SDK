<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Criterion for day of the week the booking is for.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/hotelcheckindaycriterion?view=bingads-13 HotelCheckInDayCriterion Data Object
     * 
     * @uses Day
     */
    final class HotelCheckInDayCriterion extends Criterion
    {
        /**
         * The day of the week for check in.
         * @var Day
         */
        public $CheckInDay;
    }

}
