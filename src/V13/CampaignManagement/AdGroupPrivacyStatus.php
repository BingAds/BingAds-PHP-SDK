<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines possible values for ad group privacy status in Audience campaigns.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adgroupprivacystatus?view=bingads-13 AdGroupPrivacyStatus Value Set
     * 
     * @used-by AdGroup
     */
    final class AdGroupPrivacyStatus
    {
        /** Reserved for future use. */
        const Unknown = 'Unknown';

        /** The ad group is eligible to serve. */
        const Active = 'Active';

        /** The ad group is not eligible to serve because your ad group target criteria e.g., ProfileCriterion are too narrowly defined. */
        const TargetingTooNarrow = 'TargetingTooNarrow';

        /** The privacy evaluation is still in progress, and the ad group is not yet eligible to serve. */
        const Pending = 'Pending';
    }

}
