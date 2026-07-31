<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a CustomerListItemSubType value set.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/customerlistitemsubtype?view=bingads-13 CustomerListItemSubType Value Set
     * 
     * @used-by CustomerListUserData
     */
    final class CustomerListItemSubType
    {
        /** The user data type is email. */
        const Email = 'Email';

        /** Not currently supported. */
        const CRM = 'CRM';

        /** Not currently supported. */
        const Phone = 'Phone';
    }

}
