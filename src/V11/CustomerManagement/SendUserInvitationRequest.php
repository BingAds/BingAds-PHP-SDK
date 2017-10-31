<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Sends an invitation for  a Microsoft account user to manage one or more Bing Ads customer accounts.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/senduserinvitation?view=bingads-11 SendUserInvitation Request Object
     * 
     * @uses UserInvitation
     * @used-by BingAdsCustomerManagementService::SendUserInvitation
     */
    final class SendUserInvitationRequest
    {
        /**
         * The user invitation to send.
         * @var UserInvitation
         */
        public $UserInvitation;
    }
}
