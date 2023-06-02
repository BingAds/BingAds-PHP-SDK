<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Contains the association count for the corresponding usage type.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/customeraccountshareassociation?view=bingads-13 CustomerAccountShareAssociation Data Object
     * 
     * @used-by CustomerAccountShare
     */
    final class CustomerAccountShareAssociation
    {
        /**
         * The association count for the corresponding usage type.
         * @var integer
         */
        public $AssociationCount;

        /**
         * Indicates how the customer account share is used e.g., via audience association.
         * @var string
         */
        public $UsageType;
    }

}
