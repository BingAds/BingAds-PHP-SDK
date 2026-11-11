<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the Video Data Object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/video?view=bingads-13 Video Data Object
     * 
     * @uses AdvertiserAILabel
     * @uses SystemAIDetectionSignal
     * @used-by AdRecommendationVideoSuggestion
     * @used-by AddVideosRequest
     * @used-by GetVideosByIdsResponse
     * @used-by UpdateVideosRequest
     */
    final class Video
    {
        /**
         * The advertiser's declaration about AI-generated content and visible watermarks in the video.
         * @var AdvertiserAILabel
         */
        public $AdvertiserAILabel;

        /**
         * The video's aspect ratio.
         * @var string
         */
        public $AspectRatio;

        /**
         * The date and time the video was created, in Coordinated Universal Time.
         * @var \DateTime
         */
        public $CreatedDateTimeInUTC;

        /**
         * The description of the video asset.
         * @var string
         */
        public $Description;

        /**
         * The duration in milliseconds of the video asset.
         * @var integer
         */
        public $DurationInMilliseconds;

        /**
         * Read the description for each possible error code below.
         * @var string
         */
        public $FailureCode;

        /**
         * The identifier of the video.
         * @var integer
         */
        public $Id;

        /**
         * The date and time the video was last modified, in Coordinated Universal Time.
         * @var \DateTime
         */
        public $ModifiedDateTimeInUTC;

        /**
         * The original URL of the video.
         * @var string
         */
        public $SourceUrl;

        /**
         * The status of the video asset.
         * @var string
         */
        public $Status;

        /**
         * Microsoft's detection of AI provenance for the video.
         * @var SystemAIDetectionSignal
         */
        public $SystemAIDetectionSignal;

        /**
         * The thumbnail URL of the video asset.
         * @var string
         */
        public $ThumbnailUrl;

        /**
         * The URL where the video is hosted.
         * @var string
         */
        public $Url;
    }

}
