<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a CustomerListActionType value set.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/customerlistactiontype?view=bingads-13 CustomerListActionType Value Set
     * 
     * @used-by CustomerListUserData
     */
    final class CustomerListActionType
    {
        /** The requested action is to take no action for the customer list item. */
        const None = 'None';

        /** The requested action is to add the customer list item. */
        const Add = 'Add';

        /** The requested action is to remove the customer list item. */
        const Remove = 'Remove';

        /** The requested action is to replace the customer list item. */
        const Replace = 'Replace';
    }

}
