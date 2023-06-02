<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines properties for revenue that can be tracked by a conversion goal.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/conversiongoalrevenue?view=bingads-13 ConversionGoalRevenue Data Object
     * 
     * @uses ConversionGoalRevenueType
     * @used-by ConversionGoal
     */
    final class ConversionGoalRevenue
    {
        /**
         * The currency type that you want the conversion goal revenue to be reported.
         * @var string
         */
        public $CurrencyCode;

        /**
         * Determines how revenue is tracked.
         * @var ConversionGoalRevenueType
         */
        public $Type;

        /**
         * The revenue value or amount.
         * @var float
         */
        public $Value;
    }

}
