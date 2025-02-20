<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a criterion that can be used to show ads for a specific deal.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/dealcriterion?view=bingads-13 DealCriterion Data Object
     */
    final class DealCriterion extends Criterion
    {
        /**
         * The Microsoft Advertising identifier of the Deal.
         * @var integer
         */
        public $DealId;
    }

}
