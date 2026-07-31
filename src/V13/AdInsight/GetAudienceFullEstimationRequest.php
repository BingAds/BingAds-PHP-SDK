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
     * @uses SelectionOfDeviceEnum
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
         * The selection of placement targeting.
         * @var SelectionOflong
         */
        public $Placement;

        /**
         * The type of device.
         * @var SelectionOfDeviceEnum
         */
        public $Device;

        /**
         * The selection of topic targeting.
         * @var SelectionOflong
         */
        public $Topic;

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
         * The audience full estimation ad type.
         * @var integer
         */
        public $MultiAdTypes;

        /**
         * The start date of the date range that identifies the data that you want to use to determine the audience full estimation.
         * @var \DateTime
         */
        public $StartDate;

        /**
         * The end date of the date range that identifies the data that you want to use to determine the audience full estimation.
         * @var \DateTime
         */
        public $EndDate;

        /**
         * The total budget.
         * @var float
         */
        public $TotalBudget;

        /**
         * Include impressions in the audience breakdown.
         * @var boolean
         */
        public $IncludeImpressionsBreakdown;

        /**
         * Use predictive targeting if the value is true.
         * @var boolean
         */
        public $AutoTargeting;

        /**
         * Reserved.
         * @var SelectionOflong
         */
        public $JobSeniority;

        /**
         * Reserved.
         * @var SelectionOflong
         */
        public $Genre;

        /**
         * Reserved.
         * @var SelectionOflong
         */
        public $Channel;

        /**
         * Reserved.
         * @var SelectionOflong
         */
        public $ChannelPlacement;

        /**
         * Reserved.
         * @var SelectionOflong
         */
        public $SubChannel;
    }
}
