<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Sends an email invitation for a user to sign up for Microsoft Advertising.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/senduserinvitation?view=bingads-13 SendUserInvitation Response Object
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
