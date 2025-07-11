<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the generic entity status value set.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/genericentitystatus?view=bingads-13 GenericEntityStatus Value Set
     * 
     * @used-by AssetGroupSearchTheme
     * @used-by AssetGroupUrlTarget
     */
    final class GenericEntityStatus
    {
        /** Reserved. */
        const Active = 'Active';

        /** Reserved. */
        const Paused = 'Paused';

        /** Reserved. */
        const Disapproved = 'Disapproved';

        /** Reserved. */
        const Inactive = 'Inactive';

        /** Reserved. */
        const Deleted = 'Deleted';
    }

}
