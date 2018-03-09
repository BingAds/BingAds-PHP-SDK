<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/adgroupprivacystatus?view=bingads-11 AdGroupPrivacyStatus Value Set
     * 
     * @used-by AdGroup
     */
    final class AdGroupPrivacyStatus
    {
        /** Reserved. */
        const Unknown = 'Unknown';

        /** Reserved. */
        const Active = 'Active';

        /** Reserved. */
        const TargetingTooNarrow = 'TargetingTooNarrow';

        /** Reserved. */
        const Pending = 'Pending';
    }

}
