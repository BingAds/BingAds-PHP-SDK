<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/dismissnotifications?view=bingads-13 DismissNotifications Request Object
     * 
     * @uses KeyValueEntityOflongint
     * @used-by BingAdsCustomerManagementService::DismissNotifications
     */
    final class DismissNotificationsRequest
    {
        /**
         * Reserved.
         * @var integer
         */
        public $UserId;

        /**
         * Reserved.
         * @var KeyValueEntityOflongint[]
         */
        public $NotificationTypePairs;
    }
}
