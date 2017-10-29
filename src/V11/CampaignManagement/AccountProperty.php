<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Maps an account level property name to a string value.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/accountproperty?version=11 AccountProperty Data Object
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
