<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the keyword bid opportunities of the specified ad group.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getbidopportunities?view=bingads-13 GetBidOpportunities Request Object
     * 
     * @uses BidOpportunityType
     * @used-by BingAdsAdInsightService::GetBidOpportunities
     */
    final class GetBidOpportunitiesRequest
    {
        /**
         * The identifier of the ad group for which you want to determine keyword bid opportunities.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The identifier of the campaign that owns the ad group specified in the AdGroupId element.
         * @var integer
         */
        public $CampaignId;

        /**
         * Determines the type or types of bid opportunities corresponding to your ad position goals.
         * @var BidOpportunityType
         */
        public $OpportunityType;
    }
}
