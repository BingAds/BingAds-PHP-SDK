<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the number of times the normalized term was used in a search during the specified time period.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/gethistoricalsearchcount?view=bingads-13 GetHistoricalSearchCount Response Object
     * 
     * @uses KeywordSearchCount
     * @used-by BingAdsAdInsightService::GetHistoricalSearchCount
     */
    final class GetHistoricalSearchCountResponse
    {
        /**
         * An array of KeywordSearchCount data objects.
         * @var KeywordSearchCount[]
         */
        public $KeywordSearchCounts;
    }
}
