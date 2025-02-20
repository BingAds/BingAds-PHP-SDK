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
        /** The asset group is active, which indicates that the asset group can be served. */
        const Active = 'Active';

        /** The asset group is paused, which indicates that the asset group will not serve. */
        const Paused = 'Paused';

        /** This status is for internal use only. */
        const Deleted = 'Deleted';

        /** The asset group is expired. */
        const Expired = 'Expired';
    }

}
