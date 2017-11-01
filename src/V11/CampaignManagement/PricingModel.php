<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the pricing model for an ad group.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/pricingmodel?view=bingads-11 PricingModel Value Set
     * 
     * @used-by AdGroup
     */
    final class PricingModel
    {
        /** The pricing model is cost-per-click (CPC). */
        const Cpc = 'Cpc';

        /** The pricing model is cost per thousand-impressions (CPM). */
        const Cpm = 'Cpm';
    }

}
