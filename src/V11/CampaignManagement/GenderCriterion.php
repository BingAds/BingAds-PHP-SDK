<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a criterion that can be used to show ads to users of a specific gender.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/gendercriterion?view=bingads-11 GenderCriterion Data Object
     * 
     * @uses GenderType
     */
    final class GenderCriterion extends Criterion
    {
        /**
         * The gender of the people you want to see your ads.
         * @var GenderType
         */
        public $GenderType;
    }

}
