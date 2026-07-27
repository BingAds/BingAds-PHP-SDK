<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible LinkedIn segment status values.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/linkedinsegmentstatus?view=bingads-13 LinkedInSegmentStatus Value Set
     * 
     * @used-by LinkedInSegment
     */
    final class LinkedInSegmentStatus
    {
        /** The status is Building. */
        const Building = 'Building';

        /** The status is Ready. */
        const Ready = 'Ready';

        /** The status is ReachTooSmall. */
        const ReachTooSmall = 'ReachTooSmall';
    }

}
