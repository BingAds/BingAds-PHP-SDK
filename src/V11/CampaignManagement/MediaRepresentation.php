<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a media representation base class that includes a  media download Url.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/mediarepresentation?version=11 MediaRepresentation Data Object
     * 
     * @used-by MediaMetaData
     */
    class MediaRepresentation
    {
        /**
         * The name of the media representation.
         * @var string
         */
        public $Name;

        /**
         * The type of the media representation.
         * @var string
         */
        public $Type;

        /**
         * The media download URL.
         * @var string
         */
        public $Url;
    }

}
