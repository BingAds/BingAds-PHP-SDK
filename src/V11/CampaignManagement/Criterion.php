<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the base object of a criterion.
     * @link http://msdn.microsoft.com/en-us/library/jj738613(v=msads.110).aspx Criterion Data Object
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
