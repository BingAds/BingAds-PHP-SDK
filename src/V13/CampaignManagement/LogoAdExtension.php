<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an ad extension that specifies a business logo.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/logoadextension?view=bingads-13 LogoAdExtension Data Object
     */
    final class LogoAdExtension extends AdExtension
    {
        /**
         * The asset ID for the business logo.
         * @var integer
         */
        public $BusinessLogo;

        /**
         * The URL of the business logo.
         * @var string
         */
        public $BusinessLogoUrl;

        /**
         * The business name.
         * @var string
         */
        public $BusinessName;

        /**
         * The domain name.
         * @var string
         */
        public $DomainName;
    }

}
