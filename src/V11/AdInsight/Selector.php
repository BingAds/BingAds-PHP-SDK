<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/selector?view=bingads-11 Selector Data Object
     * 
     * @uses DateRange
     * @uses Field
     * @uses OrderBy
     * @uses Paging
     * @uses Predicate
     * @used-by GetAuctionInsightDataRequest
     */
    final class Selector
    {
        /**
         * Reserved.
         * @var DateRange
         */
        public $DateRange;

        /**
         * Reserved.
         * @var Field[]
         */
        public $GroupBy;

        /**
         * Reserved.
         * @var OrderBy[]
         */
        public $Ordering;

        /**
         * Reserved.
         * @var Paging
         */
        public $PageInfo;

        /**
         * Reserved.
         * @var Predicate[]
         */
        public $Predicates;

        /**
         * Reserved.
         * @var Field[]
         */
        public $SelectedFields;
    }

}
