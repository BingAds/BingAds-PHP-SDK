<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a list of optional Campaign elements that you can request when calling GetCampaignsByAccountId and GetCampaignsByIds.
     * @link http://msdn.microsoft.com/en-us/library/mt709093(v=msads.100).aspx CampaignAdditionalField Value Set
     * 
     * @used-by GetCampaignsByAccountIdRequest
     * @used-by GetCampaignsByIdsRequest
     */
    final class CampaignAdditionalField
    {
        /** Includes the BiddingScheme element in the Campaign object. */
        const BiddingScheme = 'BiddingScheme';

        /** Includes the BudgetId element in the Campaign object. */
        const BudgetId = 'BudgetId';

        /** Includes the Languages element in the Campaign object. */
        const Languages = 'Languages';
    }

}
