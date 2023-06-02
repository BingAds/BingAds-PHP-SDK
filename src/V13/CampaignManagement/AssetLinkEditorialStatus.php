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
        /** Reserved for future use. */
        const Unknown = 'Unknown';

        /** The asset passed editorial review. */
        const Active = 'Active';

        /** The asset failed editorial review. */
        const Disapproved = 'Disapproved';

        /** One or more elements of the asset is undergoing editorial review. */
        const Inactive = 'Inactive';

        /** The asset passed editorial review in one or more markets, and one or more elements of the asset is undergoing editorial review in another market. */
        const ActiveLimited = 'ActiveLimited';
    }

}
