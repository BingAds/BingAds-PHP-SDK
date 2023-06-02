<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a criterion that can be used to show ads to users in a specific age range.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/agecriterion?view=bingads-13 AgeCriterion Data Object
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
