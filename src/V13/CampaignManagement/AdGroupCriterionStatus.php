<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible ad group criterion status values.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adgroupcriterionstatus?view=bingads-13 AdGroupCriterionStatus Value Set
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
