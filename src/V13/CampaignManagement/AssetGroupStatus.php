<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The status of the AssetGroup.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/assetgroupstatus?view=bingads-13 AssetGroupStatus Value Set
     * 
     * @used-by AssetGroup
     */
    final class AssetGroupStatus
    {
        /** The status of the AssetGroup is Active. */
        const Active = 'Active';

        /** The status of the AssetGroup is Paused. */
        const Paused = 'Paused';

        /** The status of the AssetGroup is Deleted. */
        const Deleted = 'Deleted';

        /** Reserved. */
        const Expired = 'Expired';
    }

}
