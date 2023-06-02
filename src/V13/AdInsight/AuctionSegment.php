<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the possible auction segment values.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/auctionsegment?view=bingads-13 AuctionSegment Value Set
     * 
     * @used-by AuctionInsightResult
     * @used-by AuctionSegmentSearchParameter
     */
    final class AuctionSegment
    {
        /** The auction insight data is segmented by day. */
        const Day = 'Day';

        /** The auction insight data is segmented by week. */
        const Week = 'Week';

        /** The auction insight data is segmented by month. */
        const Month = 'Month';

        /** The auction insight data is segmented by quarter. */
        const Quarter = 'Quarter';

        /** The auction insight data is segmented by day of week. */
        const DayOfWeek = 'DayOfWeek';

        /** The auction insight data is segmented by device. */
        const Device = 'Device';
    }

}
