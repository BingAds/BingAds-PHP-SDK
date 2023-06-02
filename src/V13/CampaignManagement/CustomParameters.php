<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a collection of key and value custom parameters for URL tracking.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/customparameters?view=bingads-13 CustomParameters Data Object
     * 
     * @uses CustomParameter
     * @used-by ActionAdExtension
     * @used-by Ad
     * @used-by AdGroup
     * @used-by AppAdExtension
     * @used-by BiddableAdGroupCriterion
     * @used-by Campaign
     * @used-by DisclaimerAdExtension
     * @used-by FilterLinkAdExtension
     * @used-by FlyerAdExtension
     * @used-by ImageAdExtension
     * @used-by Keyword
     * @used-by PriceAdExtension
     * @used-by PromotionAdExtension
     * @used-by SitelinkAdExtension
     * @used-by VideoAdExtension
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
