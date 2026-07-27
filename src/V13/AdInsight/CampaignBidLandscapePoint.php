<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines a data object for the total estimated performance from StartDate to EndDate by the bid or target.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/campaignbidlandscapepoint?view=bingads-13 CampaignBidLandscapePoint Data Object
     * 
     * @uses CurrencyCode
     * @used-by CampaignBidLandscape
     */
    final class CampaignBidLandscapePoint
    {
        /**
         * The suggested bid value.
         * @var double
         */
        public $Bid;

        /**
         * The CampaignBidLandscapeType is TargetCpa.
         * @var double
         */
        public $TargetCpa;

        /**
         * The CampaignBidLandscapeType is TargetRoas.
         * @var double
         */
        public $TargetRoas;

        /**
         * The estimated number of clicks.
         * @var double
         */
        public $Clicks;

        /**
         * The estimated number of impressions.
         * @var integer
         */
        public $Impressions;

        /**
         * The estimated number of impressions in the top or mainline ad results.
         * @var integer
         */
        public $TopImpressions;

        /**
         * The ISO code for the monetary unit of the suggested bid value and estimated performance statistics.
         * @var CurrencyCode
         */
        public $CurrencyCode;

        /**
         * The estimated cost.
         * @var double
         */
        public $Cost;

        /**
         * The estimated number of conversions.
         * @var double
         */
        public $Conversions;

        /**
         * The estimated conversion values.
         * @var double
         */
        public $ConversionValues;

        /**
         * The CampaignBidLandscapeType is MarginalCpc.
         * @var double
         */
        public $MarginalCPC;
    }

}
