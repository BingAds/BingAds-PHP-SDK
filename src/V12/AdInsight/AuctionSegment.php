<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * Defines the possible auction segment values.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/auctionsegment?view=bingads-12 AuctionSegment Value Set
     * 
     * @used-by AuctionInsightResult
     * @used-by AuctionSegmentSearchParameter
     */
    final class AuctionSegment
    {
        /** Reserved. */
        const Day = 'Day';

        /** Reserved. */
        const Week = 'Week';

        /** Reserved. */
        const Month = 'Month';

        /** Reserved. */
        const Quarter = 'Quarter';

        /** Reserved. */
        const DayOfWeek = 'DayOfWeek';

        /** Reserved. */
        const Device = 'Device';
    }

}
