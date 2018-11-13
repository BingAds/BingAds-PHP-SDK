<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines a collection of key and value custom parameters for URL tracking.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/customparameters?view=bingads-12 CustomParameters Data Object
     * 
     * @uses CustomParameter
     * @used-by ActionAdExtension
     * @used-by Ad
     * @used-by AdGroup
     * @used-by AppAdExtension
     * @used-by BiddableAdGroupCriterion
     * @used-by Campaign
     * @used-by ImageAdExtension
     * @used-by Keyword
     * @used-by PriceAdExtension
     * @used-by SitelinkAdExtension
     */
    final class CustomParameters
    {
        /**
         * The collection of key and value custom parameters for URL tracking.
         * @var CustomParameter[]
         */
        public $Parameters;
    }

}
