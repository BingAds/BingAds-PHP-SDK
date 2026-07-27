<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a CustomerListUserData data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/customerlistuserdata?view=bingads-13 CustomerListUserData Data Object
     * 
     * @uses CustomerListActionType
     * @uses CustomerListItemSubType
     * @used-by ApplyCustomerListUserDataRequest
     */
    final class CustomerListUserData
    {
        /**
         * Optional flag to accept Customer Match terms for this request.
         * @var boolean
         */
        public $AcceptCustomerMatchTerm;

        /**
         * The action type when uploading user data.
         * @var CustomerListActionType
         */
        public $ActionType;

        /**
         * The Microsoft Advertising assigned identifier of an audience, for example the customer list ID.
         * @var integer
         */
        public $AudienceId;

        /**
         * The user data type of the customer list item.
         * @var CustomerListItemSubType
         */
        public $CustomerListItemSubType;

        /**
         * An array of customer list items.
         * @var string[]
         */
        public $CustomerListItems;
    }

}
