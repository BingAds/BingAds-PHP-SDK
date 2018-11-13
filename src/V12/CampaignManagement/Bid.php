<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * The highest price that you want to pay each time someone clicks your ad.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/bid?view=bingads-12 Bid Data Object
     * 
     * @used-by AdGroup
     * @used-by Keyword
     * @used-by MaxClicksBiddingScheme
     * @used-by MaxConversionsBiddingScheme
     * @used-by TargetCpaBiddingScheme
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
