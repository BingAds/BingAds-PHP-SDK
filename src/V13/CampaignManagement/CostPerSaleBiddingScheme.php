<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that represents the cost per sale bid strategy type.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/costpersalebiddingscheme?view=bingads-13 CostPerSaleBiddingScheme Data Object
     */
    final class CostPerSaleBiddingScheme extends BiddingScheme
    {
        /**
         * The target cost per sale that you want used by Microsoft Advertising to maximize conversions.
         * @var double
         */
        public $TargetCostPerSale;
    }

}
