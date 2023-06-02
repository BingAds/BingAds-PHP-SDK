<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the possible positions of an ad in the search results.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/adposition?view=bingads-13 AdPosition Value Set
     * 
     * @used-by KeywordKPI
     * @used-by GetHistoricalKeywordPerformanceRequest
     */
    final class AdPosition
    {
        /** Indicates all search result positions. */
        const All = 'All';

        /** The first ad to appear at the top of the search results page. */
        const MainLine1 = 'MainLine1';

        /** The second ad to appear at the top of the search results page. */
        const MainLine2 = 'MainLine2';

        /** The third ad to appear at the top of the search results page. */
        const MainLine3 = 'MainLine3';

        /** The fourth ad to appear at the top of the search results page. */
        const MainLine4 = 'MainLine4';

        /** The first ad to appear on the right side of the first search results page. */
        const FirstPage1 = 'FirstPage1';

        /** The second ad to appear on the right side of the first search results page. */
        const FirstPage2 = 'FirstPage2';

        /** The third ad to appear on the right side of the first search results page. */
        const FirstPage3 = 'FirstPage3';

        /** The fourth ad to appear on the right side of the first search results page. */
        const FirstPage4 = 'FirstPage4';

        /** The fifth ad to appear on the right side of the first search results page. */
        const FirstPage5 = 'FirstPage5';

        /** The sixth ad to appear on the right side of the first search results page. */
        const FirstPage6 = 'FirstPage6';

        /** The seventh ad to appear on the right side of the first search results page. */
        const FirstPage7 = 'FirstPage7';

        /** The eighth ad to appear on the right side of the first search results page. */
        const FirstPage8 = 'FirstPage8';

        /** The ninth ad to appear on the right side of the first search results page. */
        const FirstPage9 = 'FirstPage9';

        /** The tenth ad to appear on the right side of the first search results page. */
        const FirstPage10 = 'FirstPage10';

        /** Aggregates the data for all supported positions. */
        const Aggregate = 'Aggregate';
    }

}
