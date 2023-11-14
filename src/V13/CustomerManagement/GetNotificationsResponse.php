<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets a list of notification objects.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/getnotifications?view=bingads-13 GetNotifications Response Object
     * 
     * @uses Notification
     * @used-by BingAdsCustomerManagementService::GetNotifications
     */
    final class GetNotificationsResponse
    {
        /**
         * A collection of Notification objects that contains information about the Notification.
         * @var Notification[]
         */
        public $Notifications;
    }
}
