<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines a criterion that can be used to show ads to users in a specific age range.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/agecriterion?view=bingads-12 AgeCriterion Data Object
     * 
     * @uses AgeRange
     */
    final class AgeCriterion extends Criterion
    {
        /**
         * The age range of the people you want to see your ads.
         * @var AgeRange
         */
        public $AgeRange;
    }

}
