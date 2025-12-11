<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/campaignbidlandscapepoint?view=bingads-13 CampaignBidLandscapePoint Data Object
     * 
     * @uses CurrencyCode
     * @used-by CampaignBidLandscape
     */
    final class CampaignBidLandscapePoint
    {
        /**
         * Reserved.
         * @var double
         */
        public $Bid;

        /**
         * Reserved.
         * @var double
         */
        public $TargetCpa;

        /**
         * Reserved.
         * @var double
         */
        public $TargetRoas;

        /**
         * Reserved.
         * @var double
         */
        public $Clicks;

        /**
         * Reserved.
         * @var integer
         */
        public $Impressions;

        /**
         * Reserved.
         * @var integer
         */
        public $TopImpressions;

        /**
         * Reserved.
         * @var CurrencyCode
         */
        public $CurrencyCode;

        /**
         * Reserved.
         * @var double
         */
        public $Cost;

        /**
         * Reserved.
         * @var double
         */
        public $Conversions;

        /**
         * Reserved.
         * @var double
         */
        public $ConversionValues;

        /**
         * Reserved.
         * @var double
         */
        public $MarginalCPC;
    }

}
