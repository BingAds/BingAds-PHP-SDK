<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Represents a date.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/date?view=bingads-13 Date Data Object
     * 
     * @used-by AdGroup
     * @used-by Experiment
     * @used-by PromotionAdExtension
     * @used-by Schedule
     */
    final class Date
    {
        /**
         * Specifies the day of the month.
         * @var integer
         */
        public $Day;

        /**
         * Specifies the month.
         * @var integer
         */
        public $Month;

        /**
         * Specifies the year.
         * @var integer
         */
        public $Year;
    }

}
