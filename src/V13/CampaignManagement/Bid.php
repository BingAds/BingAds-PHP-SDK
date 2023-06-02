<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The highest price that you want to pay each time someone clicks your ad.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/bid?view=bingads-13 Bid Data Object
     * 
     * @used-by AdGroup
     * @used-by Keyword
     * @used-by MaxClicksBiddingScheme
     * @used-by MaxConversionsBiddingScheme
     * @used-by MaxRoasBiddingScheme
     * @used-by TargetCpaBiddingScheme
     * @used-by TargetImpressionShareBiddingScheme
     * @used-by TargetRoasBiddingScheme
     */
    final class Bid
    {
        /**
         * The bid value.
         * @var double
         */
        public $Amount;
    }

}
