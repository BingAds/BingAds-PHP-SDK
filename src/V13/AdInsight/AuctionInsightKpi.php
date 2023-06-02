<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an auction insight key performance indicator.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/auctioninsightkpi?view=bingads-13 AuctionInsightKpi Data Object
     * 
     * @used-by AuctionInsightEntry
     */
    final class AuctionInsightKpi
    {
        /**
         * The list of strings identifies a distinct combination of requested segments.
         * @var string[]
         */
        public $Segments;

        /**
         * The number of times an ad is shown on the Microsoft Advertising Network divided by the total available impressions.
         * @var double
         */
        public $ImpressionShare;

        /**
         * The percentage of time competitors' ads showed up on the search results page when your ad was shown.
         * @var double
         */
        public $OverlapRate;

        /**
         * The average position on the web page for ads that were delivered.
         * @var double
         */
        public $AveragePosition;

        /**
         * The percentage of time competitors' ads showed up higher than your ads on the search results page.
         * @var double
         */
        public $AboveRate;

        /**
         * The percentage of time your ad showed up in the mainline, the premium ad position above the organic search results.
         * @var double
         */
        public $TopOfPageRate;

        /**
         * The percentage of time your ad showed up higher on the search results pages than your competitors or your ad showed when theirs did not.
         * @var double
         */
        public $OutrankingShare;

        /**
         * The number of times an ad is shown as the very first ad above the organic search results, divided by the total number of impressions it actually received.
         * @var double
         */
        public $AbsoluteTopOfPageRate;
    }

}
