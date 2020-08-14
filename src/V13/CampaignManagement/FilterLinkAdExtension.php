<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/filterlinkadextension?view=bingads-13 FilterLinkAdExtension Data Object
     * 
     * @uses AdExtensionHeaderType
     * @uses CustomParameters
     */
    final class FilterLinkAdExtension extends AdExtension
    {
        /**
         * The header that is appended with a colon (:) and precedes the filter link values.
         * @var AdExtensionHeaderType
         */
        public $AdExtensionHeaderType;

        /**
         * Reserved.
         * @var string[]
         */
        public $FinalMobileUrls;

        /**
         * Reserved.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * Reserved.
         * @var string
         */
        public $Language;

        /**
         * The text values that follow after the Header: component.
         * @var string[]
         */
        public $Texts;

        /**
         * Reserved.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Reserved.
         * @var CustomParameters
         */
        public $UrlCustomParameters;
    }

}
