<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a media representation base class that includes a media download Url.
     * @link http://msdn.microsoft.com/en-us/library/dn766194(v=msads.110).aspx MediaRepresentation Data Object
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
