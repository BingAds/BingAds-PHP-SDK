<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible status values of an ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adgroupstatus?view=bingads-13 AdGroupStatus Value Set
     * 
     * @used-by AdGroup
     */
    final class AdGroupStatus
    {
        /** The ad group is active, which indicates that the ad group's ads can be served. */
        const Active = 'Active';

        /** The ad group is paused, which indicates that the ad group's ads will not serve. */
        const Paused = 'Paused';

        /** The ad group expired. */
        const Expired = 'Expired';

        /** This status is for internal use only. */
        const Deleted = 'Deleted';
    }

}
