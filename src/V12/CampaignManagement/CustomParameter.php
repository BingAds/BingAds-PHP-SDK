<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines a key and value custom parameter for URL tracking.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/customparameter?view=bingads-12 CustomParameter Data Object
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
