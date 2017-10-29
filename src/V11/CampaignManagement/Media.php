<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the base object of media.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/media?version=11 Media Data Object
     * 
     * @used-by AddMediaRequest
     * @used-by GetMediaByIdsResponse
     */
    class Media
    {
        /**
         * The unique Bing Ads identifier of the media.
         * @var integer
         */
        public $Id;

        /**
         * The media type.
         * @var string
         */
        public $MediaType;

        /**
         * The type of media to add to the media library.
         * @var string
         */
        public $Type;
    }

}
