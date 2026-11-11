<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the clip champ template info data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/clipchamptemplateinfo?view=bingads-13 ClipchampTemplateInfo Data Object
     * 
     * @used-by GetClipchampTemplatesResponse
     */
    final class ClipchampTemplateInfo
    {
        /**
         * The aspect ratio of the video template.
         * @var string
         */
        public $AspectRatio;

        /**
         * The duration of the video template in seconds.
         * @var integer
         */
        public $Duration;

        /**
         * The number of image assets that the video template supports.
         * @var integer
         */
        public $NumberOfImages;

        /**
         * The number of logo assets that the video template supports.
         * @var integer
         */
        public $NumberOfLogos;

        /**
         * The number of text assets that the video template supports.
         * @var integer
         */
        public $NumberOfText;

        /**
         * The video template description.
         * @var string
         */
        public $TemplateDescription;

        /**
         * The identifier of the video template.
         * @var string
         */
        public $TemplateId;

        /**
         * The video template name.
         * @var string
         */
        public $TemplateName;

        /**
         * The URL of a preview of the video template.
         * @var string
         */
        public $TemplatePreviewUrl;

        /**
         * The URL of the video template thumbnail.
         * @var string
         */
        public $TemplateThumbnailUrl;

        /**
         * The themes associated with the video template.
         * @var string[]
         */
        public $Themes;
    }

}
