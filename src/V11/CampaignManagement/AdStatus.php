<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the possible status values of an ad.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/adstatus?view=bingads-11 AdStatus Value Set
     * 
     * @used-by Ad
     */
    final class AdStatus
    {
        /** This status is read-only. */
        const Inactive = 'Inactive';

        /** The ad can be served. */
        const Active = 'Active';

        /** The ad will not serve until the owner resumes it. */
        const Paused = 'Paused';

        /** This status is for internal use only. */
        const Deleted = 'Deleted';
    }

}
