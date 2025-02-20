<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets a list of notification objects.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/getnotifications?view=bingads-13 GetNotifications Request Object
     * 
     * @used-by BingAdsCustomerManagementService::GetNotifications
     */
    final class GetNotificationsRequest
    {
        /**
         * The locale of the message.
         * @var string
         */
        public $Locale;

        /**
         * The UserId filter.
         * @var integer
         */
        public $UserId;

        /**
         * A list of notification type filter.
         * @var integer[]
         */
        public $TypeIds;
    }
}
