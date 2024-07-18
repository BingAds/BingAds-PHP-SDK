<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * A service operation to dismiss notifications.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/dismissnotifications?view=bingads-13 DismissNotifications Request Object
     * 
     * @uses KeyValueEntityOflongint
     * @used-by BingAdsCustomerManagementService::DismissNotifications
     */
    final class DismissNotificationsRequest
    {
        /**
         * The user's identification number.
         * @var integer
         */
        public $UserId;

        /**
         * The key and value of a notification entity.
         * @var KeyValueEntityOflongint[]
         */
        public $NotificationTypePairs;
    }
}
