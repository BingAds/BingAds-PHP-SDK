<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/vanitypharmasetting?view=bingads-13 VanityPharmaSetting Data Object
     * 
     * @uses VanityPharmaDisplayUrlMode
     * @uses VanityPharmaWebsiteDescription
     */
    final class VanityPharmaSetting extends Setting
    {
        /**
         * Reserved.
         * @var VanityPharmaDisplayUrlMode
         */
        public $DisplayUrlMode;

        /**
         * Reserved.
         * @var VanityPharmaWebsiteDescription
         */
        public $WebsiteDescription;
    }

}
