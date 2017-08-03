<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the pricing model for an ad group.
     * @link http://msdn.microsoft.com/en-us/library/cc580680(v=msads.110).aspx PricingModel Value Set
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
