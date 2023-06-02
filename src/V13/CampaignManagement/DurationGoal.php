<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a duration conversion goal.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/durationgoal?view=bingads-13 DurationGoal Data Object
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
