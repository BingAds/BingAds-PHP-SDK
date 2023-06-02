<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible status values of a campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/campaignstatus?view=bingads-13 CampaignStatus Value Set
     * 
     * @used-by Campaign
     */
    final class CampaignStatus
    {
        /** The campaign is active, which indicates that the campaign's ads can be served. */
        const Active = 'Active';

        /** The campaign is paused, which indicates that the campaign's ads will not serve. */
        const Paused = 'Paused';

        /** The campaign is paused, which indicates that the campaign's ads will not serve. */
        const BudgetPaused = 'BudgetPaused';

        /** The campaign is paused, which indicates that the campaign's ads will not serve. */
        const BudgetAndManualPaused = 'BudgetAndManualPaused';

        /** The campaign is deleted. */
        const Deleted = 'Deleted';

        /** Your campaign has been suspended because of suspicious activity, and no ads are eligible for delivery. */
        const Suspended = 'Suspended';
    }

}
