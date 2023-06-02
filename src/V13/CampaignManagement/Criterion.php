<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the base object of a criterion.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/criterion?view=bingads-13 Criterion Data Object
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
