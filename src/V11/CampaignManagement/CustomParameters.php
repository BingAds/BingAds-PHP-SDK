<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a collection of key and value custom parameters for URL tracking.
     * @link http://msdn.microsoft.com/en-us/library/mt179361(v=msads.110).aspx CustomParameters Data Object
     * 
     * @uses CustomParameter
     * @used-by Ad
     * @used-by AdGroup
     * @used-by AppAdExtension
     * @used-by BiddableAdGroupCriterion
     * @used-by Campaign
     * @used-by ImageAdExtension
     * @used-by Keyword
     * @used-by PriceAdExtension
     * @used-by SiteLink
     * @used-by Sitelink2AdExtension
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
