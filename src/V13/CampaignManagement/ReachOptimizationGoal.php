<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the reach optimization goal value set.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/reachoptimizationgoal?view=bingads-13 ReachOptimizationGoal Value Set
     * 
     * @used-by ReachOptimizationGoalSetting
     */
    final class ReachOptimizationGoal
    {
        /** The reach optimization goal is not specified. */
        const Unspecified = 'Unspecified';

        /** Optimize the campaign to maximize impressions. */
        const MaxImpressions = 'MaxImpressions';

        /** Optimize the campaign to maximize unique reach. */
        const MaxUniqueReach = 'MaxUniqueReach';
    }

}
