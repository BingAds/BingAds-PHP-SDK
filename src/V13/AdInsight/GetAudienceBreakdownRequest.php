<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getaudiencebreakdown?view=bingads-13 GetAudienceBreakdown Request Object
     * 
     * @uses SelectionOfAgeEnum
     * @uses SelectionOfGenderEnum
     * @uses SelectionOflong
     * @uses RadiusTarget
     * @uses Feed
     * @uses BreakdownCategory
     * @used-by BingAdsAdInsightService::GetAudienceBreakdown
     */
    final class GetAudienceBreakdownRequest
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
         * @var integer
         */
        public $Lcid;

        /**
         * Reserved.
         * @var BreakdownCategory
         */
        public $BreakdownReturnCategory;

        /**
         * Reserved.
         * @var integer
         */
        public $MultiAdTypes;
    }
}
