<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the base object of media.
     * @link http://msdn.microsoft.com/en-us/library/dn195580(v=msads.110).aspx Media Data Object
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
