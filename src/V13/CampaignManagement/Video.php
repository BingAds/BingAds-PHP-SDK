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
         * Reserved.
         * @var string
         */
        public $Description;

        /**
         * Reserved.
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
         * Reserved.
         * @var string
         */
        public $Status;

        /**
         * Reserved.
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
