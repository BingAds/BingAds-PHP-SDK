<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the audience full estimation.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getaudiencefullestimation?view=bingads-13 GetAudienceFullEstimation Request Object
     * 
     * @uses SelectionOfAgeEnum
     * @uses SelectionOfGenderEnum
     * @uses SelectionOflong
     * @uses RadiusTarget
     * @uses Feed
     * @uses Currency
     * @used-by BingAdsAdInsightService::GetAudienceFullEstimation
     */
    final class GetAudienceFullEstimationRequest
    {
        /**
         * The selection of age targeting.
         * @var SelectionOfAgeEnum
         */
        public $Age;

        /**
         * The gender to target.
         * @var SelectionOfGenderEnum
         */
        public $Gender;

        /**
         * The selection of audience targeting.
         * @var SelectionOflong
         */
        public $Audience;

        /**
         * The company of LinkedIn profile targeting.
         * @var SelectionOflong
         */
        public $Company;

        /**
         * The industry of LinkedIn profile targeting.
         * @var SelectionOflong
         */
        public $Industry;

        /**
         * The job function The industry of LinkedIn profile targeting.
         * @var SelectionOflong
         */
        public $JobFunction;

        /**
         * The selection of location targeting.
         * @var SelectionOflong
         */
        public $Location;

        /**
         * Represents the desired geographical area in terms of miles/kilometers.
         * @var RadiusTarget[]
         */
        public $RadiusTargets;

        /**
         * Indicates the desired bidding strategy for estimation response.
         * @var integer
         */
        public $CampaignBiddingStrategy;

        /**
         * Indicate the desired ad type for estimation response.
         * @var integer
         */
        public $CampaignSubType;

        /**
         * Respect this parameter only when CampaignSubType is FeedBasedAds or DynamicFeedBasedAds.
         * @var Feed
         */
        public $Feed;

        /**
         * The daily campaign budget value.
         * @var float
         */
        public $DailyBudget;

        /**
         * The desired bid setting value.
         * @var float
         */
        public $Bid;

        /**
         * The currency of DailyBudget and Bid.
         * @var Currency
         */
        public $Currency;

        /**
         * Reserved.
         * @var integer
         */
        public $MultiAdTypes;

        /**
         * Reserved.
         * @var \DateTime
         */
        public $StartDate;

        /**
         * Reserved.
         * @var \DateTime
         */
        public $EndDate;

        /**
         * Reserved.
         * @var float
         */
        public $TotalBudget;

        /**
         * Reserved.
         * @var boolean
         */
        public $IncludeImpressionsBreakdown;
    }
}
