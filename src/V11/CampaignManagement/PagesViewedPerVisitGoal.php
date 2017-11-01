<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a pages viewed per visit conversion goal.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/pagesviewedpervisitgoal?view=bingads-11 PagesViewedPerVisitGoal Data Object
     */
    final class PagesViewedPerVisitGoal extends ConversionGoal
    {
        /**
         * The minimum number of pages the user must visit, in order to count as a conversion.
         * @var integer
         */
        public $MinimumPagesViewed;
    }

}
