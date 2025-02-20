<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The editorial review status of the asset group, which indicates whether the asset group is pending review, has been approved, or has been disapproved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/assetgroupeditorialstatus?view=bingads-13 AssetGroupEditorialStatus Value Set
     * 
     * @used-by AssetGroup
     */
    final class AssetGroupEditorialStatus
    {
        /** The ad passed editorial review. */
        const Active = 'Active';

        /** The ad failed editorial review. */
        const Disapproved = 'Disapproved';

        /** One or more elements of the ad is undergoing editorial review. */
        const Inactive = 'Inactive';

        /** The ad passed editorial review in one or more markets, and one or more elements of the ad is undergoing editorial review in another market. */
        const ActiveLimited = 'ActiveLimited';
    }

}
