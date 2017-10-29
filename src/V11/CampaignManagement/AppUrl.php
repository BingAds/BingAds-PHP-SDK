<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the operating system platform and URL of the app store download webpage.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/appurl?version=11 AppUrl Data Object
     * 
     * @used-by Ad
     * @used-by AppAdExtension
     * @used-by BiddableAdGroupCriterion
     * @used-by ImageAdExtension
     * @used-by Keyword
     * @used-by SiteLink
     * @used-by Sitelink2AdExtension
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
