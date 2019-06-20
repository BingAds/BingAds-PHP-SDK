<?php

namespace Microsoft\BingAds\V12\CustomerManagement;

{
    /**
     * Sends an email invitation for someone to manage your Microsoft Advertising accounts.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/senduserinvitation?view=bingads-12 SendUserInvitation Request Object
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
