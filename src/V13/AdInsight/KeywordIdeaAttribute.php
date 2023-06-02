<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Determines which properties of the KeywordIdea object you want returned when calling the GetKeywordIdeas operation.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/keywordideaattribute?view=bingads-13 KeywordIdeaAttribute Value Set
     * 
     * @used-by GetKeywordIdeasRequest
     */
    final class KeywordIdeaAttribute
    {
        /** Include the ad group identifier. */
        const AdGroupId = 'AdGroupId';

        /** Include the ad group name. */
        const AdGroupName = 'AdGroupName';

        /** Include the keyword. */
        const Keyword = 'Keyword';

        /** Include the source. */
        const Source = 'Source';

        /** Include the monthly search counts. */
        const MonthlySearchCounts = 'MonthlySearchCounts';

        /** Include the suggested bid. */
        const SuggestedBid = 'SuggestedBid';

        /** Include the competition. */
        const Competition = 'Competition';

        /** Include the relevance. */
        const Relevance = 'Relevance';

        /** Include the ad impression share. */
        const AdImpressionShare = 'AdImpressionShare';
    }

}
