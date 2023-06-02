<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Promotion Extensions highlight special sales and offers in your text ads.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/promotionadextension?view=bingads-13 PromotionAdExtension Data Object
     * 
     * @uses PromotionDiscountModifier
     * @uses AppUrl
     * @uses Date
     * @uses PromotionOccasion
     * @uses CustomParameters
     */
    final class PromotionAdExtension extends AdExtension
    {
        /**
         * The currency code for the promotion price or discount.
         * @var string
         */
        public $CurrencyCode;

        /**
         * The promotion discount modifier.
         * @var PromotionDiscountModifier
         */
        public $DiscountModifier;

        /**
         * Reserved for future use.
         * @var AppUrl[]
         */
        public $FinalAppUrls;

        /**
         * The landing page URL for mobile devices.
         * @var string[]
         */
        public $FinalMobileUrls;

        /**
         * The final URL suffix can include tracking parameters that will be appended to the end of your landing page URL.
         * @var string
         */
        public $FinalUrlSuffix;

        /**
         * The landing page URL.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * The language that the ad extension will be served in.
         * @var string
         */
        public $Language;

        /**
         * The money off promotion value.
         * @var double
         */
        public $MoneyAmountOff;

        /**
         * The orders over amount value appended to the promotion target.
         * @var double
         */
        public $OrdersOverAmount;

        /**
         * The percent off promotion value.
         * @var double
         */
        public $PercentOff;

        /**
         * The promotion code appended to the promotion target.
         * @var string
         */
        public $PromotionCode;

        /**
         * The end date helps to inform the promotion date or dates that will be displayed in the ad.
         * @var Date
         */
        public $PromotionEndDate;

        /**
         * The promotion target or item.
         * @var string
         */
        public $PromotionItem;

        /**
         * The promotion occasion.
         * @var PromotionOccasion
         */
        public $PromotionOccasion;

        /**
         * The start date helps to inform the promotion date or dates that will be displayed in the ad.
         * @var Date
         */
        public $PromotionStartDate;

        /**
         * The tracking template to use as a default for all FinalUrls and FinalMobileUrls.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Your custom collection of key and value parameters for URL tracking.
         * @var CustomParameters
         */
        public $UrlCustomParameters;
    }

}
