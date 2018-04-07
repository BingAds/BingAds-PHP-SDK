<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the base object of a criterion.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/criterion?view=bingads-12 Criterion Data Object
     * 
     * @used-by AdGroupCriterion
     * @used-by CampaignCriterion
     */
    class Criterion
    {
        /**
         * The type of criterion.
         * @var string
         */
        public $Type;
    }

}
