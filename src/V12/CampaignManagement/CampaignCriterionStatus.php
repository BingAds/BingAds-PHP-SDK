<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the possible campaign criterion status values.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/campaigncriterionstatus?view=bingads-12 CampaignCriterionStatus Value Set
     * 
     * @used-by CampaignCriterion
     */
    final class CampaignCriterionStatus
    {
        /** The criterion is active. */
        const Active = 'Active';

        /** The criterion is paused. */
        const Paused = 'Paused';

        /** The criterion was deleted. */
        const Deleted = 'Deleted';
    }

}
