<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a data object for VanityPharmaSetting.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/vanitypharmasetting?view=bingads-13 VanityPharmaSetting Data Object
     * 
     * @uses VanityPharmaDisplayUrlMode
     * @uses VanityPharmaWebsiteDescription
     */
    final class VanityPharmaSetting extends Setting
    {
        /**
         * The display mode for vanity pharma URLs for a campaign.
         * @var VanityPharmaDisplayUrlMode
         */
        public $DisplayUrlMode;

        /**
         * The text that shows in the display URL of a text ad when WebsiteDescription is the selected display mode for vanity pharma URLs for the campaign.
         * @var VanityPharmaWebsiteDescription
         */
        public $WebsiteDescription;
    }

}
