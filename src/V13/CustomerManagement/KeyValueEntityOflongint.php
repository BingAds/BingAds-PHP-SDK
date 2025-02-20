<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * The key and value entity of long and int values.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/keyvalueentityoflongint?view=bingads-13 KeyValueEntityOflongint Data Object
     * 
     * @used-by DismissNotificationsRequest
     */
    final class KeyValueEntityOflongint
    {
        /**
         * The key of the setting.
         * @var integer
         */
        public $Key;

        /**
         * The value of the setting.
         * @var integer
         */
        public $Value;
    }

}
