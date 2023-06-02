<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the operating system platform and URL of the app store download webpage.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/appurl?view=bingads-13 AppUrl Data Object
     * 
     * @used-by Ad
     * @used-by AppAdExtension
     * @used-by BiddableAdGroupCriterion
     * @used-by DisclaimerAdExtension
     * @used-by FlyerAdExtension
     * @used-by ImageAdExtension
     * @used-by Keyword
     * @used-by PromotionAdExtension
     * @used-by SitelinkAdExtension
     * @used-by VideoAdExtension
     */
    final class AppUrl
    {
        /**
         * Reserved for future use.
         * @var string
         */
        public $OsType;

        /**
         * Reserved for future use.
         * @var string
         */
        public $Url;
    }

}
