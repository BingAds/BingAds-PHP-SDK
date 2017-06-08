<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines values that you can use to determine whether the remarketing list can only be associated with ad groups within one specified account, or can be associated with any ad groups across all of the customer's accounts.
     * @link http://msdn.microsoft.com/en-us/library/mt735045(v=msads.100).aspx EntityScope Value Set
     * 
     * @used-by ConversionGoal
     * @used-by RemarketingList
     */
    final class EntityScope
    {
        /** The remarketing list can only be associated with ad groups within one specified account. */
        const Account = 'Account';

        /** The remarketing list can be associated with any ad groups across all of the customer's accounts. */
        const Customer = 'Customer';
    }

}
