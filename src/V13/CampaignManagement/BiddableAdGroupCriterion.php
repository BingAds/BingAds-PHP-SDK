<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a biddable criterion that you want applied to the specified ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/biddableadgroupcriterion?view=bingads-13 BiddableAdGroupCriterion Data Object
     * 
     * @uses CriterionBid
     * @uses AdGroupCriterionEditorialStatus
     * @uses AppUrl
     * @uses CustomParameters
     * @uses CriterionCashback
     */
    final class BiddableAdGroupCriterion extends AdGroupCriterion
    {
        /**
         * The bid to use in the auction.
         * @var CriterionBid
         */
        public $CriterionBid;

        /**
         * The URL of the webpage that the user is taken to when they click the ad.
         * @var string
         */
        public $DestinationUrl;

        /**
         * Reserved for future use.
         * @var AdGroupCriterionEditorialStatus
         */
        public $EditorialStatus;

        /**
         * Reserved for future use.
         * @var AppUrl[]
         */
        public $FinalAppUrls;

        /**
         * Reserved for future use.
         * @var string[]
         */
        public $FinalMobileUrls;

        /**
         * The final URL suffix can include tracking parameters that will be appended to the end of your landing page URL.
         * @var string
         */
        public $FinalUrlSuffix;

        /**
         * Reserved for future use.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * Tracking templates are where you can specify URL tracking parameters that are used in tandem with your final URL or landing page.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Your custom collection of key and value parameters for URL tracking.
         * @var CustomParameters
         */
        public $UrlCustomParameters;

        /**
         * Reserved.
         * @var CriterionCashback
         */
        public $CriterionCashback;
    }

}
