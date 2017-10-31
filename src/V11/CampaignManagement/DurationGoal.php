<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a duration conversion goal.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/durationgoal?view=bingads-11 DurationGoal Data Object
     */
    final class DurationGoal extends ConversionGoal
    {
        /**
         * The minimum amount of time in seconds that the user must spend on your website to track as a conversion.
         * @var integer
         */
        public $MinimumDurationInSeconds;
    }

}
