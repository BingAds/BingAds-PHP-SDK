<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible user-determined status values of a conversion goal.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/conversiongoalstatus?view=bingads-13 ConversionGoalStatus Value Set
     * 
     * @used-by ConversionGoal
     */
    final class ConversionGoalStatus
    {
        /** The conversion goal is active. */
        const Active = 'Active';

        /** The conversion goal is paused. */
        const Paused = 'Paused';

        /** This status is for internal use only. */
        const Deleted = 'Deleted';
    }

}
