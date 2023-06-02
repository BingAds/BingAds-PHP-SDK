<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Maps an account level property name to a string value.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/accountproperty?view=bingads-13 AccountProperty Data Object
     * 
     * @uses AccountPropertyName
     * @used-by GetAccountPropertiesResponse
     * @used-by SetAccountPropertiesRequest
     */
    final class AccountProperty
    {
        /**
         * The name of the account property.
         * @var AccountPropertyName
         */
        public $Name;

        /**
         * The value of the named account property.
         * @var string
         */
        public $Value;
    }

}
