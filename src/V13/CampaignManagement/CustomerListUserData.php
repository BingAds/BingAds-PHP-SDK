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
         * Take an action for a customer list item within this array.
         * @var string[]
         */
        public $CustomerListItems;
    }

}
