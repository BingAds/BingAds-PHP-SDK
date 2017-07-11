<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Maps an account level property name to a string value.
     * @link http://msdn.microsoft.com/en-us/library/mt803286(v=msads.110).aspx AccountProperty Data Object
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
