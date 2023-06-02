<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible campaign criterion status values.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/campaigncriterionstatus?view=bingads-13 CampaignCriterionStatus Value Set
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
