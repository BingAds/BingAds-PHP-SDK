<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the reach optimization goal setting data object.
     * @link https://learn.microsoft.com/en-us/advertising/campaign-management-service/reachoptimizationgoalsetting?view=bingads-13 ReachOptimizationGoalSetting Data Object
     * 
     * @uses ReachOptimizationGoal
     */
    final class ReachOptimizationGoalSetting extends Setting
    {
        /**
         * Reserved.
         * @var ReachOptimizationGoal
         */
        public $OptimizationGoal;
    }

}
