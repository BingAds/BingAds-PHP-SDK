<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the campaign privacy status value set.
     * @link https://learn.microsoft.com/en-us/advertising/campaign-management-service/campaignprivacystatus?view=bingads-13 CampaignPrivacyStatus Value Set
     * 
     * @used-by Campaign
     */
    final class CampaignPrivacyStatus
    {
        /** The status is Unknown. */
        const Unknown = 'Unknown';

        /** The status is Active. */
        const Active = 'Active';

        /** The status is TargetingToonArrow. */
        const TargetingTooNarrow = 'TargetingTooNarrow';

        /** The status is Pending. */
        const Pending = 'Pending';
    }

}
