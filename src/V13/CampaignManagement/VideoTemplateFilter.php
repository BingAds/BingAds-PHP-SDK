<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the video template filter data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/videotemplatefilter?view=bingads-13 VideoTemplateFilter Data Object
     * 
     * @used-by GetClipchampTemplatesRequest
     */
    final class VideoTemplateFilter
    {
        /**
         * Reserved.
         * @var string[]
         */
        public $AspectRatios;

        /**
         * Reserved.
         * @var integer[]
         */
        public $Durations;

        /**
         * Reserved.
         * @var integer
         */
        public $MaxMediaAssetCount;

        /**
         * Reserved.
         * @var integer
         */
        public $MaxTextAssetCount;

        /**
         * Reserved.
         * @var string[]
         */
        public $TemplateIds;

        /**
         * Reserved.
         * @var string[]
         */
        public $Themes;
    }

}
