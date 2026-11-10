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
        /** The entity is active and eligible to serve. */
        const Active = 'Active';

        /** The entity is paused and is not eligible to serve. */
        const Paused = 'Paused';

        /** The entity failed editorial review. */
        const Disapproved = 'Disapproved';

        /** The entity is inactive. */
        const Inactive = 'Inactive';

        /** The entity is deleted. */
        const Deleted = 'Deleted';
    }

}
