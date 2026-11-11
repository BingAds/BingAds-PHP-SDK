<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the reach optimization goal setting data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/reachoptimizationgoalsetting?view=bingads-13 ReachOptimizationGoalSetting Data Object
     * 
     * @uses ReachOptimizationGoal
     */
    final class ReachOptimizationGoalSetting extends Setting
    {
        /**
         * The reach goal that the campaign should optimize for.
         * @var ReachOptimizationGoal
         */
        public $OptimizationGoal;
    }

}
