<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a key and value custom parameter for URL tracking.
     * @link http://msdn.microsoft.com/en-us/library/mt179360(v=msads.100).aspx CustomParameter Data Object
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
