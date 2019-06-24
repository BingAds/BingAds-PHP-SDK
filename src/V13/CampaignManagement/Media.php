<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the base object of media.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/media?view=bingads-13 Media Data Object
     * 
     * @used-by AddMediaRequest
     */
    class Media
    {
        /**
         * The unique Microsoft Advertising identifier of the media.
         * @var integer
         */
        public $Id;

        /**
         * The type of media to add to the media library.
         * @var string
         */
        public $MediaType;

        /**
         * The media type.
         * @var string
         */
        public $Type;
    }

}
