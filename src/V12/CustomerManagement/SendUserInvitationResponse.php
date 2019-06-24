<?php

namespace Microsoft\BingAds\V12\CustomerManagement;

{
    /**
     * Sends an email invitation for someone to manage your Microsoft Advertising accounts.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/senduserinvitation?view=bingads-12 SendUserInvitation Response Object
     * 
     * @used-by BingAdsCustomerManagementService::SendUserInvitation
     */
    final class SendUserInvitationResponse
    {
        /**
         * A system-generated identifier for the user invitation that was sent.
         * @var integer
         */
        public $UserInvitationId;
    }
}
