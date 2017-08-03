<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the possible status values that determine whether to apply the criterion to the ad group.
     * @link http://msdn.microsoft.com/en-us/library/jj689542(v=msads.100).aspx AdGroupCriterionStatus Value Set
     * 
     * @used-by AdGroupCriterion
     */
    final class AdGroupCriterionStatus
    {
        /** Apply the criterion to the ad group. */
        const Active = 'Active';

        /** Do not apply the criterion to the ad group. */
        const Paused = 'Paused';

        /** The criterion was deleted. */
        const Deleted = 'Deleted';
    }

}
