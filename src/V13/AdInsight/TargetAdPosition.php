<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the possible positions where you can target an ad to appear in the search results.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/targetadposition?view=bingads-13 TargetAdPosition Value Set
     * 
     * @used-by GetEstimatedBidByKeywordIdsRequest
     * @used-by GetEstimatedBidByKeywordsRequest
     */
    final class TargetAdPosition
    {
        /** Target the first position at the top of the search results page. */
        const MainLine1 = 'MainLine1';

        /** Target the second, third, and fourth positions at the top of the search results page. */
        const MainLine = 'MainLine';

        /** Target any position on the right side of the search results page. */
        const FirstPage = 'FirstPage';
    }

}
