<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines the possible keyword match type values.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/matchtype?view=bingads-11 MatchType Value Set
     * 
     * @used-by EstimatedBidAndTraffic
     * @used-by EstimatedPositionAndTraffic
     * @used-by Keyword
     * @used-by KeywordAndMatchType
     * @used-by KeywordKPI
     * @used-by NegativeKeyword
     * @used-by GetEstimatedPositionByKeywordsRequest
     * @used-by GetHistoricalKeywordPerformanceRequest
     */
    final class MatchType
    {
        /** An exact match results when all of the words in the keyword exactly match the user's search query. */
        const Exact = 'Exact';

        /** A phrase match results when all of the words in the keyword are present in the user's search query and are in the same order. */
        const Phrase = 'Phrase';

        /** A broad match results when words in the keyword are present in the user's search query; however, the word order can vary. */
        const Broad = 'Broad';

        /** A content match results when the keywords extracted from the content webpage match the keywords in the user's search query by using an exact match comparison. */
        const Content = 'Content';

        /** Aggregates the data across all match types. */
        const Aggregate = 'Aggregate';
    }

}
