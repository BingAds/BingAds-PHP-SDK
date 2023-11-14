<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines a Notification object.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/notification?view=bingads-13 Notification Data Object
     * 
     * @uses KeyValueEntityOfstringstring
     * @used-by GetNotificationsResponse
     */
    final class Notification
    {
        /**
         * The identifier of the type of Notification.
         * @var integer
         */
        public $TypeId;

        /**
         * The identifier of the Notification.
         * @var integer
         */
        public $Id;

        /**
         * The severity of the Notification.
         * @var integer
         */
        public $Severity;

        /**
         * The title of the Notification.
         * @var string
         */
        public $Title;

        /**
         * The message of the Notification.
         * @var string
         */
        public $Message;

        /**
         * The supporting data of the Notification.
         * @var KeyValueEntityOfstringstring[]
         */
        public $AdditionalInfo;
    }

}
