<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Reserved.
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
         * Reserved.
         * @var SelectionOfAgeEnum
         */
        public $Age;

        /**
         * Reserved.
         * @var SelectionOfGenderEnum
         */
        public $Gender;

        /**
         * Reserved.
         * @var SelectionOflong
         */
        public $Audience;

        /**
         * Reserved.
         * @var SelectionOflong
         */
        public $Company;

        /**
         * Reserved.
         * @var SelectionOflong
         */
        public $Industry;

        /**
         * Reserved.
         * @var SelectionOflong
         */
        public $JobFunction;

        /**
         * Reserved.
         * @var SelectionOflong
         */
        public $Location;

        /**
         * Reserved.
         * @var RadiusTarget[]
         */
        public $RadiusTargets;

        /**
         * Reserved.
         * @var integer
         */
        public $CampaignBiddingStrategy;

        /**
         * Reserved.
         * @var integer
         */
        public $CampaignSubType;

        /**
         * Reserved.
         * @var Feed
         */
        public $Feed;

        /**
         * Reserved.
         * @var float
         */
        public $DailyBudget;

        /**
         * Reserved.
         * @var float
         */
        public $Bid;

        /**
         * Reserved.
         * @var Currency
         */
        public $Currency;
    }
}
