<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the CallToActionSetting data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/calltoactionsetting?view=bingads-13 CallToActionSetting Data Object
     */
    final class CallToActionSetting extends Setting
    {
        /**
         * Determines whether to opt out of automatic selection of call to action ad asset for the multimedia ads in the campaign.
         * @var boolean
         */
        public $AutomatedCallToActionOptOut;
    }

}
