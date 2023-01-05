<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Sends an email invitation for a user to sign up for Microsoft Advertising.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/senduserinvitation?view=bingads-13 SendUserInvitation Request Object
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
