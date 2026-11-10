<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the audience breakdown.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getaudiencebreakdown?view=bingads-13 GetAudienceBreakdown Request Object
     * 
     * @uses SelectionOfAgeEnum
     * @uses SelectionOfGenderEnum
     * @uses SelectionOflong
     * @uses SelectionOfDeviceEnum
     * @uses RadiusTarget
     * @uses Feed
     * @uses BreakdownCategory
     * @used-by BingAdsAdInsightService::GetAudienceBreakdown
     */
    final class GetAudienceBreakdownRequest
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
         * The locale identifier.
         * @var integer
         */
        public $Lcid;

        /**
         * The category of audience breakdown.
         * @var BreakdownCategory
         */
        public $BreakdownReturnCategory;

        /**
         * The audience breakdown ad type.
         * @var integer
         */
        public $MultiAdTypes;

        /**
         * The job seniority level of LinkedIn profile targeting.
         * @var SelectionOflong
         */
        public $JobSeniority;

        /**
         * The selection of genre targeting.
         * @var SelectionOflong
         */
        public $Genre;

        /**
         * The selection of channel targeting.
         * @var SelectionOflong
         */
        public $Channel;

        /**
         * The selection of channel placement targeting.
         * @var SelectionOflong
         */
        public $ChannelPlacement;

        /**
         * The selection of subchannel targeting.
         * @var SelectionOflong
         */
        public $SubChannel;
    }
}
