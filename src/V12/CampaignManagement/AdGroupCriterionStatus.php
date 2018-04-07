<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the possible ad group criterion status values.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/adgroupcriterionstatus?view=bingads-12 AdGroupCriterionStatus Value Set
     * 
     * @used-by AdGroupCriterion
     */
    final class AdGroupCriterionStatus
    {
        /** The criterion is active. */
        const Active = 'Active';

        /** The criterion is paused. */
        const Paused = 'Paused';

        /** The criterion was deleted. */
        const Deleted = 'Deleted';
    }

}
