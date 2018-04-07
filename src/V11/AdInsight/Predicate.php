<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/predicate?view=bingads-11 Predicate Data Object
     * 
     * @uses Field
     * @uses Operator
     * @used-by Selector
     */
    final class Predicate
    {
        /**
         * Reserved.
         * @var Field
         */
        public $FilteringField;

        /**
         * Reserved.
         * @var Operator
         */
        public $Operator;

        /**
         * Reserved.
         * @var string[]
         */
        public $Values;
    }

}
