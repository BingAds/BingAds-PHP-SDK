<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the editorial review status values of a linked asset.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/assetlinkeditorialstatus?view=bingads-13 AssetLinkEditorialStatus Value Set
     * 
     * @used-by AssetLink
     */
    final class AssetLinkEditorialStatus
    {
        /** Unknown. */
        const Unknown = 'Unknown';

        /** Approved. */
        const Active = 'Active';

        /** Rejected. */
        const Disapproved = 'Disapproved';

        /** Pending. */
        const Inactive = 'Inactive';

        /** ApprovedLimited. */
        const ActiveLimited = 'ActiveLimited';
    }

}
