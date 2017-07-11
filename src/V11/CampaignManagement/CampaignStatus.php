<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the possible status values of a campaign.
     * @link http://msdn.microsoft.com/en-us/library/bb672025(v=msads.110).aspx CampaignStatus Value Set
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

        /** Your campaign has been suspended and no ads are eligible for delivery because of potentially fraudulent activity. */
        const Suspended = 'Suspended';
    }

}
