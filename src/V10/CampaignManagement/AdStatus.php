<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the possible status values of an ad.
     * @link http://msdn.microsoft.com/en-us/library/cc580692(v=msads.100).aspx AdStatus Value Set
     * 
     * @used-by Ad
     */
    final class AdStatus
    {
        /** The ad is undergoing editorial review or has failed editorial review. */
        const Inactive = 'Inactive';

        /** The ad can be served. */
        const Active = 'Active';

        /** The ad will not serve until the owner resumes it. */
        const Paused = 'Paused';

        /** This status is for internal use only. */
        const Deleted = 'Deleted';
    }

}
