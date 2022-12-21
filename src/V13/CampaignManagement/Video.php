<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the Video Data Object.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/video?view=bingads-13 Video Data Object
     * 
     * @used-by AddVideosRequest
     * @used-by GetVideosByIdsResponse
     * @used-by UpdateVideosRequest
     */
    final class Video
    {
        /**
         * Reserved.
         * @var string
         */
        public $AspectRatio;

        /**
         * Reserved.
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
         * Reserved.
         * @var string
         */
        public $FailureCode;

        /**
         * Reserved.
         * @var integer
         */
        public $Id;

        /**
         * Reserved.
         * @var \DateTime
         */
        public $ModifiedDateTimeInUTC;

        /**
         * Reserved.
         * @var string
         */
        public $SourceUrl;

        /**
         * The status of the video asset.
         * @var string
         */
        public $Status;

        /**
         * The thumbnail URL of the video asset.
         * @var string
         */
        public $ThumbnailUrl;

        /**
         * Reserved.
         * @var string
         */
        public $Url;
    }

}
