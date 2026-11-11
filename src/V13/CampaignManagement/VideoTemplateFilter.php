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
         * The aspect ratios of the video templates to return.
         * @var string[]
         */
        public $AspectRatios;

        /**
         * The durations, in seconds, of the video templates to return.
         * @var integer[]
         */
        public $Durations;

        /**
         * The maximum number of media assets supported by the video templates to return.
         * @var integer
         */
        public $MaxMediaAssetCount;

        /**
         * The maximum number of text assets supported by the video templates to return.
         * @var integer
         */
        public $MaxTextAssetCount;

        /**
         * The identifiers of the video templates to return.
         * @var string[]
         */
        public $TemplateIds;

        /**
         * The themes of the video templates to return.
         * @var string[]
         */
        public $Themes;
    }

}
