<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines the possible time periods that determine the pool of data that the service uses to get the performance statistics of a keyword.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/timeinterval?view=bingads-11 TimeInterval Value Set
     * 
     * @used-by GetHistoricalKeywordPerformanceRequest
     */
    final class TimeInterval
    {
        /** Use data from the previous calendar month. */
        const LastMonth = 'LastMonth';

        /** Use data from last week, Sunday through Saturday. */
        const LastWeek = 'LastWeek';

        /** Use data from yesterday. */
        const LastDay = 'LastDay';
    }

}
