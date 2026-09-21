<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the reach optimization goal value set.
     * @link https://learn.microsoft.com/en-us/advertising/campaign-management-service/reachoptimizationgoal?view=bingads-13 ReachOptimizationGoal Value Set
     * 
     * @used-by ReachOptimizationGoalSetting
     */
    final class ReachOptimizationGoal
    {
        /** Reserved. */
        const Unspecified = 'Unspecified';

        /** Reserved. */
        const MaxImpressions = 'MaxImpressions';

        /** Reserved. */
        const MaxUniqueReach = 'MaxUniqueReach';
    }

}
