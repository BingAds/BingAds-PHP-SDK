<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Criterion for a check-in date range.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/hotelcheckindatecriterion?view=bingads-13 HotelCheckInDateCriterion Data Object
     */
    final class HotelCheckInDateCriterion extends Criterion
    {
        /**
         * End date in the YYYY-MM-DD format.
         * @var \DateTime
         */
        public $EndDate;

        /**
         * Start date in the YYYY-MM-DD format.
         * @var \DateTime
         */
        public $StartDate;
    }

}
