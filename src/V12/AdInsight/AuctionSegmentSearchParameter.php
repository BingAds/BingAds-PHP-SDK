<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * Defines an auction segment search parameter.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/auctionsegmentsearchparameter?view=bingads-12 AuctionSegmentSearchParameter Data Object
     * 
     * @uses AuctionSegment
     */
    final class AuctionSegmentSearchParameter extends SearchParameter
    {
        /**
         * Reserved.
         * @var AuctionSegment
         */
        public $Segment;
    }

}
