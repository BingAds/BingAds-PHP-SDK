<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a key and value custom parameter for URL tracking.
     * @link http://msdn.microsoft.com/en-us/library/mt179360(v=msads.110).aspx CustomParameter Data Object
     * 
     * @used-by CustomParameters
     */
    final class CustomParameter
    {
        /**
         * The name of the custom parameter that you want to track.
         * @var string
         */
        public $Key;

        /**
         * The value to track using your custom parameter.
         * @var string
         */
        public $Value;
    }

}
