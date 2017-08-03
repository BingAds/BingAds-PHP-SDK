<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a bid.
     * @link http://msdn.microsoft.com/en-us/library/dd797130(v=msads.110).aspx Bid Data Object
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
