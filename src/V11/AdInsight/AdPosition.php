<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines the possible positions of an ad in the search results or on a content-based webpage.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/adposition?view=bingads-11 AdPosition Value Set
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
        const SideBar1 = 'SideBar1';

        /** The second ad to appear on the right side of the first search results page. */
        const SideBar2 = 'SideBar2';

        /** The third ad to appear on the right side of the first search results page. */
        const SideBar3 = 'SideBar3';

        /** The fourth ad to appear on the right side of the first search results page. */
        const SideBar4 = 'SideBar4';

        /** The fifth ad to appear on the right side of the first search results page. */
        const SideBar5 = 'SideBar5';

        /** The sixth ad to appear on the right side of the first search results page. */
        const SideBar6 = 'SideBar6';

        /** The seventh ad to appear on the right side of the first search results page. */
        const SideBar7 = 'SideBar7';

        /** The eighth ad to appear on the right side of the first search results page. */
        const SideBar8 = 'SideBar8';

        /** The ninth ad to appear on the right side of the first search results page. */
        const SideBar9 = 'SideBar9';

        /** The tenth ad to appear on the right side of the first search results page. */
        const SideBar10 = 'SideBar10';

        /** Aggregates the data for all supported positions. */
        const Aggregate = 'Aggregate';
    }

}
