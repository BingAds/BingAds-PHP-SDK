<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the HTML5 asset data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/html5?view=bingads-13 HTML5 Data Object
     * 
     * @used-by AddHTML5sRequest
     * @used-by GetHTML5sByIdsResponse
     */
    final class HTML5
    {
        /**
         * The date and time the HTML5 asset was created in UTC.
         * @var \DateTime
         */
        public $CreatedDateTimeInUTC;

        /**
         * The URL of the webpage that the user is taken to when they click the ad.
         * @var string
         */
        public $DestinationUrl;

        /**
         * A descriptive error code for any issues with the HTML5 asset.
         * @var string
         */
        public $FailureCode;

        /**
         * The height of the HTML5 asset.
         * @var integer
         */
        public $Height;

        /**
         * The HTML5 asset's ID.
         * @var integer
         */
        public $Id;

        /**
         * The date and time the HTML5 asset was modified in UTC.
         * @var \DateTime
         */
        public $ModifiedDateTimeInUTC;

        /**
         * The name of the HTML5 asset.
         * @var string
         */
        public $Name;

        /**
         * The status of the HTML5 asset.
         * @var string
         */
        public $Status;

        /**
         * Descriptive text for the HTML5 asset.
         * @var string
         */
        public $Text;

        /**
         * The URL of the thumbnail used for the HTML5 asset.
         * @var string
         */
        public $ThumbnailUrl;

        /**
         * The URL of the HTML5 asset.
         * @var string
         */
        public $Url;

        /**
         * The width of the HTML5 asset.
         * @var integer
         */
        public $Width;
    }

}
