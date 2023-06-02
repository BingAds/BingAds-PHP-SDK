<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the ad group level settings for feed-based Microsoft Shopping Campaigns.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/coopsetting?view=bingads-13 CoOpSetting Data Object
     * 
     * @uses BidOption
     */
    final class CoOpSetting extends Setting
    {
        /**
         * The default bid boost percentage that you'll see in the Microsoft Advertising web application for new product groups.
         * @var double
         */
        public $BidBoostValue;

        /**
         * The fixed bid maximum.
         * @var double
         */
        public $BidMaxValue;

        /**
         * Determines whether or not to amplify your partner's bid.
         * @var BidOption
         */
        public $BidOption;
    }

}
