<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Sends an invitation for  a Microsoft account user to manage one or more Bing Ads customer accounts.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/senduserinvitation?view=bingads-11 SendUserInvitation Response Object
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
