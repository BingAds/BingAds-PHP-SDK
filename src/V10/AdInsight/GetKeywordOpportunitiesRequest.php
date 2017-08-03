<?php

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Gets a list of keyword suggestions that are relevant to the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/mt219321(v=msads.100).aspx GetKeywordOpportunities Request Object
     * 
     * @uses KeywordOpportunityType
     * @used-by BingAdsAdInsightService::GetKeywordOpportunities
     */
    final class GetKeywordOpportunitiesRequest
    {
        /**
         * The identifier of the ad group to get keyword suggestions for.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The identifier of the campaign that owns the specified ad group.
         * @var integer
         */
        public $CampaignId;

        /**
         * Determines the type or types of keyword opportunities that you want.
         * @var KeywordOpportunityType
         */
        public $OpportunityType;
    }
}
